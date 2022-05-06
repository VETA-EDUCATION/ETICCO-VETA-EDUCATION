<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class delDocumentoSolicitadoClass {
    
    function delDocumentoSolicitado($bean, $event, $arguments){
            
        $idProceso = $arguments['related_id'];
		$idPlantilla = $arguments['id'];
		
		$GLOBALS['log']-> error("el total es ".$idProceso);   
		$GLOBALS['log']-> error("Plantilla".$id);

        //Se obtienen los documentos solicitados por plantilla y oportunidad
        
        $sql = "select dddpc.id,ddoc.doc_docssolicitados_opportunitiesdoc_docssolicitados_idb from doc_docssolicitados_doc_plantillas_c dddpc 
                inner join doc_docssolicitados_opportunities_c ddoc on dddpc.doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida = ddoc.id and ddoc.doc_docssolicitados_opportunitiesopportunities_ida = '".$idProceso."'
                where dddpc.doc_docssolicitados_doc_plantillasdoc_plantillas_idb ='".$idPlantilla."'"; 
        
        $result = $GLOBALS['db']->query($sql);
        
        while($row = $GLOBALS['db']->fetchByAssoc($result) )
        {
            $idDocSolicitado = $row['doc_docssolicitados_opportunitiesdoc_docssolicitados_idb'];
				
                $GLOBALS['log']-> error("Segundo".$idDocSolicitado);
				$queryInsert = "UPDATE doc_docssolicitados docsol set deleted=1 where docsol.id= '".$idDocSolicitado."'";
                $GLOBALS['db']->query($queryInsert);
                    
                $queryInsertDocOpp = "UPDATE doc_docssolicitados_opportunities_c set deleted = 1 where doc_docssolicitados_opportunitiesdoc_docssolicitados_idb ='".$idDocSolicitado."'";
                $GLOBALS['db']->query($queryInsertDocOpp);
                    
                $queryInsertDocsDocs = "UPDATE doc_docssolicitados_doc_documentos_c set deleted = 1 where doc_docssolicitados_doc_documentosdoc_docssolicitados_ida ='".$idDocSolicitado."'";
                $GLOBALS['db']->query($queryInsertDocsDocs);
                
                $queryInsertDocsDocs = "UPDATE doc_docssolicitados_doc_documentos_c set deleted = 1 where doc_docssolicitados_doc_documentosdoc_docssolicitados_ida ='".$idDocSolicitado."'";
                $GLOBALS['db']->query($queryInsertDocsDocs);
                
                $queryUpdDocsPlan = "update doc_docssolicitados_doc_plantillas_c set deleted = 1 where id = '".$row['id']."'";
                $GLOBALS['db']->query($queryUpdDocsPlan);
            
            
        }
        /*
        
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
        
    */
    }
    
    
}
?>