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
        $userid = $bean->assigned_user_id;
        $GLOBALS['log']-> error("El id del bean es ".$bean->assigned_user_id); 
        
        $queryUser = "SELECT * FROM users where id= '".$userid."'";
        $result = $GLOBALS['db']->query($queryUser);
        
        while($row = $GLOBALS['db']->fetchByAssoc($result) )
        {
            $nombre = $row['first_name']." ".$row['last_name'];
        
            $queryUpdate = "UPDATE doc_comentarios set description='".$nombre."' where id= '".$bean->id."'";
        
            $GLOBALS['db']->query($queryUpdate);
                    
        }
        
        
        
/*
        $sql = "SELECT * FROM lrv_plantillaslrv_opportunities_c WHERE lrv_plantillaslrv_opportunitiesopportunities_idb = '".$idProceso."'";

        $result = $GLOBALS['db']->query($sql);

        while($row = $GLOBALS['db']->fetchByAssoc($result) )
        {
            //Use $row['id'] to grab the id fields value
            $idPlantilla = $row['lrv_plantillaslrv_opportunitieslrv_plantillaslrv_ida'];
            
            $sqlPlantilla = "SELECT * FROM lrv_plantillaslrv_lrv_documentoslrv_c WHERE lrv_plantillaslrv_lrv_documentoslrvlrv_plantillaslrv_ida = '".$idPlantilla."'";
            
            $resultPlantillas = $GLOBALS['db']->query($sqlPlantilla);
            
            while($rowPlantilla = $GLOBALS['db']->fetchByAssoc($resultPlantillas) )
            {
                $idDocumento = $rowPlantilla['lrv_plantillaslrv_lrv_documentoslrvlrv_documentoslrv_idb'];
                //Consulta el documento por ID Documento
                $sqlDocumentos = "SELECT * FROM lrv_documentoslrv WHERE id = '".$idDocumento."'";
                
                $queryConsultaDoc = "SELECT count(*) as total FROM lrv_docssolicitados_lrv_documentoslrv_c WHERE lrv_docssolicitados_lrv_documentoslrvlrv_documentoslrv_idb='".$idDocumento."'";
                
                $resultQueryConsultaDoc =$GLOBALS['db']->query($queryConsultaDoc);
                
                $row = $GLOBALS['db']->fetchByAssoc($resultQueryConsultaDoc);

                $total = $row['total'];
    $GLOBALS['log']-> info("el total es ".$total);   
    
                if($total == 0 || $total == "0"){
                
                $resultDocumentos = $GLOBALS['db']->query($sqlDocumentos);
                
                while($rowDocumento = $GLOBALS['db']->fetchByAssoc($resultDocumentos) )
                {
                    $idDocsolicitado = '';
                    $idDocsOpp = '';
                    $idDocsDocs = '';
                    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz----';
                    $max = strlen($pattern)-1;
                    for($i=0;$i < 36;$i++) $idDocsolicitado .= $pattern{mt_rand(0,$max)};
                    for($i=0;$i < 36;$i++) $idDocsOpp .= $pattern{mt_rand(0,$max)};
                    for($i=0;$i < 36;$i++) $idDocsDocs .= $pattern{mt_rand(0,$max)};
    
                    $nombre = $rowDocumento['name'];
                    $queryInsert = "INSERT INTO lrv_docssolicitados (id,name,estadodocumento) VALUES ('".$idDocsolicitado."','".$nombre."','Pendiente')";
                    $GLOBALS['db']->query($queryInsert);
                    
                    $queryInsertDocOpp = "INSERT INTO lrv_docssolicitados_opportunities_c (id,lrv_docssolicitados_opportunitiesopportunities_ida,lrv_docssolicitados_opportunitieslrv_docssolicitados_idb) VALUES ('".$idDocsOpp."','".$idProceso."','".$idDocsolicitado."')";
                    $GLOBALS['db']->query($queryInsertDocOpp);
                    
                    $queryInsertDocsDocs = "INSERT INTO lrv_docssolicitados_lrv_documentoslrv_c (id,lrv_docssolicitados_lrv_documentoslrvlrv_documentoslrv_idb,lrv_docssolicitados_lrv_documentoslrvlrv_docssolicitados_ida) VALUES ('".$idDocsDocs."','".$idDocumento."','".$idDocsolicitado."')";
                    $GLOBALS['db']->query($queryInsertDocsDocs);
                                    
                }
                }
            }
        }    
    */    
    }
    
    function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz-';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}  
}
?>