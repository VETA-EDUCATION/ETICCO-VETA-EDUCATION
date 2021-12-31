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
class modifyUserClass {
    
    function modifyUser($bean, $event, $arguments){
            
        $idProceso = $bean->id;
        $estadonuevo = $bean->estadodocumento;

        $sql = "SELECT * FROM doc_docssolicitados WHERE id = '".$idProceso."'";

        $result = $GLOBALS['db']->query($sql);
        


        while($row = $GLOBALS['db']->fetchByAssoc($result) )
        {
            //Use $row['id'] to grab the id fields value
            $idUserModify = $row['modified_user_id'];
            $sqlUsers = "SELECT * FROM users WHERE id = '".$idUserModify."'";
            
            $resultUsers = $GLOBALS['db']->query($sqlUsers);
            
            while($rowUsers = $GLOBALS['db']->fetchByAssoc($resultUsers) )
            {
                $nombreUser = $rowUsers['first_name'];
                $apellidoUser = $rowUsers['last_name'];
                //Consulta el documento por ID Documento
                $sqlUpdate = "UPDATE doc_docssolicitados set description = '".$nombreUser." ".$apellidoUser."' where id='".$idProceso."'";
                
                $GLOBALS['db']->query($sqlUpdate);
                
                //Update la fecha si es estado aprobado
                if($estadonuevo == "Aprobado"){
                    $fechaaprobado = date('Y-m-d H:i:s');
                    $sqlUpdateAprobado = "UPDATE doc_docssolicitados set fechaaprobado= '".$fechaaprobado."' where id='".$idProceso."'";
                    $GLOBALS['db']->query($sqlUpdateAprobado);
                }    
               
                }
            }
        }    
        
    }
    
?>