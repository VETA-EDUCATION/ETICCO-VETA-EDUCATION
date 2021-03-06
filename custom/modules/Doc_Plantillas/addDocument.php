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
class addDocumentoSolicitadoClass {
    
    function addDocumentoSolicitado($bean, $event, $arguments){
            $GLOBALS['log']-> error("estamos en 1"); 
        $idProceso = $arguments['related_id'];
	$idPlantilla = $arguments['id'];


        
            //Use $row['id'] to grab the id fields value
            
            $sqlPlantilla = "SELECT * FROM doc_plantillas_doc_documentos_c WHERE deleted = 0 and doc_plantillas_doc_documentosdoc_plantillas_ida = '".$idPlantilla."'";
            
            $resultPlantillas = $GLOBALS['db']->query($sqlPlantilla);
            
            while($rowPlantilla = $GLOBALS['db']->fetchByAssoc($resultPlantillas) )
            {

                $idDocumento = $rowPlantilla['doc_plantillas_doc_documentosdoc_documentos_idb'];
                //Consulta el documento por ID Documento
                $sqlDocumentos = "SELECT * FROM doc_documentos WHERE id = '".$idDocumento."'";
                //Verifica si el documento ya está asociado a esta oportunidad
                $queryConsultaDoc = "SELECT count(*) as total FROM doc_docssolicitados_doc_documentos_c,
		doc_docssolicitados_opportunities_c ddoc WHERE 
		doc_docssolicitados_doc_documentos_c.deleted = 0 and ddoc.deleted =0
		and doc_docssolicitados_doc_documentosdoc_documentos_idb='".$idDocumento."' 
		and ddoc.doc_docssolicitados_opportunitiesopportunities_ida ='".$idProceso."' 
		and doc_docssolicitados_doc_documentosdoc_docssolicitados_ida = ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb";
                
                $resultQueryConsultaDoc =$GLOBALS['db']->query($queryConsultaDoc);
                
                $row = $GLOBALS['db']->fetchByAssoc($resultQueryConsultaDoc);

                $total = $row['total'];

    
                if($total == 0 || $total == "0"){
                
                $resultDocumentos = $GLOBALS['db']->query($sqlDocumentos);
                
                while($rowDocumento = $GLOBALS['db']->fetchByAssoc($resultDocumentos) )
                {
            $GLOBALS['log']-> error("estamos en 4"); 
                    $idDocsolicitado = '';
                    $idDocsOpp = '';
                    $idDocsDocs = '';
                    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz----';
                    $max = strlen($pattern)-1;
                    for($i=0;$i < 36;$i++) $idDocsolicitado .= $pattern{mt_rand(0,$max)};
                    for($i=0;$i < 36;$i++) $idDocsOpp .= $pattern{mt_rand(0,$max)};
                    for($i=0;$i < 36;$i++) $idDocsDocs .= $pattern{mt_rand(0,$max)};
    
                    $nombre = $rowDocumento['name'];
					$GLOBALS['log']-> info("el nombre es ".$nombre); 
                    $queryInsert = "INSERT INTO doc_docssolicitados (id,name,estadodocumento) VALUES ('".$idDocsolicitado."','".$nombre."','Pendiente')";
                    $GLOBALS['db']->query($queryInsert);
                    
                    $queryInsertDocOpp = "INSERT INTO doc_docssolicitados_opportunities_c (id,doc_docssolicitados_opportunitiesopportunities_ida,doc_docssolicitados_opportunitiesdoc_docssolicitados_idb) VALUES ('".$idDocsOpp."','".$idProceso."','".$idDocsolicitado."')";
                    $GLOBALS['db']->query($queryInsertDocOpp);
                    
                    $queryInsertDocsDocs = "INSERT INTO doc_docssolicitados_doc_documentos_c (id,doc_docssolicitados_doc_documentosdoc_documentos_idb,doc_docssolicitados_doc_documentosdoc_docssolicitados_ida) VALUES ('".$idDocsDocs."','".$idDocumento."','".$idDocsolicitado."')";
                    $GLOBALS['db']->query($queryInsertDocsDocs);
                                    
                }
                }
            }
            
        
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