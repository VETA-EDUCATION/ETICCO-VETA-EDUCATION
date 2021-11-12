<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

set_time_limit( 300000 );
require_once( 'modules/Veta_Requerimiento/Veta_Requerimiento.php' );

$error    = false;
$msgError = null;

function obtener_ids()
{
    $ids = array();
    if ( isset( $_REQUEST[ 'select_entire_list' ] ) and $_REQUEST[ 'select_entire_list' ] == '1' )
    {
        $db     = DBManagerFactory::getInstance();
        $result = $db->query( $_SESSION[ "Veta_Requerimiento2_QUERY" ], true );

        while ( $row = $db->fetchByAssoc( $result ) )
        {
            array_push( $ids, $row[ 'id' ] );
        }

    }
    else
    {

        $ids = explode( ',', $_REQUEST[ "uid" ] );
    }

    return $ids;
}

$publicoObjetivo            = new ProspectList();
$publicoObjetivo->list_type = 'default';
$publicoObjetivo->name      = 'Publico objetivo Requerimientos ';

$publicoObjetivo->save();

$ids = obtener_ids();

foreach ( $ids as $id )
{
    $requerimiento = new Veta_Requerimiento();
    $requerimiento->retrieve( $id );

    $leads = $requerimiento->get_linked_beans( 'veta_requerimiento_leads', 'Leads' );

    if ( count( $leads ) > 0 )
    {
        $publicoObjetivo->load_relationship( 'leads' );
        $publicoObjetivo->leads->add( $leads[0]->id );
    }
    else
    {
        $contacts = $requerimiento->get_linked_beans( 'veta_requerimiento_contacts', 'Contacts' );

        if(count($contacts) > 0){
            $publicoObjetivo->load_relationship( 'contacts' );
            $publicoObjetivo->contacts->add( $contacts[0]->id );
        }
    }


}

$aux = "<script>
                      var registro='" . $publicoObjetivo->id . "';";

$aux .= "alert('Lista de público objetivo creada, seras redireccionado a esta lista');
                    window.location = 'index.php?module=ProspectLists&action=DetailView&record=' + registro;
                 </script>";

echo $aux;




