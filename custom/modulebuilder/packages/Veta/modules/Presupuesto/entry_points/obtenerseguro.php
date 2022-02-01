<?php

include_once( 'modules/Leads/Lead.php' );

$sid        = $_REQUEST[ 'sid' ]; // Id de sesion
$asegurador = $_REQUEST[ 'asegurador' ];
$tipo       = $_REQUEST[ 'tipo' ];
$duracion   = $_REQUEST[ 'duracion' ];

// Verificamos que exista la sesion
//if( file_exists( ini_get( "session.save_path" ) . "/sess_$sid" ) ) {
$seguro = 0;
global $app_list_strings;

$l = new Lead();

$q   = "select id, single, couple, family from veta_seguro where name = '" . trim($asegurador) . "' and duracion = " . $duracion . " and deleted = 0 order by date_entered desc";

//echo $q;

$res = $l->db->query( $q , true , "Error obteniendo las campañas : " );

while( $row = $l->db->fetchByAssoc( $res ) ) {

    if( $tipo == 'single' )
        $seguro = $row[ 'single' ];

    if( $tipo == 'couple' )
        $seguro = $row[ 'couple' ];

    if( $tipo == 'family' )
        $seguro = $row[ 'family' ];
}


show_msg( format_number($seguro) );


function show_msg($data)
{
    $json = json_encode($data);

    header('Content-Type: application/json');
    header('Content-Length: '. strlen($json));

    echo $json;
}
?>