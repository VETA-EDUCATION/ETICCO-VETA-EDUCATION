<?php

require_once( 'include/MVC/View/views/view.edit.php' );
require_once ('modules/Veta_Curso/Veta_Curso.php');

class Veta_CursoViewImportar extends ViewEdit
{
    function __construct() {
        parent::__construct();
    }

    function display() {

        global $sugar_config;

        if( ! isset( $_REQUEST[ 'importar' ] ) ) {

            if( file_exists( "cursos.txt" ) ) {

                $this->ss->assign( 'IMPORTAR' , 1 );
            }
            else {

                $this->ss->assign( 'IMPORTAR' , 0 );
            }
        }
        else {

            $curso = new Veta_Curso();
            $curso->procesar_cursos();
            $this->ss->assign( 'IMPORTAR' , 2 );
        }


        $this->ss->display( 'modules/Veta_Curso/tpls/importar.tpl' );
    }


}

?>