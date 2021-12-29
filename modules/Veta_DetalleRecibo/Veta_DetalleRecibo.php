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

class Veta_DetalleRecibo extends Basic {
    public $new_schema  = true;
    public $module_dir  = 'Veta_DetalleRecibo';
    public $object_name = 'Veta_DetalleRecibo';
    public $table_name  = 'veta_detallerecibo';
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
    public $currency_id;
    public $duracion;
    public $inscripcion;
    public $precio_por_semana;
    public $costo_materiales;
    public $costo_extra;
    public $deposito;
    public $total_curso;
    public $examen_medico;
    public $valor_seguro;
    public $valor_visa;
    public $bono;
    public $intake;

    public function bean_implements( $interface ) {
        switch ( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function update_recibo() {

        $recibos = $this->get_linked_beans( 'veta_detallerecibo_veta_recibo', 'Veta_Recibo' );

        foreach ( $recibos as $r ) {
            $r->update_totals();
	    $abonos = $r->get_linked_beans('veta_abono_veta_recibo','Veta_Abono');
            foreach ( $abonos as $a ) {
                $a->update_abono_fromdetallerecibo();
                
            }
        }
    }

    private function update_otros_costos() {

        $this->otros = 0;
        $items       = $this->get_linked_beans( 'veta_detallereciboitem_veta_detallerecibo', 'Veta_DetalleRecibo' );

        foreach ( $items as $i ) {

            $this->otros += ( $i->monto * 1 );
        }
    }

    public function save( $check_notify = false ) {

        $r = new Veta_Recibo();
        $r->retrieve( $_POST[ "relate_id" ] );

        if ( $r->has_proceso_ventas() ) {

            $r->redireccionar( 'No se puede actualizar porque ya existe un proceso de ventas', $r->id );
        }

        if ( $r->is_gerente_contable() ) {

            if ( $this->salvar == true ) {

                $c = new Veta_Curso();
                $c->retrieve( $this->veta_curso_id_c );

                $this->name              = $c->name;
                $this->deposito          = $c->deposito * 1;
                $this->duracion          = $c->duracion * 1;
                $this->inscripcion       = $c->inscripcion * 1;
                $this->precio_por_semana = $c->pps * 1;
                $this->costo_materiales  = $c->costo_materiales * 1;
                $this->costo_extra       = $c->costo_extra * 1;
                $this->update_otros_costos();

                $this->veta_college_id_c = $c->veta_college_id_c;
                $this->precio_curso      = ( ( $this->duracion * 1 ) * ( $this->precio_por_semana * 1 ) );
                $this->total_curso       = ( $this->costo_materiales * 1 ) + ( $this->inscripcion * 1 ) + ( $this->costo_extra * 1 ) /*+ ( $this->deposito * 1 ) */ + $this->precio_curso - ( $this->bono * 1 ) + ( $this->otros * 1 );

                $aux = parent::save( $check_notify );// TODO: Change the autogenerated stub
                $GLOBALS['log']-> error("En update detalle recibo->Colegio old:".$this->veta_college_id_c."Colegio new:".$c->veta_college_id_c); 
                $this->update_recibo();
                return $aux;
            }
            else {
                return parent::save( $check_notify );
            }
        }
        else {

            $recibos = $this->get_linked_beans( 'veta_detallerecibo_veta_recibo', 'Veta_Recibo' );

            foreach ( $recibos as $rec ) {
                $r = $rec;
            }

            $r->redireccionar( 'Solo puede salvar un recibo un gerente contable', $r->id );
        }

    }

    public function mark_deleted( $id ) {

        $r = new Veta_Recibo();
        $r->retrieve( $this->veta_detallerecibo_veta_reciboveta_recibo_ida );

        if ( $r->has_proceso_ventas() ) {

            $r->redireccionar( 'No se puede eliminar porque ya existe un proceso de ventas', $r->id );
        }

        if ( $r->is_gerente_contable() ) {

            $recibos = $this->get_linked_beans( 'veta_detallerecibo_veta_recibo', 'Veta_Recibo' );
            parent::mark_deleted( $id ); // TODO: Change the autogenerated stub

            foreach ( $recibos as $r ) {
                $r->update_totals();
            }
        }
        else {

            $r->redireccionar( 'Solo puede eliminar un recibo un gerente contable', $id );
        }


    }

}