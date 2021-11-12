<?php


class Veta_RequerimientoController extends SugarController
{

    public function action_editview()
    {

        $this->view = 'new';
        
        if(!empty($this->bean->id)){
            $this->view = 'edit';
        }
    }



}
