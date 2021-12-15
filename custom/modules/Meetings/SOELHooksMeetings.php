<?php

require_once( 'modules/EmailTemplates/EmailTemplate.php' );
require_once( 'modules/Administration/Administration.php' );
require_once( 'modules/Users/User.php' );
require_once( 'include/phpmailer/class.phpmailer.php' );

if( ! defined( 'sugarEntry' ) || ! sugarEntry )
    die( 'Not A Valid Entry Point' );

class SOELHooksMeetings
{

    function __construct() {

    }

    public function establecer_parent( &$bean , $event , $arguments ) {

        if( ! isset( $bean->parent_type ) ) {

            if( isset( $_REQUEST[ "relate_to" ] ) ) {

                $bean->parent_type = $_REQUEST[ "relate_to" ];
                $bean->parent_id   = $_POST[ "relate_id" ];
            }
        }
    }

    /**
     * Este metodo actualiza las fechas de ultimo y proximo contacto de un modulo personalizado
     * @param $actividad Es la reunion
     * @param $bean Componente personalizado usualmente oportunidad
     */
    private function establecer_fechas_ultimo_proximo_contacto( $actividad , $bean ) {

        if( isset( $bean->id ) ) {

            if( $actividad->status == 'Planned' ) {

                if( $actividad->date_start > $bean->fecha_proximo_contacto_c )
                    $bean->fecha_proximo_contacto_c = $actividad->date_start;
            }
            elseif( $actividad->status == 'Held' ) {

                if( $actividad->date_start > $bean->fecha_ultimo_contacto_c )
                    $bean->fecha_ultimo_contacto_c = $actividad->date_start;
            }

            $bean->save( false );
        }
    }

    public function actualizar_prospecto( &$bean , $event , $arguments ) {

        if( $bean->parent_type == 'Leads' ) {

            $l = new Lead();
            $l->retrieve( $bean->parent_id );
            $this->establecer_fechas_ultimo_proximo_contacto( $bean , $l );
        }
    }

    public function actualizar_estudiante( &$bean , $event , $arguments ) {

        if( $bean->parent_type == 'Contacts' ) {

            $c = new Contact();
            $c->retrieve( $bean->parent_id );
            $this->establecer_fechas_ultimo_proximo_contacto( $bean , $c );
        }
    }

    public function actualizar_oportunidad( &$bean , $event , $arguments ) {

        if( $bean->parent_type == 'Opportunities' ) {

            $o = new Opportunity();
            $o->retrieve( $bean->parent_id );

            $this->establecer_fechas_ultimo_proximo_contacto( $bean , $o );

            if( isset( $o->id ) )
                $this->actualizar_servicio_cliente( $o );

        }
    }

    public function actualizar_veta( &$bean , $event , $arguments ) {

        if( substr( $bean->parent_type , 0 , 5 ) == 'Veta_' ) {

            $veta = new $bean->parent_type();
            $veta->retrieve( $bean->parent_id );

            if( method_exists( $veta , "obtener_oportunidad" ) ) {
                
                $o = $veta->obtener_oportunidad();

                if( isset( $o ) ) {

                    $this->establecer_fechas_ultimo_proximo_contacto( $bean , $o );

                    if( isset( $o->id ) )
                        $this->actualizar_servicio_cliente( $o );
                }
            }
        }
    }

    public function establecer_estudiante( &$bean , $event , $arguments ) {
        
        $bean->contact_id_c = $this->establecer_estudiante_desde_estudiante( $bean );

        if( ! isset( $bean->contact_id_c ) )
            $bean->contact_id_c = $this->establecer_estudiante_desde_parent( $bean );
    }

    private function actualizar_servicio_cliente( Opportunity $o ) {

        $list = $o->get_linked_beans( 'veta_serviciocliente_opportunities' , 'Veta_ServicioCliente' );

        foreach( $list as $sc ) {
            $sc->fecha_proximo_contacto = $o->fecha_proximo_contacto_c;
            $sc->fecha_ultimo_contacto  = $o->fecha_ultimo_contacto_c;
            $sc->save();

        }
    }

    private function establecer_estudiante_desde_estudiante( $bean ) {
        $cid = null;
        $es  = $bean->get_linked_beans( 'contacts' , 'Contacts' );

        foreach( $es as $e ) {
            $cid = $e->id;
        }

        return $cid;
    }

    private function establecer_estudiante_desde_parent( $bean ) {

        $cid = null;

        if( isset( $bean->parent_type ) ) {
            if( $bean->parent_type == "Opportunities" ) {
                $o = new Opportunity();
                $o->retrieve( $bean->parent_id );

                $es = $o->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

                foreach( $es as $e ) {
                    $cid = $e->id;
                }
            }
            else {
                $b   = BeanFactory::getBean( $bean->parent_type , $bean->parent_id );
                $cid = $this->establecer_estudiante_desde_parent( $b );
            }
        }
        else {
            switch( get_class( $bean ) ) {
                case "Opportunity":
                    $cid = $this->obtener_estudiante_desde_oportunidad( $bean );
                    break;
                case "Veta_Aplicacion":
                    $cid = $this->obtener_estudiante_desde_app( $bean );
                    break;
                case "Veta_Loo":
                    $cid = $this->obtener_estudiante_desde_loo( $bean );
                    break;
                case "Veta_COE":
                    $cid = $this->obtener_estudiante_desde_coe( $bean );
                    break;
                case "Veta_LooCorreccion":
                    $cid = $this->obtener_estudiante_desde_loo_correccion( $bean );
                    break;
                case "Veta_CorreccionCOE":
                    $cid = $this->obtener_estudiante_desde_coe_correccion( $bean );
                    break;
                case "Veta_Visa":
                    $cid = $this->obtener_estudiante_desde_visa( $bean );
                    break;
                case "Veta_Liquidacion":
                    $cid = $this->obtener_estudiante_desde_liquidacion( $bean );
                    break;
                case "Veta_Pagos":
                    $cid = $this->obtener_estudiante_desde_pagos( $bean );
                    break;
                case "Veta_PagoColegios":
                    $cid = $this->obtener_estudiante_desde_pagos_colegios( $bean );
                    break;
                case "Veta_NotificacionPagoColegio":
                    $cid = $this->obtener_estudiante_desde_notificacion_pagos_colegios( $bean );
                    break;
                case "aCase":
                    $cid = $bean->contact_id_c;
                    break;
            }
        }

        return $cid;

    }

    private function obtener_estudiante_desde_oportunidad( $o ) {
        $cid = null;
        $es  = $o->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

        foreach( $es as $e ) {
            $cid = $e->id;
        }

        return $cid;
    }

    private function obtener_estudiante_desde_app( $app ) {
        $cid = null;

        $ops = $app->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

        foreach( $ops as $o ) {
            $cid = $this->obtener_estudiante_desde_oportunidad( $o );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_loo( $loo ) {
        $cid = null;

        $apps = $loo->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Aplicacion' );

        foreach( $apps as $app ) {
            $cid = $this->obtener_estudiante_desde_app( $app );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_coe( $coe ) {
        $cid = null;

        $apps = $coe->get_linked_beans( 'veta_coe_veta_aplicacion' , 'Veta_Aplicacion' );

        foreach( $apps as $app ) {
            $cid = $this->obtener_estudiante_desde_app( $app );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_loo_correccion( $correccion ) {
        $cid = null;

        $loos = $correccion->get_linked_beans( 'veta_loocorreccion_veta_loo' , 'Veta_Loo' );

        foreach( $loos as $loo ) {
            $cid = $this->obtener_estudiante_desde_loo( $loo );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_coe_correccion( $correccion ) {
        $cid = null;

        $coes = $correccion->get_linked_beans( 'veta_correccioncoe_veta_coe' , 'Veta_COE' );

        foreach( $coes as $coe ) {
            $cid = $this->obtener_estudiante_desde_coe( $coe );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_visa( $visa ) {
        $cid = null;

        $coes = $visa->get_linked_beans( 'veta_visa_veta_coe' , 'Veta_COE' );

        foreach( $coes as $coe ) {
            $cid = $this->obtener_estudiante_desde_coe( $coe );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_liquidacion( $l ) {
        $cid = null;

        $ops = $l->get_linked_beans( 'veta_liquidacion_opportunities' , 'Opportunities' );

        foreach( $ops as $o ) {
            $cid = $this->obtener_estudiante_desde_oportunidad( $o );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_pagos( $pago ) {
        $cid = null;

        $ls = $pago->get_linked_beans( 'veta_pagos_veta_liquidacion' , 'Veta_Liquidacion' );

        foreach( $ls as $l ) {
            $cid = $this->obtener_estudiante_desde_liquidacion( $l );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_pagos_colegios( $pago ) {
        $cid = null;

        $ops = $pago->get_linked_beans( 'veta_pagocolegios_opportunities' , 'Opportunities' );

        foreach( $ops as $o ) {
            $cid = $this->obtener_estudiante_desde_oportunidad( $o );
        }

        return $cid;
    }

    private function obtener_estudiante_desde_notificacion_pagos_colegios( $notificacion ) {
        $cid = null;

        $pagos = $notificacion->get_linked_beans( 'veta_notificacionpagocolegio_veta_pagocolegios' , 'Veta_PagoColegios' );

        foreach( $pagos as $p ) {
            $cid = $this->obtener_estudiante_desde_pagos_colegios( $p );
        }

        return $cid;
    }

}