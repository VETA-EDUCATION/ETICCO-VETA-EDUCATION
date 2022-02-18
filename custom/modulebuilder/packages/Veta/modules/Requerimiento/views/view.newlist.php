<?php

class Veta_RequerimientoViewNewList extends ViewEdit
{
    public function __construct()
    {
        parent::__construct();
    }

    public function display()
    {

        $this->ss->assign( "SELECT_ENTIRE_LIST", $_REQUEST[ 'select_entire_list' ] );
        $this->ss->assign( "UIDS", $_REQUEST[ "uid" ] );
        $this->ss->assign( "LISTAS", $this->get_listas_publico_objetivo() );
        $this->ss->assign( "LISTA_ID", '-o-' );
        //parent::display();

        $this->ss->display( 'modules/Veta_Requerimiento/tpls/newlist.tpl' );
    }

    PRIVATE function get_listas_publico_objetivo() {

        $list = array('-o-' => 'Crear una nueva lista de publico objetivo');
        $r = new Veta_Requerimiento();

        $query = "SELECT id,name FROM prospect_lists WHERE deleted = 0  ORDER BY name DESC";

        $result = $r->db->query( $query , true , "Error obteniendo las listas de publico objetivo : " );

        while( $row = $r->db->fetchByAssoc( $result ) ) {
            $list[$row['id']] = $row['name'];

        }

        return $list;
    }



}
