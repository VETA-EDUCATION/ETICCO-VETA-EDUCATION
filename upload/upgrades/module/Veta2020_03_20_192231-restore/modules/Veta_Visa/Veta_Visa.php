<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


class Veta_Visa extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_Visa';
    public $object_name = 'Veta_Visa';
    public $table_name = 'veta_visa';
    public $importable = false;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $estado;
    public $fecha_aplicacion;
    public $fecha_avac;
    public $fecha_examenes_medicos;
    public $fecha_expiracion;
    public $fecha_firma_acta;
    public $fecha_otorgada;
    public $fecha_pago;

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    /*private function establecer_estudiante() {

        $coes = $this->get_linked_beans( 'veta_visa_veta_coe' , 'Veta_COE' );

        foreach( $coes as $coe ) {
            // Obtengo la aplicacion a la que pertenece el LOO
            $aplicaciones = $coe->get_linked_beans( 'veta_coe_veta_aplicacion' , 'Veta_Aplicacion' );

            foreach( $aplicaciones as $aplicacion ) {
                $oportunidades = $aplicacion->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

                foreach( $oportunidades as $oportunidad ) {
                    $es = $oportunidad->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

                    foreach( $es as $e ) {
                        $this->contact_id_c = $e->id;
                    }
                }
            }
        }

        parent::save( false );
    } */

    public function save( $check_notify = false ) {

        /*if( $this->estado == 'Aprobada' )
            $this->establecer_oportunidad_visada();*/

        //$aux = parent::save( $check_notify );
        //$this->crear_relacion_con_oportunidad();
        //$this->establecer_estudiante();

        // Ojo el orden importa no se puede actualizar la fecha de expiracion mas arriba
        /*if( $this->estado == 'Aprobada' )
            $this->actualizar_fecha_expiracion();*/

        $aux = parent::save( $check_notify );

        $oportunidades = $this->get_linked_beans( 'veta_visa_opportunities' , 'Opportunity' );

        // Se actualiza el estado en la oportunidad
        foreach( $oportunidades as $o ) {

            $o->estado_visas_c = $this->estado;
            $o->save();
        }
        
        if($this->estado == 'Visa_Otorgada' ){
            $c = new Contact();
            $c->retrieve($this->contact_id_c);
            $c->fecha_expiracion_visa_c = $this->fecha_expiracion;
            $c->save(false);
        }

        return $aux;
    }


    /***
     * Este metodo actualiza la fecha de expiracion de la visa en los modulos de prospecto, estudiante, oportunidad, aplicacion, loo, coe y liquidacion
     */
    /*private function actualizar_fecha_expiracion() {
        $coes = $this->get_linked_beans( 'veta_visa_veta_coe' , 'Veta_COE' );

        foreach( $coes as $coe ) {
            $coe->fecha_expiracion_visa = $this->fecha_expiracion;
            $coe->save( false );

            $apps = $coe->get_linked_beans( 'veta_coe_veta_aplicacion' , 'Veta_Aplicacion' );

            foreach( $apps as $app ) {
                $app->fecha_expiracion_visa = $this->fecha_expiracion;
                $app->save();

                $loos = $app->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Loo' );

                foreach( $loos as $loo ) {
                    $loo->fecha_expiracion_visa = $this->fecha_expiracion;
                    $loo->save( false );
                }

                $ops = $app->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

                foreach( $ops as $o ) {
                    $o->fecha_expiracion_visa_c = $this->fecha_expiracion;
                    $o->save( false );

                    $lqs = $o->get_linked_beans( 'veta_liquidacion_opportunities' , 'Veta_Liquidacion' );

                    foreach( $lqs as $l ) {
                        $l->fecha_expiracion_visa = $this->fecha_expiracion;
                        //$l->save(false);
                        $l->salvar();
                    }

                    $es = $o->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

                    foreach( $es as $e ) {
                        $e->fecha_expiracion_visa_c = $this->fecha_expiracion;
                        $e->save( false );

                        $ps = $e->get_linked_beans( 'leads' , 'Lead' );

                        foreach( $ps as $p ) {
                            $p->fecha_expiracion_visa_c = $this->fecha_expiracion;
                            $p->save( false );
                        }
                    }
                }
            }
        }
    }  */

    private function redireccionar( $msg , $registro ) {
        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_COE&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }

    /*private function establecer_oportunidad_visada() {

        $v = new Veta_Visa();
        $v->retrieve( $this->id );

        if( $v->estado != 'Aprobada' and $v->estado != 'Pagado' ) {

            $msg = 'No se puede salvar porque no se ha pagado';

            if( $_REQUEST[ 'return_action' ] == 'DetailView' )
                $this->redireccionar( $msg , $_REQUEST[ 'return_id' ] );
            else
                $this->redireccionar( $msg , null );
        }

        $coes = $this->get_linked_beans( 'veta_visa_veta_coe' , 'Veta_COE' );

        foreach( $coes as $coe ) {
            
            $apps = $coe->get_linked_beans( 'veta_coe_veta_aplicacion' , 'Veta_Aplicacion' );

            foreach( $apps as $app ) {

                $ops = $app->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

                foreach( $ops as $o ) {

                    $o->estado_visas_c = $this->estado;
                    $o->save( false );
                }
            }
        }
    }  */

    /*private function crear_relacion_con_oportunidad() {

        $coes = $this->get_linked_beans( 'veta_visa_veta_coe' , 'Veta_COE' );

        foreach( $coes as $coe ) {

            $apps = $coe->get_linked_beans( 'veta_coe_veta_aplicacion' , 'Veta_Aplicacion' );

            foreach( $apps as $app ) {

                $ops = $app->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

                foreach( $ops as $o ) {

                    $o->load_relationship( 'veta_visa_opportunities' );
                    $o->veta_visa_opportunities->add( $this->id );
                    $o->sales_stage = 'Preparacion_Embajada';
                    $o->save( false );
                }
            }
        }
    } */

}