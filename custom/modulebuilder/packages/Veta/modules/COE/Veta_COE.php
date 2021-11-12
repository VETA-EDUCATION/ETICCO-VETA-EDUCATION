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


class Veta_COE extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_COE';
    public $object_name = 'Veta_COE';
    public $table_name = 'veta_coe';
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
    public $fecha_envio_estudiante;
    public $fecha_solicitud;
    public $fecha_correccion;
    public $fecha_correccion2;

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

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

    private function establecer_estudiante() {

        $l = $this->obtener_liquidacion();

        if( $l != null ) {

            $this->contact_id_c = $l->contact_id_c;
            $this->lead_id_c =  $l->lead_id_c ;
        }

        parent::save( false );
    }

    public function save( $check_notify = false ) {

        if( $this->estado_loo == "COE_Guardado_Enviado"  ) {

            if($this->existen_correcciones_pendientes())
                $this->redireccionar('No se puede salvar como Enviado porque existen correcciones pendientes', $this->id);

            if($this->existen_casos_pendientes())
                $this->redireccionar('No se puede salvar como Enviado porque existen casos pendientes', $this->id);

        }

        $this->actualizar_oportunidad();
        $aux = parent::save( $check_notify );
        $this->establecer_estudiante();

        return $aux;
    }

    private function actualizar_estado( $estado ) {

        $q = "UPDATE veta_coe SET estado = '" . $estado . "' WHERE id = '" . $this->id . "'";
        $res = $this->db->query( $q , true , "Error actualizando el estado del COE : " );
    }



    private function existen_casos_pendientes() {
        $existen = false;
        $casos = $this->get_linked_beans( 'veta_coe_cases' , 'Cases' );

        foreach( $casos as $caso ) {
            if( $caso->state == 'Open' ) {
                $existen = true;
            }
        }

        return $existen;
    }

    private function existen_correcciones_pendientes() {
        $existen = false;
        $correcciones = $this->get_linked_beans( 'veta_correccioncoe_veta_coe' , 'Veta_CorreccionCOE' );

        foreach( $correcciones as $correccion ) {
            if( empty( $correccion->fecha_correccion ) ) {
                $existen = true;
            }
        }

        return $existen;
    }



    private function existen_loo_pendientes() {
        $existen = false;
        $correcciones = $this->get_linked_beans( 'veta_correccioncoe_veta_coe' , 'Veta_Loo' );

        foreach( $correcciones as $correccion ) {
            if( empty( $correccion->fecha_correccion ) ) {
                $existen = true;
            }
        }

        return $existen;
    }

    // Este metodo actualiza el estado de la oportunidad si el estado del Loo es diferente a Enviado
    private function actualizar_oportunidad() {

        // Obtengo la oportunidad a la que pertenece el COE
        $oportunidades = $this->get_linked_beans( 'veta_coe_opportunities' , 'Opportunities' );

        foreach( $oportunidades as $o ) {

            $o->estado_admisiones_c =  $this->estado;
            $o->save( false );
        }
    }

    /**
     * Este metodo obtiene la oportunidad relacionada a la aplicacion
     * @return Opportunity  Es la oportunidad relacionada, retorna nulo si no hay oportunidad
     */
    public function obtener_oportunidad() {

        $o = null;

        $oportunidades = $this->get_linked_beans( 'veta_coe_opportunities' , 'Opportunity' );

        foreach( $oportunidades as $op ) {
            $o = $op;
        }
        return $o;
    }

    public function obtener_liquidacion() {

        $l = null;

        $liquidaciones = $this->get_linked_beans('veta_coe_veta_liquidacion', 'Veta_Liquidacion');

        foreach( $liquidaciones as $liq )
            $l = $liq;

        return $l;
    }

    public function obtener_detalle_recibo() {

        $d = null;
        $l = $this->obtener_liquidacion();

        if( $l != null )
        {
            $l = new Veta_Liquidacion();
            $d = $l->obtener_detalle_recibo();
        }

        return $d;
    }

    public function actualizar_contacto( Contact $c){

        $db = DBManagerFactory::getInstance();
        $sql = "UPDATE veta_coe SET contact_id_c = '". $c->id . "' WHERE id = '" . $this->id . "'";
        $res = $db->query($sql);

    }

    /**
     * Este metodo establece el estado de la Carta de Oferta y sus liquidaciones en Descartados
     */
    public function descartar(){

        $this->estado_loo = 'Descartado';
        parent::save(false);
        //Diego
        //Ortiz
    }
}