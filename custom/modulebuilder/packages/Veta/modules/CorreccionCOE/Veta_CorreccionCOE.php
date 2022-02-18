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


class Veta_CorreccionCOE extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_CorreccionCOE';
    public $object_name = 'Veta_CorreccionCOE';
    public $table_name = 'veta_correccioncoe';
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

    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function heredar_info()
    {
        $coes = $this->get_linked_beans('veta_correccioncoe_veta_coe', 'Veta_COE');

        foreach($coes as $coe)
        {
            $this->contact_id_c = $coe->contact_id_c;
            $this->lead_id_c = $coe->lead_id_c;
            $this->fecha_expiracion_visa = $coe->fecha_expiracion_visa;
        }

        parent::save(false);
    }

    public function save($check_notify = false)
    {
        $aux = parent::save($check_notify);
        $this->heredar_info();

        /* $pendiente = 'Pendiente_Correcciones';
         // Obtenemos todos los COE relacionados y si alguno esta abierto colocamos el COE como pendiente de lo contrario lo colocamos como listo
         $coes = $this->get_linked_beans('veta_correccioncoe_veta_coe', 'Veta_COE');
         $estado = 'Listo';
         $c = null;

         foreach($coes as $coe)
         {
             if(empty($this->fecha_correccion))
             {
                 $coe->estado = $pendiente;
                 $coe->from_correccion = true;
                 $coe->save(false);
                 $estado = $pendiente;
             }

             $c = $coe;
         }

         // Si se encontro un coe y el estado es listo obtenemos todas las correcciones del coe y les verificamos el estado
         if(isset($c) and $estado == 'Listo')
         {
             $correcciones = $c->get_linked_beans('veta_correccioncoe_veta_coe', 'Veta_CorreccionCOE');

             foreach($correcciones as $correccion)
             {
                 if($correccion->id == $this->id)
                 {
                     if(empty($this->fecha_correccion))
                     {
                         $estado = $pendiente;
                     }
                 }
                 elseif(empty($correccion->fecha_correccion))
                 {
                     $estado = $pendiente;
                 }
             }

             $c->estado = $estado;
             $c->from_correccion = true;
             $c->save(false);
         }        */

        return $aux;
    }
}