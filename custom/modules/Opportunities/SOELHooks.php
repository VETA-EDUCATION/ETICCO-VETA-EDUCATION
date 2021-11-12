<?php

include_once( 'modules/ACLRoles/ACLRole.php' );
require_once( 'modules/Veta_Recibo/Veta_Recibo.php' );

if ( ! defined( 'sugarEntry' ) || ! sugarEntry )
{
    die( 'Not A Valid Entry Point' );
}

class SOELHooks
{

    function __construct()
    {

    }

    /*function establecer_condiciones_iniciales( Opportunity &$bean , $event , $arguments ) {

        if( empty( $bean->sales_stage ) ) {
            $p = new Contact();
            $p->retrieve( $_POST[ 'contacts_opportunities_1contacts_ida' ] );

            $bean->sales_stage = "Inicio";
            $bean->saldo_pendiente_pago_c = $bean->amount * 1;
            $bean->porcentaje_pago_c = 0;
            $bean->fecha_expiracion_visa_c = $p->fecha_expiracion_visa_c;

        }
    } */

    /*function verificar_rol( &$bean , $event , $arguments ) {
        global $current_user;
        $o = new Opportunity();
        $o->retrieve( $bean->id );

        if( $bean->estado_recoleccion_documento_c != $o->estado_recoleccion_documento_c ) {
            $objACLRole = new ACLRole();
            $roles = $objACLRole->getUserRoles( $current_user->id );

            if( ! in_array( 'Servicio al Cliente' , $roles ) ) {
                $msg = "No tiene privilegios suficientes para cambiar el estado de la recoleccion de documentos";
                $this->redireccionar( $msg , $bean->id );
                //exit;
            }
        }
    }*/

    /**
     * Establece el consecutivo del presupuesto
     */
    public function set_consecutivo( Opportunity &$o )
    {
        if ( ! isset( $o->name ) || empty( $o->name ) )
        {
            $result = $o->db->query( 'FLUSH TABLES WITH READ LOCK' );
            $query  = "SELECT COUNT(id) AS num FROM opportunities LIMIT 1";
            $result = $o->db->query( $query, true, "Error obteniendo el consecutivo de la oportunidad" );
            $row    = $o->db->fetchByAssoc( $result );

            if ( $row != null )
            {
                $o->name = intval( $row[ 'num' ] ) + 1;
            }

            $o->db->query( 'UNLOCK TABLES' );
        }
    }

    private function get_recibo( Opportunity $o )
    {
        $r = null;

        $recibos = $o->get_linked_beans( 'veta_recibo_opportunities', 'Veta_Recibo' );

        foreach ( $recibos as $rec )
        {
            $r = $rec;
        }

        return $r;
    }

    /**
     * Este metodo obtiene una lista con las Aplicaciones relacionadas con la Oportunidad
     *
     * @param Opportunity $o
     * @return Una lista de Aplicaciones
     */
    private function get_aplicaciones( Opportunity $o )
    {
        return $o->get_linked_beans( 'veta_aplicacion_opportunities', 'Veta_Aplicacion' );
    }

    /**
     * Este metodo obtiene una lista con los Servicios al Cliente relacionados con la Oportunidad
     *
     * @param Opportunity $o
     * @return Una lista de Servicios al Cliente
     */
    private function get_servicios_cliente( Opportunity $o )
    {
        return $o->get_linked_beans( 'veta_serviciocliente_opportunities', 'Veta_ServicioCliente' );
    }

    private function get_pendiente_pago_colegios( Opportunity $o )
    {

        $pendiente = null;
        $r         = $this->get_recibo( $o );

        if ( $r != null )
        {
            $pendiente = $r->gran_total * 1;
            $pagado    = 0;

            $aplicaciones = $o->get_linked_beans( 'veta_aplicacion_opportunities', 'Veta_Aplicacion' );

            foreach ( $aplicaciones as $a )
            {

                $loos = $a->get_linked_beans( 'veta_loo_veta_aplicacion', 'Veta_Loo' );

                foreach ( $loos as $loo )
                {

                    $liquidaciones = $loo->get_linked_beans( 'veta_liquidacion_veta_loo', 'Veta_Liquidacion' );

                    foreach ( $liquidaciones as $l )
                    {
                        $pagado += $l->total_pagado * 1;
                    }
                }
            }

            $pendiente -= $pagado;
        }

        return $pendiente;
    }

    function pre_save( &$bean, $event, $arguments )
    {
        global $timedate;
        $r = new Veta_Recibo();
        $r->retrieve( $_GET[ "rid" ] );

        if ( ! isset( $r->id ) )
        {
            $r = $this->get_recibo( $bean );
        }

        $this->set_consecutivo( $bean );

        if ( isset( $r ) )
        {
            $p = $r->get_person();
        }

        if ( isset( $p ) )
        {
            if ( empty( $bean->fecha_expiracion_visa_c ) )
            {
                $bean->fecha_expiracion_visa_c = $timedate->to_db( $p->fecha_expiracion_visa_c );
            }

            if ( empty( $bean->fecha_ultimo_contacto_c ) )
            {
                $bean->fecha_ultimo_contacto_c = $timedate->to_db( $p->fecha_ultimo_contacto_c );
            }

            if ( empty( $bean->fecha_proximo_contacto_c ) )
            {
                $bean->fecha_proximo_contacto_c = $timedate->to_db( $p->fecha_proximo_contacto_c );
            }

            if ( empty( $bean->fecha_viaje_c ) and isset( $p->fecha_viaje_2_c ) )
            {
                $bean->fecha_viaje_c = $timedate->to_db_date( $p->fecha_viaje_2_c );
            }

            if ( empty( $bean->lead_source ) and isset( $p->lead_source ) )
            {
                $bean->lead_source = $p->lead_source;
            }

            if ( empty( $bean->campaign_id ) and isset( $p->campaign_id ) )
            {
                $bean->campaign_id = $p->campaign_id;
            }


        }

        if ( isset( $r ) )
        {
            $pa = $r->get_primer_abono();
        }

        if ( isset( $pa ) )
        {
            $bean->fecha_cierre_c = $timedate->to_db( $pa->date_entered );
            $bean->date_closed    = substr( $timedate->to_db( $pa->date_entered ), 0, 10 );
        }

        if ( $this->es_descartado( $bean ) )
        {
            $bean->sales_stage = 'Descartado';
        }

        if ( isset( $this->estado_admisiones_c ) && $this->estado_admisiones_c == 'COE_Guardado_Enviado' )
        {
            $this->sales_stage = 'Finalizado';
        }

        if ( isset( $r->id ) )
        {
            $bean->estado_cartera_c = $r->estado;
        }

        $bean->pendiente_pago_colegios_c = $this->get_pendiente_pago_colegios( $bean );

        /*if ( ! empty( $bean->date_closed ) )
        {
            $bean->date_closed = $timedate->to_db( $bean->date_closed );
        }*/
    }

    private function es_descartado( $bean )
    {
        $descartado = false;

        if ( isset( $bean->estado_cartera_c ) && substr_count( strtolower( $bean->estado_cartera_c ),
                'descartad'
            ) > 0 )
        {
            $descartado = true;
        }

        if ( isset( $bean->estado_admisiones_c ) && substr_count( strtolower( $bean->estado_admisiones_c ),
                'descartad'
            ) > 0 )
        {
            $descartado = true;
        }

        if ( isset( $bean->estado_servicio_al_cliente_c ) && substr_count( strtolower( $bean->estado_servicio_al_cliente_c ),
                'descartad'
            ) > 0 )
        {
            $descartado = true;
        }

        if ( isset( $bean->estado_gestion_comercial_c ) && substr_count( strtolower( $bean->estado_gestion_comercial_c ),
                'descartad'
            ) > 0 )
        {
            $descartado = true;
        }

        if ( isset( $bean->estado_pago_institucion_c ) && substr_count( strtolower( $bean->estado_pago_institucion_c ),
                'descartad'
            ) > 0 )
        {
            $descartado = true;
        }

        if ( isset( $bean->estado_visas_c ) && substr_count( strtolower( $bean->estado_visas_c ), 'descartad' ) > 0 )
        {
            $descartado = true;
        }

        return $descartado;
    }

    function post_save( &$bean, $event, $arguments )
    {
        $r = new Veta_Recibo();
        $r->retrieve( $_GET[ "rid" ] );

        if ( $r != null )
        {
            $lead = $r->get_lead();
            $contact = $r->get_contact();

            // Crear relacion con el prospecto o con el estudiante
            if ( isset( $lead ) && $lead->module_name == "Leads" )
            {

                $aux1 = $bean->load_relationship( 'leads_opportunities_1' );
                $aux2 = $bean->leads_opportunities_1->add( $lead->id );
            }

            if ( isset( $contact ) && $contact->module_name == "Contacts" )
            {

                $bean->load_relationship( 'contacts_opportunities_1' );
                $bean->contacts_opportunities_1->add( $contact->id );
            }
        }
    }

    private function redireccionar( $msg, $registro )
    {
        if ( ! empty( $registro ) )
        {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Opportunities&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else
        {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }

    /**
     * Este metodo establece el estado del COE, LOO , Servicio al Cliente y Visa como descartado
     *
     * @param $bean Representa la oportunidad
     * @param $event
     * @param $arguments
     */
    function pre_delete( &$bean, $event, $arguments )
    {
        $aplicaciones = $this->get_aplicaciones( $bean );

        foreach ( $aplicaciones as $a )
        {
            $a->descartar();
        }

        $servicios_cliente = $this->get_servicios_cliente( $bean );

        foreach ( $servicios_cliente as $sc )
        {
            $sc->descartar();
        }
    }

}