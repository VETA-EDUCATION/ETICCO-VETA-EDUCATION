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
class delDocumentoSolicitadoClass {
    
    function delDocumentoSolicitado($bean, $event, $arguments){
            
        $idProceso = $arguments['related_id'];
		$idPlantilla = $arguments['id'];
		
		$GLOBALS['log']-> error("el total es ".$idProceso);   
		$GLOBALS['log']-> error("Plantilla".$id);

        $sql = "select * from doc_plantillas_doc_documentos_c dpddc 
where dpddc.doc_plantillas_doc_documentosdoc_plantillas_ida ='".$idPlantilla."'";

        $result = $GLOBALS['db']->query($sql);

        while($row = $GLOBALS['db']->fetchByAssoc($result) )
        {
            		
			//Use $row['id'] to grab the id fields value
            $idDocumento = $row['doc_plantillas_doc_documentosdoc_documentos_idb'];
            $GLOBALS['log']-> error("Primero".$idDocumento);
            $sqlDocsSolicitados = "select ddddc.* from doc_docssolicitados_doc_documentos_c ddddc , doc_docssolicitados_opportunities_c ddoc 
where ddddc.doc_docssolicitados_doc_documentosdoc_documentos_idb = '".$idDocumento."' and ddddc.doc_docssolicitados_doc_documentosdoc_docssolicitados_ida = ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb
and ddoc.doc_docssolicitados_opportunitiesopportunities_ida ='".$idProceso."'";


            
            $resultDocsSolicitados = $GLOBALS['db']->query($sqlDocsSolicitados);
            
            while($rowDocsSolicitados = $GLOBALS['db']->fetchByAssoc($resultDocsSolicitados) )
            {
                
				$idDocSolicitado = $rowDocsSolicitados['doc_docssolicitados_doc_documentosdoc_docssolicitados_ida'];
                $GLOBALS['log']-> error("Segundo".$idDocSolicitado);
				    $queryInsert = "UPDATE doc_docssolicitados docsol set deleted=1 where docsol.id= '".$idDocSolicitado."'";
                    $GLOBALS['db']->query($queryInsert);
                    
                    $queryInsertDocOpp = "UPDATE doc_docssolicitados_opportunities_c set deleted = 1 where doc_docssolicitados_opportunitiesdoc_docssolicitados_idb ='".$idDocSolicitado."'";
                    $GLOBALS['db']->query($queryInsertDocOpp);
                    
                    $queryInsertDocsDocs = "UPDATE doc_docssolicitados_doc_documentos_c set deleted = 1 where doc_docssolicitados_doc_documentosdoc_docssolicitados_ida ='".$idDocSolicitado."'";
                    $GLOBALS['db']->query($queryInsertDocsDocs);
                                    
                
                
            }
        }    
        
    }
    
    
}
?>