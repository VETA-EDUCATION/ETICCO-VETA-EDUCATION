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

require_once( 'modules/Veta_COE/Veta_COE.php' );

class Veta_Liquidacion extends Basic
{
    public $new_schema = true;
    public $module_dir = 'Veta_Liquidacion';
    public $object_name = 'Veta_Liquidacion';
    public $table_name = 'veta_liquidacion';
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
    public $monto;
    public $currency_id;
    public $total_pagado;

    private $solo_salvar = false;

    public function bean_implements( $interface ) {
        switch( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    private function set_consecutivo() {

        if( ! isset( $this->id ) || empty( $this->id ) ) {

            $query = "SELECT COUNT(id) AS num from veta_liquidacion limit 1";
            $result = $this->db->query( $query , true , "Error obteniendo el consecutivo de la liquidacion" );
            $row = $this->db->fetchByAssoc( $result );

            if( $row != null )
                $this->name = $row[ 'num' ] + 1;
        }
    }


    /**
     * Este metodo indica si es la primera liquidacion asociada a una carta de oferta
     * @return bool
     */
    private function es_primera_liquidacion() {
        $es = true;
        $o = new Opportunity();
        $o->retrieve( $this->veta_liquidacion_opportunitiesopportunities_ida );

        $liquidaciones = $o->get_linked_beans( 'veta_liquidacion_opportunities' , 'Veta_Liquidacion' );

        if( count( $liquidaciones ) > 1 )
            $es = false;

        if( count( $liquidaciones ) == 1 ) {
            foreach( $liquidaciones as $liquidacion ) {
                if( $liquidacion->id != $this->id )
                    $es = false;
            }
        }

        return $es;
    }

    private function redireccionar( $msg , $registro ) {
        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Liquidacion&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }

    private function establecer_estudiante() {

        $o = $this->obtener_oportunidad();

        if(isset($o)) {
            $es = $o->get_linked_beans( 'contacts_opportunities_1' , 'Contacts' );

            foreach( $es as $e ) {

                $this->contact_id_c = $e->id;
                $this->fecha_expiracion_visa = $e->fecha_expiracion_visa_c;
            }
        }

        parent::save( false );
    }

    public function obtener_oportunidad() {

        $o = null;
        $a = $this->obtener_aplicacion();

        if( $a != null ) {
            $oportunidades = $a->get_linked_beans( 'veta_aplicacion_opportunities' , 'Opportunity' );

            foreach( $oportunidades as $op )
                $o = $op;
        }

        return $o;
    }

    private function obtener_aplicacion() {

        $app = null;
        $loos = $this->get_linked_beans( 'veta_liquidacion_veta_loo' , 'Veta_Loo' );

        foreach( $loos as $l ) {

            $apps = $l->get_linked_beans( 'veta_loo_veta_aplicacion' , 'Veta_Aplicacion' );

            foreach( $apps as $a ) {

                $app = $a;
            }
        }

        return $app;
    }

    public function actualizar_total() {

        $this->total_pagado = 0;
        $pagos = $this->get_linked_beans( 'veta_pagos_veta_liquidacion' , 'Veta_Pago' );

        foreach( $pagos as $p )
            $this->total_pagado += $p->monto * 1;

        /*if( ( $this->total_pagado ) >= ( $this->monto * 1 ) ) {
            $this->estado_pago_colegios = 'Pagado';
        } */

        $this->save();
    }

    public function obtener_recibo() {

        $r = null;
        $o = $this->obtener_oportunidad();

        if( $o != null ) {
            $recibos = $o->get_linked_beans( 'veta_recibo_opportunities' , 'Veta_Recibo' );

            foreach( $recibos as $rec )
                $r = $rec;
        }

        return $r;
    }

    public function obtener_detalle_recibo() {

        $d = null;
        $r = $this->obtener_recibo();
        $a = $this->obtener_aplicacion();

        if( $r != null ) {

            $detalles = $r->get_linked_beans( 'veta_detallerecibo_veta_recibo' , 'Veta_DetalleRecibo' );

            foreach( $detalles as $det ) {

                $curso = new Veta_Curso();
                $curso->retrieve( $det->veta_curso_id_c );

                //if( $curso->name == $a->curso )
		        if( $curso->id == $a->veta_curso_id_c )
                    $d = $det;
            }
        }

        return $d;
    }

    private function total_pagado_otros_coes() {

        $pagado = 0;
        $o = $this->obtener_oportunidad();

        $coes = $o->get_linked_beans( 'veta_coe_opportunities' , 'Veta_COE' );

        foreach( $coes as $coe ) {

            $det = $coe->obtener_detalle_recibo();
            $liq = $coe->obtener_liquidacion();

            if( $liq->id != $this->id )
                $pagado += $det->deposito * 1;
        }

        return $pagado;
    }

    private function esta_pagado() {

        $pagado = false;
        $r = $this->obtener_recibo();
        $d = $this->obtener_detalle_recibo();

        if( ( ( $r->gran_total*1 - $r->pendiente_por_pagar * 1) - ( $this->total_pagado_otros_coes() ) ) >= ( $d->deposito * 1 ) )
            $pagado = true;

        return $pagado;
    }


    /**
     * Este metodo indica si existe un coe asociado con la liquidacion
     * @return bool
     */
    private function existe_coe(){

        $existe = false;

        $coes = $this->get_linked_beans('veta_coe_veta_liquidacion' , 'Veta_COE');

        if(count($coes) > 0)
            $existe = true;

        return $existe;
    }

    public function save( $check_nofify = false ) {

        $current_liquidacion = new Veta_Liquidacion();
        $current_liquidacion->retrieve($this->id);

        $this->set_consecutivo();
        $aux = parent::save( $check_nofify );
        $o = $this->obtener_oportunidad();

        if( $o != null ) {

            $o->estado_pago_institucion_c = $this->estado_pago_colegios;
            $o->save( false );

            $d = $this->obtener_detalle_recibo();

            //$this->monto = $d->total_curso * 1;
            $aux = parent::save( $check_nofify );
        }

        if( $this->estado_pago_colegios == 'Solicitar_COE') {

            if($this->esta_pagado() and ! $this->existe_coe()){

                $coe = new Veta_COE();
                $coe->name = 'Nuevo COE';
                $coe->estado = 'Solicitar_COE';
                $coe->lead_id_c = $this->lead_id_c;
                $coe->contact_id_c = $this->contact_id_c;
                $coe->fecha_expiracion_visa = $this->fecha_expiracion_visa;

                $coe->save( false );

                $coe->load_relationship( 'veta_coe_veta_liquidacion' );
                $coe->veta_coe_veta_liquidacion->add( $this->id );

                if( $o != null ) {
                    $coe->load_relationship( 'veta_coe_opportunities' );
                    $coe->veta_coe_opportunities->add( $o->id );
                }

                $a = $this->obtener_aplicacion();

                if( $a != null ) {

                    $coe->load_relationship( 'veta_coe_veta_aplicacion' );
                    $coe->veta_coe_veta_aplicacion->add( $a->id );
                }
            }
            else {

                $db = DBManagerFactory::getInstance();
                $sql = "UPDATE veta_liquidacion SET estado_pago_colegios = '". $current_liquidacion->estado_pago_colegios . "' WHERE id = '" . $this->id . "'";
                $res = $db->query($sql);
                $this->redireccionar('No se puede solicitar el COE porque hay un pendiente en cartera, por favor revisar que lo que el estudiante ha pagado en el recibo sea mayor al total del curso mas lo pagado de otros coes', $this->id);
            }
        }

        $this->establecer_estudiante();
        return $aux;

    }

    public function actualizar_contacto( Contact $c){

        $db = DBManagerFactory::getInstance();
        $sql = "UPDATE veta_liquidacion SET contact_id_c = '". $c->id . "' WHERE id = '" . $this->id . "'";
        $res = $db->query($sql);

        $pagos = $this->get_linked_beans('veta_pagos_veta_liquidacion' , 'Veta_Pagos');

        foreach( $pagos as $p) {
            $p->actualizar_contacto( $c);
        }
    }


    /**
     * Este metodo coloca en estado descartada una liquidacion
     */
    public function descartar(){

        $this->estado_pago_colegios = 'Descartada';
        parent::save(false);
    }


}
