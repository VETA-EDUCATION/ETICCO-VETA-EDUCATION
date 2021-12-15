<?php

class SOELAuditoria
{

    function add_boton_observaciones( $focus , $event , $args ) {

        global $app_list_strings;
        $options = $app_list_strings[ 'lead_source_dom' ];

        $modulo                = $focus->table_name;
        $id                    = $focus->id;
        $name                  = $focus->name;
        $loc                   = "index.php?action=observaciones&module=Veta_Recibo&modulo={$modulo}&id={$id}&name={$name}";
        $focus->soel_auditoria = "<a href='{$loc}' target=\"_blank\" style='border:none;' class=\"suitepicon suitepicon-action-view-record\">&nbsp;</a>";

        $this->asignar_oficina($focus);

        
        /*$query  = "SELECT leads.lead_source, leads.date_entered , leads.id, campaigns.name as campana
                    from leads 
                    left join leads_cstm on leads_cstm.id_c = leads.id
                    left join campaigns on campaigns.id = leads_cstm.campaign_id_c and campaigns.deleted = 0 
                    where contact_id = '" . $focus->id . "' and leads.deleted = 0";

        $result = $focus->db->query( $query , true , "Error obteniendo la toma de contacto del prospecto" );
        $row    = $focus->db->fetchByAssoc( $result );

        if( $row != null ) {

            $focus->soel_fuente   = $options[ $row[ 'lead_source' ] ];
            $focus->soel_creacion =  substr($row[ 'date_entered' ],0,10)  ;
            $focus->soel_campana =  $row[ 'campana' ]  ;
        } */


    }

    /**
     * Este metodo asigna la oficina del asesor comercial a un prospecto
     * @param $focus
     */
    private function asignar_oficina($focus){

        $query = "SELECT leads.id AS ID, CONCAT(leads.first_name, ' ' , leads.last_name) AS NOMBRE,CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO_A,TRIM(UPPER(asignado.address_city)) AS OFICINA
                FROM leads INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id LEFT JOIN users asignado ON asignado.id = leads.assigned_user_id
                WHERE leads.deleted = 0 AND leads.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query , true , "Error obteniendo la oficina del comercial asignado a el prospecto" );
        $row    = $focus->db->fetchByAssoc( $result );

        if( $row != null ) {

            $focus->soel_oficina_comercial   = $row[ 'OFICINA' ] ;
        }

        return $focus;
    }
}

