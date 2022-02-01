<?php

require_once( 'include/MVC/View/views/view.edit.php' );
require_once( 'modules/Veta_Recibo/Veta_Recibo.php' );

class Veta_ReciboViewEdit extends ViewEdit
{

    function preDisplay2()
    {
        $r = new Veta_Recibo();

        if ( ! $r->is_gerente_contable() )
            $r->redireccionar( 'Solo un gerente contable puede editar un recibo', $this->bean->id );
        else
            parent::preDisplay(); // TODO: Change the autogenerated stub

    }
}