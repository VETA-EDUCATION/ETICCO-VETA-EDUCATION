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


class Veta_LooCorreccion extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_LooCorreccion';
    public $object_name = 'Veta_LooCorreccion';
    public $table_name = 'veta_loocorreccion';
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
    public $fecha_correccion;
    public $fecha_solicitud;

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    /**
     * Este metodo establece el estudiante basado en la informacion de la oportunidad
     * @param $loo : Es la carta de oferta
     */
    private function heredar_info( $loo ) {
        // Obtengo la aplicacion a la que pertenece el LOO
        $aplicaciones = $loo->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Aplicacion' );

        foreach( $aplicaciones as $aplicacion ) {
            $oportunidades = $aplicacion->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunities' );

            foreach( $oportunidades as $oportunidad ) {
                $es = $oportunidad->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

                foreach( $es as $e ) {
                    $this->contact_id_c = $e->id;
                }
            }
        }

        parent::save( false );

    }

    public function save( $check_notify = false ) {
        $aux = parent::save( $check_notify );

        // Obtenemos todos los LOO relacionados con el LOO y si alguno esta abierto colocamos el LOO como pendiente de lo contrario lo colocamos como listo
        $loos = $this->get_linked_beans('veta_loocorreccion_veta_loo', 'Veta_Loo');
        /*$estado = 'Listo';
        $l = null;*/

        foreach($loos as $loo)
        {
            /*if(empty($this->fecha_correccion))
            {
                $loo->estado = 'Solicitud_Correccion_Carta_Oferta';
                $loo->from_correccion = true;
                $loo->save(false);
                $estado = 'Solicitud_Correccion_Carta_Oferta';
            }

            $l = $loo;*/

            $this->lead_id_c = $loo->lead_id_c;
            $this->contact_id_c = $loo->contact_id_c;
            $this->heredar_info($loo);
        }

        /*if(isset($l) and $estado == 'Listo')
        {
            $correcciones = $l->get_linked_beans('veta_loocorreccion_veta_loo', 'Veta_LooCorreccion');

            foreach($correcciones as $correccion)
            {
                if($correccion->id == $this->id)
                {
                    if(empty($this->fecha_correccion))
                    {
                        $estado = 'Solicitud_Correccion_Carta_Oferta';
                    }
                }
                elseif(empty($correccion->fecha_correccion))
                {
                    $estado = 'Solicitud_Correccion_Carta_Oferta';
                }
            }

            $l->estado = $estado;
            $l->from_correccion = true;
            $l->save(false);
        }  */

        return $aux;
    }

    public function precargar_entidad() {
        /*if(empty($this->name))
        {
            $loos = $this->get_linked_beans('veta_loocorreccion_veta_loo', 'Veta_Loo');

            foreach($loos as $loo)
            {
                $apps = $loo->get_linked_beans('veta_loo_veta_aplicacion','Veta_Aplicacion');

                foreach($apps as $app)
                {
                    $this->name = $app->name;
                }

            } public function preDisplay()
                {
                    if(empty($this->bean->name))
                    {
                        $loos = $this->bean->get_linked_beans('veta_loocorreccion_veta_loo', 'Veta_Loo');

                        foreach($loos as $loo)
                        {
                            $apps = $loo->get_linked_beans('veta_loo_veta_aplicacion','Veta_Aplicacion');

                            foreach($apps as $app)
                            {
                                $this->bean->name = $app->name;
                            }

                        }
                    }

                    return parent::preDisplay();
                }
        }*/
    }

    public function actualizar_contacto( Contact $c){

        $db = DBManagerFactory::getInstance();
        $sql = "UPDATE veta_loocorreccion SET contact_id_c = '". $c->id . "' WHERE id = '" . $this->id . "'";
        $res = $db->query($sql);

    }

}