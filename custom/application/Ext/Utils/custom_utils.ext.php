<?php 
 //WARNING: The contents of this file are auto-generated



function soel_fprueba2( $param )
{

    global $app_list_strings;
    $options = $app_list_strings[ 'lead_source_dom' ];
    return $options;
}

function getAsignadoLeads()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT id,CONCAT(first_name , ' ' , last_name, ' (' ,  user_name  , ')') AS name  FROM users WHERE deleted = 0 ORDER BY name ASC ";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {
            $listvalues[ $row[ 'id' ] ] = $row[ 'name' ];
        }
    }
    return $listvalues;
}

function getCampanaLeads()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT id, name  FROM campaigns WHERE deleted = 0 ORDER BY name ASC ";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {
            $listvalues[ $row[ 'id' ] ] = $row[ 'name' ];
        }
    }
    return $listvalues;
}

function getOficinasComercial()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT DISTINCT users.address_city AS id , users.address_city AS name
                            FROM users
                            WHERE deleted = 0 AND users.address_city IS NOT NULL
                            ORDER BY users.address_city";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {
            $listvalues[ $row[ 'id' ] ] = $row[ 'name' ];
        }
    }
    return $listvalues;
}

function getAseguradores()
{
    $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT id, name  FROM veta_seguro WHERE deleted = 0 ORDER BY name ASC ";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {
            $listvalues[ $row[ 'id' ] ] = $row[ 'name' ];
        }
    }
    return $listvalues;
}

function getYesNoOptions()
{
    $listvalues        = array();
    $listvalues[ '1' ] = 'Yes';
    $listvalues[ '0' ] = 'No';

    return $listvalues;
}

function getEstadosLoo()
{
    global $app_list_strings;
    return $app_list_strings['estado_loo_list_2'];
}

function getEstadosCOE()
{
    global $app_list_strings;
    return $app_list_strings['coe_estado_list'];
}


?>