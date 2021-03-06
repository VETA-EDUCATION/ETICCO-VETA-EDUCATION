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


class Veta_Pagos extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_Pagos';
    public $object_name = 'Veta_Pagos';
    public $table_name = 'veta_pagos';
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
    public $medio_pago;
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

    public function obtener_oportunidad()
    {

        $o = null;

        $liquidaciones = $this->get_linked_beans('veta_pagos_veta_liquidacion', 'Veta_Liquidacion');

        foreach ($liquidaciones as $liq) {
            $o = $liq->obtener_oportunidad();
        }

        return $o;
    }

    public function save($check_notify = false)
    {

        $this->name = number_format($this->monto, 0, ',', '.');
        $aux = parent::save($check_notify);

        // Obtenemos la liquidacion y la salvamos para forzar la actualizacion de los valores en la oportunidad
        $liquidaciones = $this->get_linked_beans('veta_pagos_veta_liquidacion', 'Veta_Liquidacion');

        foreach ($liquidaciones as $liquidacion)
            $liquidacion->actualizar_total();

        $this->heredar_info();

        return $aux;
    }

    private function heredar_info()
    {

        $lqs = $this->get_linked_beans('veta_pagos_veta_liquidacion', 'Veta_Liquidacion');

        foreach ($lqs as $l) {

            $this->contact_id_c = $l->contact_id_c;
            $this->lead_id_c = $l->lead_id_c;
            $this->fecha_expiracion_visa = $l->fecha_expiracion_visa;
        }

        parent::save(false);
    }

    public function actualizar_contacto(Contact $c)
    {

        $db = DBManagerFactory::getInstance();
        $sql = "UPDATE veta_pagos SET contact_id_c = '" . $c->id . "' WHERE id = '" . $this->id . "'";
        $res = $db->query($sql);
    }

}