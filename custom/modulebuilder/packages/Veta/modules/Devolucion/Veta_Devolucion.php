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
require_once( 'modules/Veta_Recibo/Veta_Recibo.php' );

class Veta_Devolucion extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_Devolucion';
    public $object_name = 'Veta_Devolucion';
    public $table_name = 'veta_devolucion';
    public $importable = true;

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
    public $monto;
    public $currency_id;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function set_consecutivo()
    {
        if (!isset($this->id) || empty($this->id)) {
            $max = $this->db->getOne('SELECT MAX(name) FROM veta_devolucion');
            $this->name = $max + 1;
        }
    }

    public function save($check_notify = false)
    {
        $r = new Veta_Recibo();

        if ( $r->is_gerente_contable() )
        {

            $this->set_consecutivo();
            $aux = parent::save( $check_notify ); // TODO: Change the autogenerated stub

            $r->id = $this->update_recibo();
        }
        else
        {
            $r->redireccionar( 'Solo un gerente contable puede modificar un recibo', $r->id );
        }
    }

    private function update_recibo()
    {
        $id      = null;
        $recibos = $this->get_linked_beans( 'veta_devolucion_veta_recibo', 'Veta_Recibo' );

        foreach ( $recibos as $r )
        {
            $r->update_cartera();
            $id = $r->id;
        }

        return $id;
    }

    public function mark_deleted( $id )
    {
        $rec     = new Veta_Recibo();
        $recibos = $this->get_linked_beans( 'veta_devolucion_veta_recibo', 'Veta_Recibo' );

        if ( $rec->is_gerente_contable() )
        {
            parent::mark_deleted( $id ); // TODO: Change the autogenerated stub

            foreach ( $recibos as $r )
                $r->update_cartera();
        }
        else
        {
            $this->redireccionar( 'Solo un gerente contable puede eliminar una devolucion', $id );
        }
    }

}
