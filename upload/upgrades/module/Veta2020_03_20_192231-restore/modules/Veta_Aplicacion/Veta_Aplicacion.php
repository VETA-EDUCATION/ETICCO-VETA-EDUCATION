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

class Veta_Aplicacion extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_Aplicacion';
    public $object_name = 'Veta_Aplicacion';
    public $table_name = 'veta_aplicacion';
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
    public $campus;
    public $pais;
    public $departamento;
    public $ciudad;
    public $curso;
    public $duracion;
    public $estado;
    public $fecha_admisiones;
    public $fecha_envio;
    public $fecha_inicio;
    public $intensidad;
    public $jornada;
    public $tipo_curso;
    public $tps;
    public $vacaciones;

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function set_consecutivo() {

        if( ! isset( $this->id ) || empty( $this->id ) ) {

            $query  = "SELECT COUNT(id) AS num from veta_aplicacion limit 1";
            $result = $this->db->query( $query , true , "Error obteniendo el consecutivo de la aplicacion" );
            $row    = $this->db->fetchByAssoc( $result );

            if( $row != null )
                $this->name = ( $row[ 'num' ] + 1 ) * 1 . ' - ' . $this->name;
        }
    }

    /**
     * Este metodo obtiene la oportunidad relacionada a la aplicacion
     * @return Opportunity  Es la oportunidad relacionada, retorna nulo si no hay oportunidad
     */
    public function obtener_oportunidad() {

        $o = null;

        $oportunidades = $this->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

        foreach( $oportunidades as $op ) {
            $o = $op;
        }
        return $o;
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

    private function crear_loo( Opportunity $o ) {

        if( $this->estado_aplicacion == 'Aplicacion_Enviada' ) {

            $loos = $this->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Loo' );

            if( count( $loos ) == 0 ) {

                $l                        = new Veta_Loo();
                $l->contact_id_c          = $this->contact_id_c;
                $l->lead_id_c             = $this->lead_id_c;
                $l->estado_loo            = 'Requerimiento_LOO';
                $l->fecha_expiracion_visa = $o->fecha_expiracion_visa_c;
                $l->save();

                $l->load_relationship( 'veta_loo_veta_aplicacion' );
                $l->veta_loo_veta_aplicacion->add( $this->id );
            }
        }
    }

    private function existen_casos_pendientes() {
        $existen = false;
        $casos   = $this->get_linked_beans( 'veta_aplicacion_cases' , 'Cases' );

        foreach( $casos as $caso ) {

            if( $caso->state == 'Open' ) {
                $existen = true;
            }
        }

        return $existen;
    }

    public function save( $check_notify ) {
        $this->set_consecutivo();
        $this->set_estudiante();

        if( $this->estado_aplicacion == 'Aplicacion_Enviada' and $this->existen_casos_pendientes() )
            $this->redireccionar( 'No se puede colocar como envidada porque existen casos pendientes  ' );

        $tmpid = parent::save( $check_notify );

        // Actualizamos la oportunidad
        $o = $this->obtener_oportunidad();

        if( $o != null ) {

            $this->crear_loo( $o );
            $o->estado_admisiones_c = $this->estado_aplicacion;
            $o->save();

            $l = $this->get_lead_from_opportunity($o);
            $c = $this->get_contact_from_opportunity($o);

            $lid = $l == null ? '' : $l->id;
            $cid = $c == null ? '' : $c->id;

            $q   = "UPDATE veta_aplicacion SET contact_id_c = '" . $cid . "' , lead_id_c = '" . $lid . "' , fecha_expiracion_visa = '" . $o->fecha_expiracion_visa_c . "' WHERE id = '" . $tmpid . "'";
            $this->registrar_log('Veta Aplicacion::save linea 188 ' . $q);
            $res = $this->db->query( $q , true , "Error actualizando la fecha de expiración de la visa desde la aplicacion : " );
        }


        return $tmpid;
    }

    private function get_lead_from_opportunity( $o ) {

        $p = null;

        $leads    = $o->get_linked_beans( 'leads_opportunities_1' , 'Leads' );

        foreach( $leads as $lead ) {
            $p = $lead;
        }

        return $p;
    }

    private function get_contact_from_opportunity( $o ) {

        $p = null;

        $contacts = $o->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

        foreach( $contacts as $contact ) {
            $p = $contact;
        }

        return $p;
    }

    public function actualizar_contacto( Contact $c ) {

        $db  = DBManagerFactory::getInstance();
        $sql = "UPDATE veta_aplicacion SET contact_id_c = '" . $c->id . "' WHERE id = '" . $this->id . "'";
        $this->registrar_log('Veta Aplicacion::actualizar_contacto linea 200 : ' . $sql);
        $res = $db->query( $sql );

        $loos = $this->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Loo' );

        foreach( $loos as $l ) {
            $l->actualizar_contacto( $c );
        }

        $casos = $this->get_linked_beans( 'veta_aplicacion_cases' , 'Cases' );

        foreach( $casos as $caso ) {
            $sql = "UPDATE cases_cstm SET contact_id_c = '" . $c->id . "' WHERE id = '" . $this->id . "'";
            $res = $db->query( $sql );
        }
    }

    private function redireccionar( $msg , $registro ) {
        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Aplicacion&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }

    private function registrar_log( $msg ) {
        $path = date( "Y-m-d" ) . "_soel.log";
        $msg = '[' . date( "Y-m-d H:i:s" ) . '] ' . $msg;
        error_log( $msg . PHP_EOL . PHP_EOL , 3 , $path );
    }

}