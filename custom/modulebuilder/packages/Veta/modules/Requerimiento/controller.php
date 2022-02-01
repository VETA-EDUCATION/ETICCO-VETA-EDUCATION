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

    public function action_newlistview(){
        
        $this->view = 'newlist';
    }

    public function action_createlistview(){

        $this->view = 'createlist';
    }



}
