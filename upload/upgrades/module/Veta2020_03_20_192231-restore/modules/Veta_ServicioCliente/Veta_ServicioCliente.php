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

require_once( 'modules/Veta_Visa/Veta_Visa.php' );

class Veta_ServicioCliente extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_ServicioCliente';
    public $object_name = 'Veta_ServicioCliente';
    public $table_name = 'veta_serviciocliente';
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

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function set_consecutivo() {

        if( ! isset( $this->id ) || empty( $this->id ) ) {

            $query = "SELECT COUNT(id) AS num from veta_serviciocliente limit 1";
            $result = $this->db->query( $query , true , "Error obteniendo el consecutivo del servicio al cliente" );
            $row = $this->db->fetchByAssoc( $result );

            if( $row != null )
                $this->name = $row[ 'num' ] + 1;
        }
    }

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

    private function obtener_recibo() {

        $r = null;
        $o = $this->obtener_oportunidad();

        if( $o != null ) {

            $recibos = $o->get_linked_beans( 'veta_recibo_opportunities' , 'Veta_Recibo' );

            foreach( $recibos as $rec )
                $r = $rec;
        }

        return $r;
    }

    /**
     * Este metodo indica si el primer pago ya fue realizado
     * @return bool
     */
    private function esta_pagado() {

        $pagado = false;

        $recibo = $this->obtener_recibo();

        if( $recibo != null ) {

            if( $recibo->pagado * 1 >= $recibo->primer_pago * 1 )
                $pagado = true;
        }

        return $pagado;
    }

    private function obtener_oportunidad() {

        $o = null;
        $oportunidades = $this->get_linked_beans( 'veta_serviciocliente_opportunities' , 'Opportunity' );

        foreach( $oportunidades as $op )
            $o = $op;

        return $o;
    }

    public function actualizar_contacto( Contact $c){

        $db = DBManagerFactory::getInstance();
        $sql = "UPDATE veta_serviciocliente SET contact_id_c = '". $c->id . "' WHERE id = '" . $this->id . "'";
        $res = $db->query($sql);

    }

    public function save( $check_notify = false ) {

        $tmp_id = null;
        $this->set_consecutivo();
        $this->set_estudiante();

        if( $this->estado == 'Visa' and $this->esta_pagado() == false ) {

            $this->redireccionar( 'No se puede colocar en estado visa por que no se ha pagado' , $this->id );
        }
        else {

            $tmp_id = parent::save( $check_notify ); // TODO: Change the autogenerated stub
            $o = $this->obtener_oportunidad();


            if( $o != null ) {

                // Se crea la visa
                if( $this->estado == 'Visa' and $this->esta_pagado() ) {

                    $c = new Contact();
                    $c->retrieve($this->contact_id_c);

                    $visa = new Veta_Visa();
                    $visa->name = 'Nueva Visa';
                    $visa->estado = 'HAP_ID_Solicitar';
                    $visa->fecha_expiracion_visa = $this->fecha_expiracion_visa;
                    $visa->contact_id_c = $this->contact_id_c;
                    $visa->user_id_c  = $c->assigned_user_id;

                    $estudiantes = $o->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

                    foreach( $estudiantes as $e )
                        $visa->contact_id_c = $e->id;

                    $visa->save( false );

                    // Creamos relacion entre visa y servicio al cliente
                    $visa->load_relationship( 'veta_visa_veta_serviciocliente' );
                    $visa->veta_visa_veta_serviciocliente->add( $this->id );

                    // Creamos relacion entre visa y oportunidad
                    $visa->load_relationship( 'veta_visa_opportunities' );
                    $visa->veta_visa_opportunities->add( $o->id );

                    $o->estado_visas_c = $visa->estado;
                }

                // Se actualiza el estado en la oportunidad
                $o->estado_servicio_al_cliente_c = $this->estado;

                $o->save();
            }
        }


        return $tmp_id;
    }

    public function redireccionar( $msg , $registro ) {
        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_ServicioCliente&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }


}