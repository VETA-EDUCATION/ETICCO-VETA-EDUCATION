<?php

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
        $query            = "SELECT id, first_name, last_name, user_name  FROM users WHERE deleted = 0 and status = 'Active' ORDER BY first_name ASC ";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {
			$full_name = $row[ 'first_name' ] . " " . $row[ 'last_name' ] ." (". $row[ 'user_name' ].")";
            $listvalues[ $row[ 'id' ] ] = $full_name;
        }
    }
    return $listvalues;
}

function getListCustomerService_Sales()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT us.id,CONCAT(us.first_name , ' ' , us.last_name, ' (' ,  user_name  , ')') AS name  
							FROM 
								users as us,
								users_cstm as us_cstm
							WHERE 
								deleted = 0
								and status = 'Active'								
								and us.id = us_cstm.id_c
								and (
									us_cstm.user_department_c = 'Customer_service' 
                                    or us_cstm.user_department_c = 'Sales') 
								ORDER BY name ASC ";
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

function getListCustomerService()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT us.id,CONCAT(us.first_name , ' ' , us.last_name, ' (' ,  user_name  , ')') AS name  
							FROM 
								users as us,
								users_cstm as us_cstm
							WHERE 
								deleted = 0
								and status = 'Active'								
								and us.id = us_cstm.id_c
								and us_cstm.user_department_c = 'Customer_service' ORDER BY name ASC ";
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

function getListAdmissions()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT us.id, us.first_name , us.last_name, user_name 
							FROM 
								users as us,
								users_cstm as us_cstm
							WHERE 
								deleted = 0 
								and status = 'Active'
								and us.id = us_cstm.id_c
								and us_cstm.user_department_c = 'Admissions' ORDER BY first_name ASC";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {			
			$full_name = $row[ 'first_name' ] . " " . $row[ 'last_name' ] ." (". $row[ 'user_name' ].")";
            $listvalues[ $row[ 'id' ] ] = $full_name;
        }
    }
    return $listvalues;
}

function getListSales()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT us.id, us.first_name , us.last_name, user_name 
							FROM 
								users as us,
								users_cstm as us_cstm
							WHERE 
								deleted = 0 
								and status = 'Active'
								and us.id = us_cstm.id_c
								and us_cstm.user_department_c = 'Sales' ORDER BY first_name ASC";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {			
			$full_name = $row[ 'first_name' ] . " " . $row[ 'last_name' ] ." (". $row[ 'user_name' ].")";
            $listvalues[ $row[ 'id' ] ] = $full_name;
        }
    }
    return $listvalues;
}

function getListVisas()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT us.id, us.first_name , us.last_name, user_name 
							FROM 
								users as us,
								users_cstm as us_cstm
							WHERE 
								deleted = 0 
								and status = 'Active'
								and us.id = us_cstm.id_c
								and us_cstm.user_department_c = 'Visas' ORDER BY first_name ASC";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {			
			$full_name = $row[ 'first_name' ] . " " . $row[ 'last_name' ] ." (". $row[ 'user_name' ].")";
            $listvalues[ $row[ 'id' ] ] = $full_name;
        }
    }
    return $listvalues;
}

function getListAccounting()
{
    static $listvalues = null;

    if ( ! $listvalues )
    {

        global $db;
        $query            = "SELECT us.id, us.first_name , us.last_name, user_name 
							FROM 
								users as us,
								users_cstm as us_cstm
							WHERE 
								deleted = 0 
								and status = 'Active'
								and us.id = us_cstm.id_c
								and us_cstm.user_department_c = 'Accounting' ORDER BY first_name ASC";
        $result           = $db->query( $query, false );
        $listvalues       = array();
        $listvalues[ '' ] = '';

        while ( ( $row = $db->fetchByAssoc( $result ) ) != null )
        {			
			$full_name = $row[ 'first_name' ] . " " . $row[ 'last_name' ] ." (". $row[ 'user_name' ].")";
            $listvalues[ $row[ 'id' ] ] = $full_name;
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

