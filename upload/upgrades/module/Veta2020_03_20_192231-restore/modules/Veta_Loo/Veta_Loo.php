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

require_once( 'modules/Veta_Liquidacion/Veta_Liquidacion.php' );

class Veta_Loo extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_Loo';
    public $object_name = 'Veta_Loo';
    public $table_name = 'veta_loo';
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
    public $fecha_admisiones;
    public $fecha_envio;
    public $fecha_firma;
    public $fecha_recepcion;
    public $fecha_recepcion2;

    public $from_correccion = false;

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function set_consecutivo() {

        if( ! isset( $this->id ) || empty( $this->id ) ) {

            $query  = "SELECT COUNT(id) AS num from veta_loo limit 1";
            $result = $this->db->query( $query , true , "Error obteniendo el consecutivo de la carta de oferta" );
            $row    = $this->db->fetchByAssoc( $result );

            if( $row != null )
                $this->name = $row[ 'num' ] + 1;
        }
    }


    private function es_valido() {

        $is_valid = true;

        if( $this->existen_casos_pendientes() )
            $is_valid = false;

        if( $this->existen_correcciones_pendientes() )
            $is_valid = false;

        return $is_valid;
    }

    public function save( $check_notify = false ) {

        $this->set_consecutivo();
        $this->set_estudiante();

        if( $this->estado_loo == "Carta_Oferta_Firmada" ) {

            if( ! $this->es_valido() ) {

                $this->redireccionar( 'No se puede colocar como firmado porque tiene casos o correcciones pendientes' , $this->id );
            }

            $tmp_id = parent::save( $check_notify );
            $this->actualizar_oportunidad();

            $l = $this->obtener_liquidacion();

            if( $l == null ) {

                $l                        = new Veta_Liquidacion();
                $l->estado_pago_colegios  = 'Pago_Institucion';
                $l->contact_id_c          = $this->contact_id_c;
                $l->lead_id_c             = $this->lead_id_c;
                $l->fecha_expiracion_visa = $this->fecha_expiracion_visa;
                $l->user_id_c             = $this->obtener_oportunidad()->assigned_user_id;
                $l->save( false );

                //$l->load_relationship('veta_liquidacion_opportunities');
                //$l->veta_liquidacion_opportunities->add($this->id) ;
            }
        }
        else {
            $tmp_id = parent::save( $check_notify );
            $this->actualizar_oportunidad();
        }

        return $tmp_id;
    }

    private function obtener_liquidacion() {

        $l = null;

        $liquidaciones = $this->get_linked_beans( 'veta_liquidacion_veta_loo' , 'Veta_Liquidacion' );

        foreach( $liquidaciones as $lq )
            $l = $lq;

        return $l;
    }

    /**
     * Este metodo establece el estudiante de la carta de oferta basado en la informacion de la oportunidad
     * @param $appid : Es el id de la aplicacion
     */
    /*private function set_estudiante( $appid ) {
        $app = new Veta_Aplicacion();
        $app->retrieve( $appid );

        $oportunidades = $app->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

        foreach( $oportunidades as $oportunidad ) {
            $es = $oportunidad->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

            foreach( $es as $e ) {
                $this->contact_id_c = $e->id;
                $this->fecha_expiracion_visa = $e->fecha_expiracion_visa_c;
            }
        }
    } */

    private function set_estudiante() {

        if( empty( $this->contact_id_c ) ) {

            if( ! empty( $this->lead_id_c ) ) {

                $l = new Lead();
                $l->retrieve( $this->lead_id_c );

                if( $l->converted == true ) {
                    $this->contact_id_c = $l->contact_id;
                }
            }
        }
    }

    private function redireccionar( $msg , $registro ) {
        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Loo&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }

    // Este metodo valida que no existan casos abiertos y correcciones pendientes para asi cambiar el estado
    private function validar_enviado() {

        $ok = true;

        if( $this->existen_casos_pendientes() or $this->existen_correcciones_pendientes() ) {
            $this->estado = 'Pendiente';
            $ok           = false;
        }

        return $ok;
    }

    private function existen_casos_pendientes() {
        $existen = false;
        $casos   = $this->get_linked_beans( 'veta_loo_cases' , 'Cases' );

        foreach( $casos as $caso ) {
            if( $caso->state == 'Open' ) {
                $existen = true;
            }
        }

        return $existen;
    }

    private function existen_correcciones_pendientes() {
        $existen      = false;
        $correcciones = $this->get_linked_beans( 'veta_loocorreccion_veta_loo' , 'Veta_LooCorreccion' );

        foreach( $correcciones as $correccion ) {
            if( empty( $correccion->fecha_correccion ) ) {
                $existen = true;
            }
        }

        return $existen;
    }

    // Este metodo actualiza el estado de la oportunidad si el estado del Loo es diferente a Enviado
    private function actualizar_oportunidad() {

        $o                      = $this->obtener_oportunidad();
        $o->estado_admisiones_c = $this->estado_loo;
        $o->save( false );

    }

    private function obtener_oportunidad() {

        $oportunidad = null;

        // Obtengo la aplicacion a la que pertenece el LOO
        $aplicaciones = $this->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Aplicacion' );

        foreach( $aplicaciones as $a ) {

            $oportunidades = $a->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

            foreach( $oportunidades as $o ) {

                $oportunidad = $o;
            }
        }

        return $oportunidad;

    }

    public function actualizar_contacto( Contact $c){

        $db = DBManagerFactory::getInstance();
        $sql = "UPDATE veta_loo SET contact_id_c = '". $c->id . "' WHERE id = '" . $this->id . "'";
        $res = $db->query($sql);

        $correcciones = $this->get_linked_beans('veta_loocorreccion_veta_loo' , 'Veta_LooCorreccion');

        foreach( $correcciones as $correccion) {
            $correccion->actualizar_contacto( $c);
        }

        $liquidaciones = $this->get_linked_beans('veta_liquidacion_veta_loo' , 'Veta_Liquidacion');

        foreach( $liquidaciones as $liquidacion) {
            $liquidacion->actualizar_contacto( $c);
        }

        $casos = $this->get_linked_beans('veta_loo_cases' , 'Cases');

        foreach( $casos as $caso) {
            $sql = "UPDATE cases_cstm SET contact_id_c = '". $c->id . "' WHERE id = '" . $this->id . "'";
            $res = $db->query($sql);
        }
    }

}