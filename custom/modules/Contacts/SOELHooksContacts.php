<?php

require_once( 'modules/Veta_Aplicacion/Veta_Aplicacion.php' );

if ( ! defined( 'sugarEntry' ) || ! sugarEntry ) die( 'Not A Valid Entry Point' );

class SOELHooksContacts {

    public const ELIMINARESTUDIANTECONPROCESO = 'No se puede eliminar el estudiante porque tiene un proceso de venta';

    public function heredar_info( &$bean, $event, $arguments ) {

        $app = new Veta_Aplicacion();
        $app->propagar_info( $bean );

        $sql = "UPDATE leads_cstm
                    INNER JOIN leads ON leads_cstm.id_c = leads.id AND leads.deleted = 0
                    INNER JOIN contacts ON contacts.id = leads.contact_id AND contacts.deleted = 0 AND contacts.id = '". $bean->id . "'     
                    INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                    SET leads_cstm.fecha_expiracion_visa_c = contacts_cstm.fecha_expiracion_visa_c";

        $c = new Contact();
        $c->db->query( $sql , "Error actualizando la fecha de expiracion de la visa del prospecto desde el contacto " . $bean->id);
    }

    public function mostrar_oficina( $focus, $event, $args ) {

        $query = "SELECT 
                            contacts.id AS ID, 
                            CONCAT(contacts.first_name, ' ' , contacts.last_name) AS NOMBRE,
                            CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO_A,
                            TRIM(UPPER(asignado.address_city)) AS OFICINA
                    FROM contacts 
                    LEFT JOIN users asignado ON asignado.id = contacts.assigned_user_id
                WHERE contacts.deleted = 0 AND contacts.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true, "Error obteniendo la oficina del comercial asignado a el estudiante" );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            $focus->soel_oficina_comercial = $row[ 'OFICINA' ];
        }

        return $focus;
    }

    public function pre_delete( &$bean, $event, $arguments ) {

        $tieneProcesoVenta = false;
        $ctasCobro         = $bean->get_linked_beans( 'veta_recibo_contacts', 'Veta_Recibo' );

        foreach ( $ctasCobro as $ctaCobro ) {

            $procesosVenta = $ctaCobro->get_linked_beans( 'veta_recibo_opportunities', 'Opportunities' );

            if ( count( $procesosVenta ) > 0 ) {
                $tieneProcesoVenta = true;

                sugar_die(SOELHooksContacts::ELIMINARESTUDIANTECONPROCESO);

                /*if ( empty( $_SERVER[ "REQUEST_URI" ] ) ) {
                    throw new Exception( SOELHooksContacts::ELIMINARESTUDIANTECONPROCESO );
                }
                else {
                    //$this->redireccionar('No se puede eliminar el estudiante porque tiene un proceso de venta', $bean->id);
                    SugarApplication::appendErrorMessage( SOELHooksContacts::ELIMINARESTUDIANTECONPROCESO );
                    SugarApplication::redirect( "index.php?module=Contacts&action=index" );
                }*/
            }
        }

        if ( ! $tieneProcesoVenta ) {

            $requerimientos = $bean->get_linked_beans( 'veta_requerimiento_contacts', 'Veta_Requerimiento' );

            foreach ( $requerimientos as $requerimiento ) {

                $requerimiento->mark_deleted( $requerimiento->id );
            }
        }
    }

    private function redireccionar( $msg, $registro ) {
        if ( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Contacts&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }

}