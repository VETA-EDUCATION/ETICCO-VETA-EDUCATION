<?php

require_once( 'include/MVC/View/views/view.edit.php' );
require_once ( 'modules/Veta_Recibo/clases/Auditoria.php');

class Veta_ReciboViewObservaciones extends ViewEdit
{

    function display() {

        global $sugar_config;

        $this->ss->assign( 'MODULE' , $_REQUEST['modulo'] );
        $this->ss->assign( 'ID' ,  $_REQUEST['id'] );
        $this->ss->assign( 'NAME' , $_REQUEST['name'] );
        $this->ss->assign( 'LISTA' , $this->obtener_auditoria($_REQUEST['id'], $_REQUEST['modulo']) );
        $this->ss->assign( 'URL' , $sugar_config['site_url'] );

        $this->ss->display( 'modules/Veta_Recibo/tpls/observaciones.tpl' );
    }


    private function obtener_auditoria($id, $modulo){

        global $timedate;
        $list = array();
        $db = DBManagerFactory::getInstance();

        $sql = "SELECT after_value_text, " . $modulo . "_audit.date_created, CONCAT(users.first_name,' ', users.last_name) AS usuario 
                FROM " . $modulo . "_audit 
                INNER JOIN users ON users.id = " . $modulo . "_audit.created_by
                WHERE field_name = 'description' AND parent_id = '" . $id . "' ORDER BY "  . $modulo . "_audit.date_created DESC";

        $result = $db->query( $sql , true , "Error obteniendo la auditoria" );

        while($row = $db->fetchByAssoc($result))
        {
            $a = new Auditoria();
            $a->fecha = $timedate->to_display_date_time($row['date_created'], 'datetime');

            $a->observaciones = $row['after_value_text'];
            $a->usuario =  $row['usuario'];

            array_push($list, $a);
        }

        return $list;

    }

}