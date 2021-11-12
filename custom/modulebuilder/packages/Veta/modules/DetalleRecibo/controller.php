<?php


class Veta_DetalleReciboController extends SugarController
{

    function action_save() {
        //$this->view = 'send';
        $this->bean->salvar = true;
        $this->bean->save(false);
    }



}
