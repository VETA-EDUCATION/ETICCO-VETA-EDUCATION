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

require_once( 'modules/Veta_Curso/Veta_Curso.php' );

class Veta_DetallePresupuesto extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_DetallePresupuesto';
    public $object_name = 'Veta_DetallePresupuesto';
    public $table_name = 'veta_detallepresupuesto';
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
    public $intake;
    public $duracion;
    public $inscripcion;
    public $currency_id;
    public $precio_por_semana;
    public $costo_materiales;
    public $costo_extra;
    public $deposito;
    public $total_curso;
    public $examen_medico;
    public $valor_seguro;
    public $valor_visa;
    public $bono;
    public $veta_curso_id_c;
    public $precio_curso;
    public $veta_college_id1_c;

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    /**
     *
     */
    private function update_presupuesto() {

        $presupuestos = $this->get_linked_beans( 'veta_detallepresupuesto_veta_presupuesto' , 'Veta_Presupuesto' );

        foreach( $presupuestos as $p ) {
            $p->update_totals();
        }
    }

    private function get_presupuesto() {

        $p = null;

        $presupuestos = $this->get_linked_beans( 'veta_detallepresupuesto_veta_presupuesto' , 'Veta_Presupuesto' );

        foreach( $presupuestos as $prep )
            $p = $prep;

        return $p;
    }


    public function save( $check_notify = false ) {

        $recibos = array();
        $presupuesto = $this->get_presupuesto();

        if( $presupuesto != null )
            $recibos = $presupuesto->get_linked_beans( 'veta_recibo_veta_presupuesto' , 'Veta_Recibo' );

        if( count( $recibos ) == 0 ) {
            $c = new Veta_Curso();
            $c->retrieve( $this->veta_curso_id_c );

            $this->name = $c->name;
            $this->deposito = $c->deposito * 1;
            $this->duracion = $c->duracion * 1;
            $this->inscripcion = $c->inscripcion * 1;
            $this->precio_por_semana = $c->pps * 1;
            $this->costo_materiales = $c->costo_materiales * 1;
            $this->costo_extra = $c->costo_extra * 1;

            $this->veta_college_id1_c = $c->veta_college_id_c;
            $this->precio_curso = ( ( $this->duracion * 1 ) * ( $this->precio_por_semana * 1 ) );
            $this->total_curso = ( $this->costo_materiales * 1 ) + ( $this->inscripcion * 1 ) + ( $this->costo_extra * 1 ) /*+ ( $this->deposito * 1 )*/ + $this->precio_curso - ( $this->bono * 1 );

            $aux = parent::save( $check_notify ); // TODO: Change the autogenerated stub
            $this->update_presupuesto();
            return $aux;
        }
        else
            $presupuesto->redireccionar('No se puede salvar porque el presupuesto ya genero un recibo', $presupuesto->id);
    }

    private function redireccionar( $msg , $registro ) {

        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_DetallePresupuesto&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }
}