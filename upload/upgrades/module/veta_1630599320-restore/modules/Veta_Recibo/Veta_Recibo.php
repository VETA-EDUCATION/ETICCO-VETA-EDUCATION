<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

require_once( 'modules/Veta_TRM/Veta_TRM.php' );
require_once( 'modules/ACLRoles/ACLRole.php' );
require_once( 'modules/Opportunities/Opportunity.php' );
require_once( 'modules/Veta_Aplicacion/Veta_Aplicacion.php' );
require_once( 'modules/Veta_ServicioCliente/Veta_ServicioCliente.php' );

class Veta_Recibo extends Basic
{
    public $new_schema  = true;
    public $module_dir  = 'Veta_Recibo';
    public $object_name = 'Veta_Recibo';
    public $table_name  = 'veta_recibo';
    public $importable  = false;

    public  $id;
    public  $name;
    public  $date_entered;
    public  $date_modified;
    public  $modified_user_id;
    public  $modified_by_name;
    public  $created_by;
    public  $created_by_name;
    public  $description;
    public  $deleted;
    public  $created_by_link;
    public  $modified_user_link;
    public  $assigned_user_id;
    public  $assigned_user_name;
    public  $assigned_user_link;
    public  $SecurityGroups;
    public  $pais;
    public  $departamento;
    public  $ciudad;
    public  $primer_pago;
    public  $currency_id;
    public  $subtotal;
    public  $gran_total;
    public  $pendiente_por_pagar;
    public  $pagado;
    public  $estado;
    public  $examen_medico;
    public  $seguro;
    public  $total_visa;
    public  $veta_curso_id_c;
    private $no_verificar_proceso_venta = false;


    public function bean_implements( $interface )
    {
        switch ( $interface )
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function set_consecutivo()
    {
        if ( ! isset( $this->id ) || empty( $this->id ) )
        {

            $query  = "SELECT COUNT(id) AS num FROM veta_recibo LIMIT 1";
            $result = $this->db->query( $query, true, "Error obteniendo el consecutivo del recibo" );
            $row    = $this->db->fetchByAssoc( $result );

            if ( $row != null )
            {
                $this->name = $row[ 'num' ] + 1;
            }
        }
    }

    private function actualizar_oportunidad()
    {
        $o = $this->obtener_oportunidad( $this->id );

        if ( $o != null )
        {
            $o->estado_cartera_c    = $this->estado;
            $o->pendiente_cartera_c = $this->pendiente_por_pagar * 1;
            $o->save();
        }
    }

    public function has_proceso_ventas()
    {
        $tiene = false;

        $o = $this->obtener_oportunidad( $this->id );

        if ( $o != null )
        {

            $tiene = true;
        }

        return $tiene;
    }

    public function save( $check_notify = false )
    {
        /*if( $this->has_proceso_ventas() and $this->no_verificar_proceso_venta == false) {

            $this->redireccionar( 'No se puede actualizar porque ya existe un proceso de ventas', $this->id );
        } */

        if ( $this->is_gerente_contable() )
        {
            $this->set_consecutivo();
            $this->update_totals( false );

            //if( $this->estado != 'Descartado' and $this->estado != 'Devolucion_Proceso' and $this->estado != 'Devolucion_Finalizado' and $this->estado != 'Nuevo' ) {
            if ( $this->estado == 'Nuevo' or $this->estado == 'Abono' or $this->estado == 'Pagado' )
            {

                if ( $this->pagado * 1 > 0 )
                {
                    $this->estado = 'Abono';
                }

                if ( $this->pendiente_por_pagar * 1 <= 0 )
                {
                    $this->estado = 'Pagado';
                }
            }

            $this->actualizar_oportunidad();
            $this->no_verificar_proceso_venta = false;

            return parent::save( $check_notify ); // TODO: Change the autogenerated stub
        }
        else
        {
            $this->redireccionar( 'Solo puede salvar un recibo un gerente contable' );
        }
    }

    public function get_person()
    {
        $p = null;

        $leads    = $this->get_linked_beans( 'veta_recibo_leads', 'Leads' );
        $contacts = $this->get_linked_beans( 'veta_recibo_contacts', 'Contacts' );

        foreach ( $leads as $lead )
        {
            $p = $lead;
        }

        foreach ( $contacts as $contact )
        {
            $p = $contact;
        }

        return $p;
    }

    public function get_contact(){

        $p = null;

        $contacts = $this->get_linked_beans( 'veta_recibo_contacts', 'Contacts' );

        foreach ( $contacts as $contact )
        {
            $p = $contact;
        }

        return $p;
    }

    public function get_lead(){

        $p = null;

        $leads    = $this->get_linked_beans( 'veta_recibo_leads', 'Leads' );

        foreach ( $leads as $lead )
        {
            $p = $lead;
        }

        return $p;
    }

    /**
     * Este metodo obtiene la oportunidad relacionada al recibo
     *
     * @param string $rid Es el id del recibo
     * @return Opportunity  Es la oportunidad relacionada, retorna nulo si no hay oportunidad
     */
    public function obtener_oportunidad( $rid )
    {
        $o = null;
        $r = new Veta_Recibo();
        $r->retrieve( $rid );

        $oportunidades = $r->get_linked_beans( 'veta_recibo_opportunities', 'Opportunity' );

        foreach ( $oportunidades as $op )
        {
            $o = $op;
        }

        return $o;
    }

    public function new_opportunity() : Opportunity
    {
        global $timedate;

        $o = $this->obtener_oportunidad( $this->id );

        if ( $o == null ) // Si no existe oportunidad
        {
            $pre = new Veta_Presupuesto();
            $pre->retrieve( $this->veta_recibo_veta_presupuestoveta_presupuesto_ida );

            $person = $this->get_person();
            $o      = new Opportunity();

            $o->sales_stage                  = "Progreso";
            $o->amount                       = $o->amount_usdollar = $this->pesos * 1;
            $o->monto_dolares_australianos_c = intval( $this->gran_total * 1 );
            $o->estado_cartera_c             = "Nuevo";
            $o->estado_gestion_comercial_c   = "Cotizacion";
            $o->estado_servicio_al_cliente_c = "Preparacion_Embajada";
            $o->estado_visas_c               = "Pendiente_Luz_Verde";

            $detalles = $this->get_linked_beans( 'veta_detallerecibo_veta_recibo', 'Veta_DetalleRecibo' );

            if ( count( $detalles ) > 0 )
            {
                $o->estado_admisiones_c = "Aplicacion";
            }
            else
            {
                $o->estado_admisiones_c = "";
            }

            $o->estado_pago_institucion = "";
            $o->assigned_user_id        = $this->assigned_user_id;
            $o->pendiente_cartera_c     = $this->pendiente_por_pagar * 1;
            $o->fecha_expiracion_visa_c = $timedate->to_db( $person->fecha_expiracion_visa_c );
            $o->fecha_viaje_c           = $person->module_name == 'Leads' ? $timedate->to_db_date( $person->fecha_viaje_2_c ) : $timedate->to_db_date( $person->fecha_de_viaje_c );
            $o->fecha_presupuesto_c     = $pre->date_entered;

            $pa = $this->get_primer_abono();

            if ( isset( $pa ) )
            {
                $o->date_closed    = $timedate->to_db_date( $pa->date_entered );
                $o->fecha_cierre_c = $timedate->to_db( $pa->date_entered );
            }

            //$o->veta_recibo_id_c = $this->id;
            $o->asesor_servicio_cliente_c = "1";  //Todo: En una proxima fase
            //$o->pendiente_pago_a_colegios = 0; Todo: ver como se puede calcular el pago a colegios

            $o->save();

            $o->load_relationship( 'veta_recibo_opportunities' );
            $o->veta_recibo_opportunities->add( $this->id );

            $this->activar_servicio_cliente( $o );
            $this->activar_aplicacion( $o );
        }

        return $o;
    }

    private function get_servicio_cliente()
    {
        $sc = new Veta_ServicioCliente();

        $query = "SELECT veta_serviciocliente.id AS ID FROM veta_serviciocliente
                    INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 1
                    INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 1 
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 1
                    INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_recibo.deleted = 0 AND veta_recibo.id = '" . $this->id . "' LIMIT 1";

        $result = $this->db->query( $query, true, "Error obteniendo el consecutivo del recibo" );
        $row    = $this->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $sc->retrieve( $row[ 'ID' ] );
        }

        return $sc;
    }

    private function activar_servicio_cliente( Opportunity $o )
    {
        $person = $this->get_person();

        // Se activa el area de servicio al cliente y de aplicacion.
        $sc                   = $this->get_servicio_cliente();
        $sc->assigned_user_id = '';   // Todo: proxima fase ver como asignar automaticamente
        $sc->estado           = 'Preparacion_Embajada';

        if ( $person->module_name == 'Contacts' )
        {
            $sc->contact_id_c = $person->id;
        }

        if ( $person->module_name == 'Leads' )
        {
            $sc->lead_id_c = $person->id;
        }

        $sc->fecha_expiracion_visa = $person->fecha_expiracion_visa_c;
        //$sc->fecha_proximo_contacto = $person->fecha_proximo_contacto_c;
        //$sc->fecha_ultimo_contacto  = $person->fecha_ultimo_contacto_c;

        $sc->save( false );

        $sc->load_relationship( 'veta_serviciocliente_opportunities' );
        $sc->veta_serviciocliente_opportunities->add( $o->id );

        /*** Esta parte del codigo crea la relación entre la oportunidad y las visas cuando se elimina un proceso de venta y se vuelve a enviar la cuenta de cobro ***/
        $visas = $sc->get_linked_beans( 'veta_visa_veta_serviciocliente', 'Veta_Visa' );
        $o->load_relationship( 'veta_visa_opportunities' );

        foreach ( $visas as $v )
        {
            $o->veta_visa_opportunities->add( $v->id );
        }
    }

    private function activar_aplicacion( Opportunity $o )
    {
        global $timedate;
        $person   = $this->get_person();
        $detalles = $this->get_linked_beans( 'veta_detallerecibo_veta_recibo', 'Veta_DetalleRecibo' );
        $o->load_relationship( 'veta_aplicacion_opportunities' );

        foreach ( $detalles as $d )
        {
            $college = new Veta_College();
            $college->retrieve( $d->veta_college_id_c );

            $curso = new Veta_Curso();
            $curso->retrieve( $d->veta_curso_id_c );

            $a = new Veta_Aplicacion();

            $a->name                  = $college->name;
            $a->college               = $a->name;
            $a->estado_aplicacion     = 'Aplicacion';
            $a->fecha_expiracion_visa = $timedate->to_db( $person->fecha_expiracion_visa_c );
            $a->pais                  = $college->pais;
            $a->estado                = $college->estado;
            $a->ciudad                = $college->ciudad;
            $a->curso                 = $curso->name;
            $a->jornada               = $curso->jornada;
            $a->veta_curso_id_c       = $curso->id;
            $a->campus                = $curso->campus;
            $a->fecha_inicio          = $curso->intake;
            $a->duracion              = $curso->duracion;
            $a->intensidad            = $curso->intensidad;
            $a->tipo_curso            = $curso->tipo_curso;
            $a->tps                   = $curso->tps;
            $a->vacaciones            = $curso->vacaciones;

            if ( ! empty( $person->id ) )
            {
                if ( $person->module_name == 'Contacts' )
                {
                    $a->contact_id_c = $person->id;
                }

                if ( $person->module_name == 'Leads' )
                {
                    $a->lead_id_c = $person->id;
                }
            }

            $this->registrar_log( "Veta_Recibo: person para " . $a->name . " person->module_name = " . $person->module_name . " person->id = " . $person->id );

            $a->save( false );
            $o->veta_aplicacion_opportunities->add( $a->id );
        }
    }

    private function update_total_visa()
    {
        $tipo_visa = new Veta_TiposVisa();
        $tipo_visa->retrieve( $this->veta_tiposvisa_id_c );

        $this->total_visa    = $tipo_visa->total_visa * 1;
        $this->examen_medico = $tipo_visa->costo_examen * 1;
    }

    /**
     * Este metodo crea un nuevo recibo con los valores de un presupuesto existente
     *
     * @param Veta_Presupuesto $p : Es el presupuesto
     * @return Veta_Recibo : Es el recibo creado
     */
    public function new_recibo( Veta_Presupuesto $p ) : Veta_Recibo
    {
        $r = new Veta_Recibo();

        if ( isset( $p->id ) and ! empty( $p->id ) )
        {

            $r->assigned_user_id    = $p->assigned_user_id;
            $r->pais                = $p->pais;
            $r->departamento        = $p->departamento;
            $r->ciudad              = $p->ciudad;
            $r->primer_pago         = $p->primer_pago * 1;
            $r->subtotal            = $p->subtotal * 1;
            $r->gran_total          = $p->gran_total * 1;
            $r->description         = $p->description;
            $r->examen_medico       = $p->examen_medico * 1;
            $r->pendiente_por_pagar = $p->gran_total * 1;
            $r->seguro              = $p->seguro * 1;
            $r->asegurador          = $p->asegurador;
            $r->duracion            = $p->duracion;
            $r->tipo_seguro         = $p->tipo_seguro;
            $r->veta_tiposvisa_id_c = $p->veta_tiposvisa_id_c;
            $r->total_visa          = $p->total_visa * 1;
            $r->assigned_user_id    = $p->assigned_user_id;
            $r->descuento           = $p->descuento * 1;

            $trm = new Veta_TRM();
            $trm = $trm->get_trm();

            $r->usd   = ( $r->gran_total * 1 ) * ( $trm->aud * 1 );
            $r->pesos = ( $r->usd * 1 ) * ( $trm->pesos * 1 );
            $r->mxn   = ( $r->usd * 1 ) * ( $trm->mxn * 1 );
            $r->clp   = ( $r->usd * 1 ) * ( $trm->clp * 1 );

            $r->aud_usd = $trm->aud;
            $r->usd_cop = $trm->pesos;
            $r->usd_mxn = $trm->mxn;
            $r->usd_clp = $trm->clp;

            $r->save( false );

            $requerimientos = $p->get_linked_beans( 'veta_requerimiento_veta_presupuesto', 'Veta_Requerimiento' );

            foreach ( $requerimientos as $requerimiento )
            {

                $r->load_relationship( 'veta_requerimiento_veta_recibo' );
                $r->veta_requerimiento_veta_recibo->add( $requerimiento->id );
            }

            $dps = $p->get_linked_beans( 'veta_detallepresupuesto_veta_presupuesto', 'Veta_DetallePresupuesto' );

            foreach ( $dps as $d )
            {

                $dt                    = new Veta_DetalleRecibo();
                $dt->name              = $d->name;
                $dt->description       = $d->description;
                $dt->intake            = $d->intake;
                $dt->duracion          = $d->duracion * 1;
                $dt->inscripcion       = $d->inscripcion * 1;
                $dt->precio_por_semana = $d->precio_por_semana * 1;
                $dt->costo_materiales  = $d->costo_materiales * 1;
                $dt->costo_extra       = $d->costo_extra * 1;
                $dt->deposito          = $d->deposito * 1;
                $dt->total_curso       = $d->total_curso * 1;
                $dt->bono              = $d->bono * 1;
                $dt->descripcion_bono  = $d->descripcion_bono;
                $dt->veta_college_id_c = $d->veta_college_id1_c;
                $dt->precio_curso      = $d->precio_curso * 1;
                $dt->veta_curso_id_c   = $d->veta_curso_id_c;
                $dt->salvar            = false;

                $dt->save( false );

                $dt->load_relationship( 'veta_detallerecibo_veta_recibo' );
                $dt->veta_detallerecibo_veta_recibo->add( $r->id );
            }

            $p->load_relationship( 'veta_recibo_veta_presupuesto' );
            $p->veta_recibo_veta_presupuesto->add( $r->id );

            $leads    = $p->get_linked_beans( 'veta_presupuesto_leads', 'Leads' );
            $contacts = $p->get_linked_beans( 'veta_presupuesto_contacts', 'Leads' );

            foreach ( $leads as $lead )
            {
                $r->load_relationship( 'veta_recibo_leads' );
                $r->veta_recibo_leads->add( $lead->id );
            }

            foreach ( $contacts as $contact )
            {

                $r->load_relationship( 'veta_recibo_contacts' );
                $r->veta_recibo_contacts->add( $contact->id );
            }
        }

        return $r;
    }

    /**
     * Este metodo actualiza los totales usando los detalles asociados al recibo
     */
    public function update_totals( $save = true )
    {
        $this->update_total_visa();

        $this->primer_pago = 0;
        $this->subtotal    = 0;
        $this->gran_total  = 0;

        $dets = $this->get_linked_beans( 'veta_detallerecibo_veta_recibo', 'Veta_DetalleRecibo' );

        foreach ( $dets as $d )
        {

            $this->primer_pago += ( $d->deposito * 1 ) - ( $d->bono * 1 );
            $this->subtotal    += ( $d->total_curso * 1 );
        }

        $this->primer_pago += ( $this->examen_medico * 1 ) + ( $this->seguro * 1 ) + ( $this->total_visa * 1 );

        $trm = new Veta_TRM();
        $trm = $trm->get_trm();

        $this->gran_total = $this->subtotal + ( $this->total_visa * 1 ) + ( $this->examen_medico * 1 ) + ( $this->seguro * 1 ) - ( $this->descuento * 1 );
        $this->usd        = $this->gran_total * $trm->aud;
        $this->pesos      = $this->usd * $trm->pesos * 1;
        $this->mxn        = $this->usd * $trm->mxn * 1;
        $this->clp        = $this->usd * $trm->clp * 1;

        $this->aud_usd = $trm->aud;
        $this->usd_cop = $trm->pesos;
        $this->usd_mxn = $trm->mxn;
        $this->usd_clp = $trm->clp;

        $this->update_cartera( $save ); // Este metodo salva la cuenta de cobro

        //parent::save( false );
    }

    public function update_cartera( $save = true )
    {
        $abonos       = $this->get_linked_beans( 'veta_abono_veta_recibo', 'Veta_Abono' );
        $this->pagado = 0;

        foreach ( $abonos as $a )
        {
            $this->pagado += $a->monto * 1;
        }

        $this->pendiente_por_pagar        = ( $this->gran_total * 1 ) - ( $this->pagado * 1 );
        $this->no_verificar_proceso_venta = true;

        if ( $save )
        {
            $this->save( false );
        }

    }

    /**
     * Esta funcion devuelve siempre true porque ya no se valida el gerente contable
     *
     * @return bool
     */
    public function is_gerente_contable()
    {

        /*$is = false;
        global $current_user;

        $roles = ACLRole::getUserRoleNames( $current_user->id );

        foreach( $roles as $rol ) {

            if( $rol == 'Gerente Contable' ) {
                $is = true;
            }
        }

        return $is;*/

        return true;
    }

    public function redireccionar( $msg, $registro )
    {
        if ( ! empty( $registro ) )
        {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Recibo&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else
        {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }

    public function convertir_prospecto()
    {
        global $timedate;
        $leads = $this->get_linked_beans( 'veta_recibo_leads', 'Lead' );

        foreach ( $leads as $l )
        {
            if ( empty( $l->contact_id ) )
            {
                $c                          = new Contact();
                $c->first_name              = $l->first_name;
                $c->last_name               = $l->last_name;
                $c->phone_home              = $l->phone_home;
                $c->phone_mobile            = $l->phone_mobile;
                $c->phone_work              = $l->phone_work;
                $c->pais_c                  = $l->pais_c;
                $c->departamento_c          = $l->departamento_c;
                $c->ciudad_c                = $l->ciudad_c;
                $c->birthdate               = $l->birthdate;
                $c->email1                  = $l->email1;
                $c->pasaporte_c             = $l->pasaporte_c;
                $c->fecha_expiracion_visa_c = $l->fecha_expiracion_visa_c;
                $c->fecha_viaje_c           = $l->fecha_viaje_c;
                $c->description             = $l->description;

                //$c->pais_nacimiento_c = '';
                // $c->departamento_nacimiento_c = '';
                // $c->nombre_conyuge_c = '';
                // $c->ocupacion_conyuge_c = '';
                // $c->nacimiento_conyuge_c = '';
                //$c->contacto_emergencia_c = '';
                //$c->relacion_contacto_emergencia_c = '' ;
                //$c->email_contacto_emergencia_c = '';
                // $c->celular_contacto_emergencia_c = '';
                // $c->nivel_ingles_c = '';
                // $c->anos_sin_estudiar_c = '';
                // $c->institucion_australia_c = '';
                // $c->identificacion_australia_c = '';
                // $c->celular_australia_c = '';
                // $c->cuenta_bancaria_australia_c = '';

                $c->lead_source = $l->lead_source;

                if ( isset( $l->campana_id_c ) )
                {
                    $c->campaign_id = $l->campana_id_c;
                }

                if ( isset( $l->assigned_user_id ) )
                {
                    $c->assigned_user_id = $l->assigned_user_id;
                }

                if ( isset( $l->carrera_universitaria_c ) )
                {
                    $c->carrera_universitaria_c = $l->carrera_universitaria_c;
                }

                if ( isset( $l->trabajo_actual_c ) )
                {
                    $c->trabajo_actual_c = $l->trabajo_actual_c;
                }

                $c->save( false );

                $l->contact_id = $c->id;
                $l->converted  = true;
                $l->status     = 'Converted';

                $l->save( false );

                $c->load_relationship( 'veta_recibo_contacts' );
                $c->veta_recibo_contacts->add( $this->id );

                $o = $this->obtener_oportunidad( $this->id );

                if ( $o != null )
                {
                    $o->load_relationship( 'contacts_opportunities_1' );
                    $o->contacts_opportunities_1->add( $c->id );
                    $o->date_closed    = $timedate->to_db_date( date( $timedate->get_date_time_format() ) );
                    $o->fecha_cierre_c = $timedate->to_db( date( $timedate->get_date_time_format() ) );
                    $o->save( false );
                    $this->heredar_info( $o, $c );
                }
            }
        }
    }

    private function heredar_info( Opportunity $o, Contact $c )
    {

        $this->actualizar_contacto_aplicaciones( $o, $c );
        $this->actualizar_contacto_servicio_cliente( $o, $c );
        $this->actualizar_contacto_coes( $o, $c );
        $this->actualizar_contacto_casos( $o, $c );

    }

    private function actualizar_contacto_aplicaciones( Opportunity $o, Contact $c )
    {
        $aplicaciones = $o->get_linked_beans( 'veta_aplicacion_opportunities', 'Veta_Aplicacion' );

        foreach ( $aplicaciones as $a )
        {
            $a->actualizar_contacto( $c );
        }
    }

    private function actualizar_contacto_servicio_cliente( Opportunity $o, Contact $c )
    {
        $scs = $o->get_linked_beans( 'veta_serviciocliente_opportunities', 'Veta_ServicioCliente' );

        foreach ( $scs as $sc )
        {
            $sc->actualizar_contacto( $c );
        }
    }

    private function actualizar_contacto_coes( Opportunity $o, Contact $c )
    {
        $coes = $o->get_linked_beans( 'veta_coe_opportunities', 'Veta_COE' );

        foreach ( $coes as $coe )
        {
            $coe->actualizar_contacto( $c );
        }
    }

    private function actualizar_contacto_casos( Opportunity $o, Contact $c )
    {
        $db    = DBManagerFactory::getInstance();
        $casos = $o->get_linked_beans( 'opportunities_cases_1', 'Case' );

        foreach ( $casos as $caso )
        {
            $sql = "UPDATE cases_cstm SET contact_id_c = '" . $c->id . "' WHERE id_c = '" . $caso->id . "'";
            $res = $db->query( $sql );
        }
    }

    public function get_primer_abono()
    {
        $abono        = null;
        $abonos       = $this->get_linked_beans( 'veta_abono_veta_recibo', 'Veta_Abono', 'date_entered' );
        $this->pagado = 0;

        foreach ( $abonos as $a )
        {
            $abono = $a;
            break;
        }

        return $abono;
    }

    private function registrar_log( $msg )
    {
        $path = date( "Y-m-d" ) . "_soel.log";
        $msg  = '[' . date( "Y-m-d H:i:s" ) . '] ' . $msg;
        error_log( $msg . PHP_EOL . PHP_EOL, 3, $path );
    }

    public function mark_deleted( $id )
    {
        $r = new Veta_Recibo();
        $r->retrieve( $id );

        if ( $r->has_proceso_ventas() )
        {
            $r->redireccionar( 'No se puede eliminar porque ya existe un proceso de ventas', $r->id );
        }
        parent::mark_deleted( $id ); // TODO: Change the autogenerated stub
    }

}