<?php

require_once( 'modules/Veta_Curso/Veta_Curso.php' );

function salvar_cursos( $cursos ) {

    $error = null;

    if( ! isset( $cursos ) or empty( $cursos ) ) {
        $error = "No se encontraron cursos";
    }

    if( $error == null ) {
        //$aux =  error_log($cursos, 3, "/tmp/cursos.log");
        if(file_put_contents("cursos.txt",json_encode($cursos)) != FALSE )
            show_msg( 1 , 'OK' );
        else
            show_msg( -1 , "No se pudo crear el archivo" );
    }
    else
        show_msg( -1 , $error );
}

function existe_relacion( PDS_ImagenFP $i , $efp_id ) {

    $existe = false;
    $estudios = $i->get_linked_beans( 'pds_imagenfp_pds_estudiofisiopodal' , 'PDS_EstudioFisioPodal' );

    foreach( $estudios as $e ) {
        if( $e->id == $efp_id )
            $existe = true;
    }

    return $existe;
}

function show_msg( $code , $msg ) {
    $arr = array( 'number' => $code , 'rta' => $msg );

    $json = json_encode( $arr );

    header( 'Content-Type: application/json' );
    header( 'Content-Length: ' . strlen( $json ) );

    echo $json;
}

$body = json_decode(file_get_contents( 'php://input' ));
salvar_cursos( $body->cursos );

//$curso = new Veta_Curso();
//$curso->procesar_cursos();