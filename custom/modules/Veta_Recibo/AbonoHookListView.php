<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class AbonoHookListView {
    
    function verCamposAbono( $focus, $event, $args){
        
          $focus->veta_abono_monto = 0;
           //$GLOBALS['log']-> error("estamos en abonos ww".$focus->doc_plantillas_doc_documentos_name); 
           
        $query = "select va.monto from veta_abono va where va.id = '".$focus->veta_abono_veta_recibo_name."'";
        
        $result = $focus->db->query( $query, true, "Error obteniendo el visto bueno comercial del requerimiento" );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {

            $focus->veta_abono_monto = $row[ 'monto' ];
            
        }    
        
         $focus->veta_abono_monedapago = 0;
           //$GLOBALS['log']-> error("estamos en abonos ww".$focus->doc_plantillas_doc_documentos_name); 
           
        $query = "select vac.monedapago_c from veta_abono_cstm vac where vac.id_c = '".$focus->veta_abono_veta_recibo_name."'";
        
        $result = $focus->db->query( $query, true, "Error obteniendo el visto bueno comercial del requerimiento" );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {

            $focus->veta_abono_monedapago = $row[ 'monedapago_c' ];
            
        }    
        
         $focus->veta_abono_abono = 0;
           //$GLOBALS['log']-> error("estamos en abonos ww".$focus->doc_plantillas_doc_documentos_name); 
           
        $query = "select vac.abono_c from veta_abono_cstm vac where vac.id_c = '".$focus->veta_abono_veta_recibo_name."'";
        
        $result = $focus->db->query( $query, true, "Error obteniendo el visto bueno comercial del requerimiento" );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $focus->veta_abono_abono = $row[ 'abono_c' ];
        }  
        
        $focus->veta_abono_trm = 0;
        //$GLOBALS['log']-> error("estamos en abonos ww".$focus->doc_plantillas_doc_documentos_name); 
           
        if($focus-> veta_abono_monto >0){
            $focus->veta_abono_trm = $focus->veta_abono_abono / $focus-> veta_abono_monto;
        }else{
            $focus->veta_abono_trm = 0;
        }
        
        
        $focus->veta_abono_monedacoleg = 0;
        
        $query = "select vcc.moneda_c  from veta_college_cstm vcc 
            inner join veta_detallerecibo vd on vcc.id_c = vd.veta_college_id_c 
            inner join veta_detallerecibo_veta_recibo_c vdvrc on vd.id = vdvrc.veta_detallerecibo_veta_reciboveta_detallerecibo_idb 
            inner join veta_recibo vr on vdvrc.veta_detallerecibo_veta_reciboveta_recibo_ida = vr.id 
            inner join veta_abono_veta_recibo_c vavrc on vr.id = vavrc.veta_abono_veta_reciboveta_recibo_ida 
            where vavrc.veta_abono_veta_reciboveta_abono_idb = '".$focus->veta_abono_veta_recibo_name."'";
        
        $result = $focus->db->query( $query, true, "Error obteniendo el visto bueno comercial del requerimiento" );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $focus->veta_abono_monedacoleg = $row[ 'moneda_c' ];
        }   
        
         $focus->veta_abono_fechainsert = 0;
           //$GLOBALS['log']-> error("estamos en abonos ww".$focus->doc_plantillas_doc_documentos_name); 
           
        $query = "select va.date_entered from veta_abono va where va.id = '".$focus->veta_abono_veta_recibo_name."'";
        
        $result = $focus->db->query( $query, true, "Error obteniendo el visto bueno comercial del requerimiento" );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {

            $focus->veta_abono_fechainsert = $row[ 'date_entered' ];
            
        }    
    }        
}
?>