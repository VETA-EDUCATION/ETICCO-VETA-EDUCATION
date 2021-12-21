<?php


if( ! defined( 'sugarEntry' ) || ! sugarEntry )
    die( 'Not A Valid Entry Point' );

require_once( 'modules/Veta_Aplicacion/Veta_Aplicacion.php' );
require_once( 'clases/OperacionesEstudiante.php' );
require_once( 'clases/OperacionesProspecto.php' );

class SOELHooks
{

    function __construct() {

    }

    /**
     * Esta funcion actualiza la fecha del ultimo requerimiento de una visa
     * @param $bean
     * @param $event
     * @param $arguments
     */
    function actualizar_visa( &$bean , $event , $arguments ) {

        $c = new aCase();
        $c->retrieve( $bean->id );

        $visas = $bean->get_linked_beans( 'veta_visa_cases' , 'Veta_Visa' );

        foreach( $visas as $visa ) {
            if( $visa->fecha_ultimo_requerimiento < $c->date_entered ) {
                $visa->fecha_ultimo_requerimiento = $c->date_entered;
                $visa->save( false );
            }

        }
    }

    function actualizar_estado( &$bean , $event , $arguments ) {

        /*$this->actualizar_estado_aplicacion($bean);
        $this->actualizar_estado_loo($bean);
        $this->actualizar_estado_coe($bean);*/
    }

    private function actualizar_estado_aplicacion( $bean ) {

        // Obtenemos todos los casos relacionados con la aplicacion y si alguno esta abierto colocamos la aplicacion como pendiente de lo contrario lo colocamos como listo
        $aplicaciones = $bean->get_linked_beans( 'veta_aplicacion_cases' , 'Veta_Aplicacion' );
        $estado       = 'Listo';
        $app          = null;

        foreach( $aplicaciones as $aplicacion ) {

            if( $bean->state == 'Open' ) {

                $aplicacion->estado_aplicacion = 'Aplicacion_Pendiente';
                $aplicacion->save( false );
                $estado = 'Pendiente';

            }

            $app = $aplicacion;
        }

        if( isset( $app ) and $estado == 'Listo' ) {

            $casos = $bean->get_linked_beans( 'veta_aplicacion_cases' , 'Cases' );

            foreach( $casos as $caso ) {

                if( $caso->state == 'Open' ) {

                    $estado = 'Pendiente';
                }
            }

            $app->estado_aplicacion = $estado;
            $app->save( false );
        }
    }

    private function actualizar_estado_loo( $bean ) {
        // Obtenemos todos los casos relacionados con el LOO y si alguno esta abierto colocamos el LOO como pendiente de lo contrario lo colocamos como listo
        $loos   = $bean->get_linked_beans( 'veta_loo_cases' , 'Veta_Loo' );
        $estado = 'Listo';
        $l      = null;

        foreach( $loos as $loo ) {
            if( $bean->state == 'Open' ) {
                $loo->estado = 'Pendiente';
                $loo->save( false );
                $estado = 'Pendiente';
            }

            $l = $loo;
        }

        if( isset( $l ) and $estado == 'Listo' ) {
            $casos = $bean->get_linked_beans( 'veta_loo_cases' , 'Cases' );

            foreach( $casos as $caso ) {
                if( $caso->state == 'Open' ) {
                    $estado = 'Pendiente';
                }
            }

            $l->estado = $estado;
            $l->save( false );
        }
    }

    private function actualizar_estado_coe( $bean ) {
        // Obtenemos todos los casos relacionados con el LOO y si alguno esta abierto colocamos el LOO como pendiente de lo contrario lo colocamos como listo
        $coes   = $bean->get_linked_beans( 'veta_coe_cases' , 'Veta_COE' );
        $estado = 'Listo';
        $c      = null;

        foreach( $coes as $coe ) {
            if( $bean->state == 'Open' ) {
                $coe->estado = 'Pendiente_Casos';
                $coe->save( false );
                $estado = 'Pendiente_Casos';
            }

            $c = $coe;
        }

        if( isset( $c ) and $estado == 'Listo' ) {
            $casos = $bean->get_linked_beans( 'veta_coe_cases' , 'Cases' );

            foreach( $casos as $caso ) {
                if( $caso->state == 'Open' ) {
                    $estado = 'Pendiente_Casos';
                }
            }

            $c->estado = $estado;
            $c->save( false );
        }
    }

    private function actualizar_caso( $case_id , $lead_id , $contact_id ) {

        $c = new Contact();

        if( ! empty( $lead_id ) ) {
            $query  = "UPDATE cases_cstm SET lead_id_c = '" . $lead_id . "' WHERE id_c = '" . $case_id . "'";
            $result = $c->db->query( $query , true , "Error actualizando el id del prospecto en el caso" );
        }

        if( ! empty( $contact_id ) ) {
            $query  = "UPDATE cases_cstm SET contact_id_c = '" . $contact_id . "' WHERE id_c = '" . $case_id . "'";
            $result = $c->db->query( $query , true , "Error actualizando el id del contacto en el caso" );
        }
    }

    function heredar_info( &$bean , $event , $arguments ) {

        $lid = $eid = null;
        $oe  = new OperacionesEstudiante();
        $op  = new OperacionesProspecto();

        if( ! isset( $bean->lead_id_c ) ) {
            $bean->lead_id_c = $op->get_id_from_parent( $arguments );
        }

        if( ! isset( $bean->contact_id_c ) ) {
            $bean->contact_id_c = $oe->get_id_from_parent( $arguments );
        }
    }
}