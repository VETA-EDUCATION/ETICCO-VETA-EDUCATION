<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*
 * Copyright 2014 BoredWookie
 *
 * Special thanks to this guy: http://cheleguanaco.blogspot.de/2009/06/simple-sugarcrm-logic-hook-example.html
 *
 * License: MIT
 * Disclaimer: For educational purposes, be sure you know what you are doing!
 */

// This class deals with attaching a URL to the case so the agent can generate a work agreement
class addEstadoClass {
    
    function addEstado($bean, $event, $arguments){
            
        $idDocumento = $bean->id;

	if ($bean->fetched_row == false) {
        
        	$sqlUpdate = "UPDATE doc_documentos_adic set estadodocumento = 'Pendiente' where id='".$idDocumento."'";

        	$GLOBALS['db']->query($sqlUpdate);
	}        
    }
}
?>