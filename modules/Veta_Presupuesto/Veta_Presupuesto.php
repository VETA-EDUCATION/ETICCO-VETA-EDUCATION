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

require_once( 'modules/Veta_TRM/Veta_TRM.php' );
require_once( 'modules/Veta_TiposVisa/Veta_TiposVisa.php' );

class Veta_Presupuesto extends Basic
{
    public const REQUERIMIENTOINFOCOMPLETADO = 'No se puede crear el presupuesto porque el estado es Info o Completado';
    public const REQUERIMIENTOSINREFERIDO = 'No se puede crear el presupuesto porque el requerimiento no tiene un referido';
    public const REQUERIMIENTOSINFUENTE = 'No se puede crear el presupuesto porque el requerimiento no tiene fuente';
    public const PROSPECTOSINEMAIL = 'No se puede crear el presupuesto porque el prospecto no tiene email';
    public const PROSPECTOSINCELULAR = 'No se puede crear el presupuesto porque el prospecto no tiene el celular';
    public const RECIBOCREADONOPRESUPUESTO = 'No es posible salvar el presupuesto porque ya se creo un recibo';

    public $new_schema = true;
    public $module_dir = 'Veta_Presupuesto';
    public $object_name = 'Veta_Presupuesto';
    public $table_name = 'veta_presupuesto';
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
    public $pais;
    public $departamento;
    public $ciudad;
    public $primer_pago;
    public $currency_id;
    public $subtotal;
    public $gran_total;
    public $usd;
    public $pesos;
    public $aud_usd;
    public $usd_cop;
    public $examen_medico;
    public $total_visa;
    public $seguro;
    public $veta_tiposvisa_id_c;

    public function bean_implements( $interface )
    {
        switch ( $interface ) {
            case 'ACL':
                return true;
        }

        return false;
    }

    /**
     * Establece el consecutivo del presupuesto
     */
    private function set_consecutivo()
    {

        global $current_user;

        if ( ! isset( $this->id ) || empty( $this->id ) ) {

            $query  = "SELECT COUNT(id) AS num from veta_presupuesto limit 1";
            $result = $this->db->query( $query, true, "Error obteniendo el consecutivo del presupuesto" );
            $row    = $this->db->fetchByAssoc( $result );

            if ( $row != null ) {
                $this->name = $row[ 'num' ] + 1;
            }

            $this->assigned_user_id = $current_user->id;
        }
    }

    /**
     * Este metodo salva un presupuesto validando que el email y el teléfono esten creados en el prospecto y el que el referido y la fuente esten creados en el requerimiento
     * @param false $check_notify
     * @return string
     */
    public function save( $check_notify = false )
    {
        $requerimiento = new Veta_Requerimiento();

        if ( $_REQUEST[ "relate_to" ] == 'veta_requerimiento_veta_presupuesto' ) {
            $requerimiento->retrieve( $_REQUEST[ "relate_id" ] );
        } else {
            $requerimiento  = null;
            $requerimientos = $this->get_linked_beans( 'veta_requerimiento_veta_presupuesto', 'Veta_Requerimiento' );

            foreach ( $requerimientos as $req ) {
                $requerimiento = $req;
            }
        }

        if ( ! isset( $requerimiento ) or $requerimiento->estado == 'Info' or $requerimiento->estado == 'Completado' ) {
            $this->redireccionar( Veta_Presupuesto::REQUERIMIENTOINFOCOMPLETADO, $this->id );
        }


        if( empty($requerimiento->referido)){
            $this->redireccionar( Veta_Presupuesto::REQUERIMIENTOSINREFERIDO, $this->id );
        }

        if(empty($requerimiento->fuente)){
            $this->redireccionar(Veta_Presupuesto::REQUERIMIENTOSINFUENTE, $this->id);
        }

        $prospectos = $requerimiento->get_linked_beans( 'veta_requerimiento_leads', 'Lead' );

        foreach ( $prospectos as $prospecto ) {

            /**
             * Esta validacion se elimina porque ahora se valida la fuente en el requerimiento y no en el prospecto
             */
            /*if ( empty( $prospecto->lead_source ) ) {
                $this->redireccionar( 'No se puede crear el presupuesto porque el prospecto no tiene fuente', $this->id  );
            }*/

            if ( empty( $prospecto->email1 ) ) {
                $this->redireccionar( Veta_Presupuesto::PROSPECTOSINEMAIL, $this->id );
            }

            if ( empty( $prospecto->phone_mobile ) ) {
                $this->redireccionar( Veta_Presupuesto::PROSPECTOSINCELULAR, $this->id );
            }
        }

        $recibos = $this->get_linked_beans( 'veta_recibo_veta_presupuesto', 'Veta_Recibo' );

        if ( count( $recibos ) == 0 ) {

            $result = $this->db->query( 'FLUSH TABLES WITH READ LOCK' );
            $this->set_consecutivo();
            $this->db->query( 'UNLOCK TABLES' );

            $tipo_visa = new Veta_TiposVisa();
            $tipo_visa->retrieve( $this->veta_tiposvisa_id_c );

            $this->total_visa    = $tipo_visa->total_visa * 1;
            $this->examen_medico = $tipo_visa->costo_examen * 1;
            $this->update_totals();

            $aux = parent::save( $check_notify ); // TODO: Change the autogenerated stub
            $this->crear_relaciones();

            $this->establecer_primer_presupuesto();

            return $aux;
        } else {
            $this->redireccionar( Veta_Presupuesto::RECIBOCREADONOPRESUPUESTO , $this->id );
        }
    }

    /**
     * Este metodo crea las relaciones entre el presupuesto con los estudiantes y prospectos usando el requerimiento que genera el presupuesto
     */
    private function crear_relaciones()
    {
        $requirements = $this->get_linked_beans( 'veta_requerimiento_veta_presupuesto', 'Veta_Requerimiento' );

        foreach ( $requirements as $req ) {

            $leads = $req->get_linked_beans( 'veta_requerimiento_leads', 'Leads' );

            foreach ( $leads as $l ) {

                $l->load_relationship( 'veta_presupuesto_leads' );
                $l->veta_presupuesto_leads->add( $this->id );
            }

            $contacts = $req->get_linked_beans( 'veta_requerimiento_contacts', 'Contacts' );

            foreach ( $contacts as $c ) {

                $c->load_relationship( 'veta_presupuesto_contacts' );
                $c->veta_presupuesto_contacts->add( $this->id );
            }
        }
    }

    /**
     * Este metodo establece la fecha del primer presupuesto en caso de que este presupuesto sea el primero del requerimiento
     */
    private function establecer_primer_presupuesto()
    {
        if ( $_REQUEST[ "relate_to" ] == 'veta_requerimiento_veta_presupuesto' ) {

            $requerimiento = new Veta_Requerimiento();
            $requerimiento->retrieve( $_REQUEST[ "relate_id" ] );

            $presupuestos = $requerimiento->get_linked_beans( 'veta_requerimiento_veta_presupuesto',
                'Veta_Presupuesto' );

            if ( count( $presupuestos ) == 1 and empty( $requerimiento->fecha_primer_presupuesto ) ) {

                if ( $presupuestos[ 0 ]->id == $this->id ) {
                    $result = $this->db->query( "UPDATE veta_requerimiento SET fecha_primer_presupuesto = (SELECT date_entered FROM veta_presupuesto WHERE id = '" . $this->id . "') WHERE id = '" . $requerimiento->id . "'",
                        true, "Error actualizando la fecha del primer presupuesto del requerimiento" );
                }
            }
        }
    }

    public function mark_deleted( $id )
    {
        $p = new Veta_Presupuesto();
        $p->retrieve( $id );

        $recibos = $p->get_linked_beans( 'veta_recibo_veta_presupuesto', 'Veta_Recibo' );

        if ( count( $recibos ) == 0 ) {
            parent::mark_deleted( $id ); // TODO: Change the autogenerated stub
        } else {
            $this->redireccionar( Veta_DetallePresupuesto::RECIBOCREADONOPRESUPUESTO , $p->id );
        }

    }


    /**
     * Este metodo actualiza los totales usando los detalles asociados al presupuesto
     */
    public function update_totals()
    {
        $this->primer_pago = 0;
        $this->subtotal    = 0;
        $this->gran_total  = 0;

        $dets = $this->get_linked_beans( 'veta_detallepresupuesto_veta_presupuesto', 'Veta_DetallePresupuesto' );

        foreach ( $dets as $d ) {

            $this->primer_pago += ( $d->deposito * 1 ) - ( $d->bono * 1 );
            $this->subtotal    += ( $d->total_curso * 1 );
        }

        $this->primer_pago += ( $this->examen_medico * 1 ) + ( $this->seguro * 1 ) + ( $this->total_visa * 1 );

        $trm = new Veta_TRM();
        $trm = $trm->get_trm();

        $this->gran_total = $this->subtotal + ( $this->total_visa * 1 ) + ( $this->examen_medico * 1 ) + ( $this->seguro * 1 ) - ( $this->descuento * 1 );
        $this->usd        = $this->gran_total * $trm->aud;
        $this->pesos      = $this->usd * $trm->pesos * 1;
        $this->mxn        = $this->usd * $trm->mxn * 1;
        $this->clp        = $this->usd * $trm->clp * 1;

        $this->aud_usd = $trm->aud;
        $this->usd_cop = $trm->pesos;
        $this->usd_mxn = $trm->mxn;
        $this->usd_clp = $trm->clp;

        parent::save( false );
    }

    /**
     * Muestra un mensaje de error en pantalla
     * @param $msg Es el mensaje a mostrar
     * @param $registro Es el registro que contiene el error
     */
    public function redireccionar( $msg, $registro )
    {
        if ( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Presupuesto&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        } else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        //exit;
        sugar_die($msg);
    }

}