<?php

require_once( 'include/MVC/View/views/view.edit.php' );
require_once( 'modules/Veta_Recibo/Veta_Recibo.php' );

class Veta_DetalleReciboViewEdit extends ViewEdit
{

    function preDisplay() {

        $r = new Veta_Recibo();

        if( ! $r->is_gerente_contable() ) {
            $recibos = $this->bean->get_linked_beans( 'veta_detallerecibo_veta_recibo' , 'Veta_Recibo' );

            foreach( $recibos as $reb ) {
                $r = $reb;
            }

            $r->redireccionar( 'Solo un gerente contable puede editar un recibo' , $r->id );
        }
        else {

            parent::preDisplay(); // TODO: Change the autogenerated stub
        }


    }


}