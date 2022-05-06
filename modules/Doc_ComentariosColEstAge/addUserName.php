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
class addUserNameClass {
    
    function addUserName($bean, $event, $arguments){
            
        $idProceso = $arguments['related_id'];
        
        $bean->retrieve($bean->id);
        $userid = $bean->created_by;
        $GLOBALS['log']-> error("El id del bean es ".$bean->created_by); 
        
        $queryUser = "SELECT * FROM users where id= '".$userid."'";
        $result = $GLOBALS['db']->query($queryUser);
        
        while($row = $GLOBALS['db']->fetchByAssoc($result) )
        {
            $nombre = $row['first_name']." ".$row['last_name'];
        $GLOBALS['log']-> error("El nombre es ".$nombre);     
        $GLOBALS['log']-> error("El id del bean es ".$nombre);
        
            $queryUpdate = "UPDATE doc_comentarioscolestage set name='".$nombre."' where id= '".$bean->id."'";
        
            $GLOBALS['db']->query($queryUpdate);
                    
        }
        
        
     
    }
    
    
}  

?>