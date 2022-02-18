<?php
/**
 * soel2
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

class Veta_Abono extends Basic
{
    public $new_schema  = true;
    public $module_dir  = 'Veta_Abono';
    public $object_name = 'Veta_Abono';
    public $table_name  = 'veta_abono';
    public $importable  = false;

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

    public function bean_implements( $interface )
    {
        switch ( $interface )
        {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function set_consecutivo()
    {
        if ( ! isset( $this->id ) || empty( $this->id ) )
        {
            $query  = "SELECT COUNT(id) AS num FROM veta_abono LIMIT 1";
            $result = $this->db->query( $query, true, "Error obteniendo el consecutivo del abono" );
            $row    = $this->db->fetchByAssoc( $result );

            if ( $row != null )
                $this->name = $row[ 'num' ] + 1;
        }
    }

    private function relacionar_estudiante()
    {
        $recibos = $this->get_linked_beans( 'veta_abono_veta_recibo', 'Veta_Recibo' );

        foreach ( $recibos as $recibo )
        {
            $abonos = $recibo->get_linked_beans( 'veta_abono_veta_recibo', 'Veta_Abono' );

            if ( count( $abonos ) == 1 )
            {
                $recibo->convertir_prospecto();
                $this->cerrar_requerimiento();
            }

        }
    }

    public function save( $check_notify = false )
    {

        $r = new Veta_Recibo();

        if ( $r->is_gerente_contable() )
        {

            $this->set_consecutivo();
            $aux = parent::save( $check_notify ); // TODO: Change the autogenerated stub

            $r->id = $this->update_recibo();
            $this->relacionar_estudiante();
        }
        else
        {
            $r->redireccionar( 'Solo un gerente contable puede modificar un recibo', $r->id );
        }
    }

    /**
     * Establece el estado del requerimiento asociando como Cerrado debido a que se realizo un abonow
     */
    private function cerrar_requerimiento()
    {
        $sql = "UPDATE veta_requerimiento 
                INNER JOIN veta_requerimiento_veta_presupuesto_c ON veta_requerimiento_veta_presupuesto_c.veta_requerimiento_veta_presupuestoveta_requerimiento_ida = veta_requerimiento.id AND veta_requerimiento_veta_presupuesto_c.deleted = 0 
                INNER JOIN veta_presupuesto ON veta_presupuesto.id = veta_requerimiento_veta_presupuesto_c.veta_requerimiento_veta_presupuestoveta_presupuesto_idb AND veta_presupuesto.deleted = 0 
                INNER JOIN veta_recibo_veta_presupuesto_c ON veta_recibo_veta_presupuesto_c.veta_recibo_veta_presupuestoveta_presupuesto_ida = veta_presupuesto.id AND veta_recibo_veta_presupuesto_c.deleted = 0 
                INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_veta_presupuesto_c.veta_recibo_veta_presupuestoveta_recibo_idb AND veta_recibo.deleted = 0 
                INNER JOIN veta_abono_veta_recibo_c ON veta_abono_veta_recibo_c.veta_abono_veta_reciboveta_recibo_ida = veta_recibo.id AND veta_abono_veta_recibo_c.deleted = 0 
                INNER JOIN veta_abono ON veta_abono.id = veta_abono_veta_recibo_c.veta_abono_veta_reciboveta_abono_idb AND veta_abono.deleted = 0
                SET veta_requerimiento.estado = 'Cerrado'  
                WHERE veta_abono.id = '" . $this->id . "'";

        $this->db->query( $sql );
    }

    private function update_recibo()
    {
        $id      = null;
        $recibos = $this->get_linked_beans( 'veta_abono_veta_recibo', 'Veta_Recibo' );

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
        $recibos = $this->get_linked_beans( 'veta_abono_veta_recibo', 'Veta_Recibo' );

        if ( $rec->is_gerente_contable() )
        {
            parent::mark_deleted( $id ); // TODO: Change the autogenerated stub

            foreach ( $recibos as $r )
                $r->update_cartera();
        }
        else
        {
            $this->redireccionar( 'Solo un gerente contable puede eliminar un abono', $id );
        }
    }

    public function redireccionar( $msg, $registro )
    {
        if ( ! empty( $registro ) )
        {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Abono&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else
        {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }
}