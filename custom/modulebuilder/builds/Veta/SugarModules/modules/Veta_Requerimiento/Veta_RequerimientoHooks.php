<?php

class Veta_RequerimientoHooks
{
    function procesar( $focus, $event, $args )
    {
        $this->asignar_info( $focus );
        $this->asignar_info_lead( $focus );
        $this->asignar_info_contact( $focus );
    }

    private function asignar_info( $focus )
    {
        $query = "SELECT  
                    asignado.address_city AS OFICINACOMERCIAL                                   
                FROM veta_requerimiento 
                INNER JOIN users asignado ON asignado.id = veta_requerimiento.assigned_user_id AND asignado.deleted = 0 
                 WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del comercial asociado al requerimiento " . $focus->id );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            $focus->soel_oficina_comercial = $row[ 'OFICINACOMERCIAL' ];
        }

        return $focus;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_contact( $focus )
    {
        global $app_list_strings;
        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT contacts.id AS ID, 
                    CONCAT(contacts.first_name, ' ' , contacts.last_name) AS NOMBRE,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO,
                    TRIM(UPPER(asignado.address_city)) AS OFICINA,
                    contacts.phone_home AS TELCASA,
                    contacts.phone_mobile AS CELULAR,
                    contacts.lead_source AS FUENTE,
                    contacts_cstm.pais_c AS PAIS,
                    contacts_cstm.departamento_c AS DEPARTAMENTO,
                    contacts_cstm.ciudad_c AS CIUDAD,     
                    contacts_cstm.fecha_expiracion_visa_c AS FECHAEXPIRACIONVISA,
                    contacts.date_modified AS FECHAMODIFICACION,
                    contacts_cstm.visa_c AS VISA,
                    campaigns.name as CAMPANA                                   
                FROM contacts 
                INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida = contacts.id AND veta_requerimiento_contacts_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb                
                LEFT JOIN users asignado ON asignado.id = contacts.assigned_user_id AND asignado.deleted = 0
                LEFT JOIN campaigns ON campaigns.id = contacts.campaign_id AND campaigns.deleted = 0 
                 WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del contacto asociado al requerimiento " . $focus->id );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            $focus->soel_home_phone_contact            = $row[ 'TELCASA' ];
            $focus->soel_mobile_phone_contact          = $row[ 'CELULAR' ];
            $focus->soel_fuente_contact                = $row[ 'FUENTE' ];
            $focus->soel_pais_contact                  = $row[ 'PAIS' ];
            $focus->soel_departamento_contact          = $row[ 'DEPARTAMENTO' ];
            $focus->soel_ciudad_contact                = $row[ 'CIUDAD' ];
            $focus->soel_fecha_expiracion_visa_contact = $row[ 'FECHAEXPIRACIONVISA' ];
            $focus->soel_asignado_contact              = $row[ 'ASIGNADO' ];
            $focus->soel_fecha_modificacion_contact    = $row[ 'FECHAMODIFICACION' ];
            $focus->soel_visa_contact                  = $row[ 'VISA' ];
            $focus->soel_campana_contact               = $row[ 'CAMPANA' ];
        }

        return $focus;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_lead( $focus )
    {
        global $app_list_strings;
        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT leads.id AS ID, 
                    CONCAT(leads.first_name, ' ' , leads.last_name) AS NOMBRE,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO,
                    TRIM(UPPER(asignado.address_city)) AS OFICINA,
                    leads.phone_home as TELCASA,
                    leads.phone_mobile as CELULAR,
                    leads_cstm.fecha_expiracion_visa_c AS FECHAEXPIRACIONVISA,
                    leads.date_modified AS FECHAMODIFICACION,
                    leads.status AS ESTADO,
                    leads.lead_source AS FUENTE,
                    leads_cstm.pais_c AS PAIS,
                    leads_cstm.departamento_c AS DPTO,
                    leads_cstm.ciudad_c AS CIUDAD,
                    leads_cstm.visa_c AS VISA,
                    campaigns.name as CAMPANA                    
                FROM leads 
                INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida = leads.id AND veta_requerimiento_leads_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb                
                LEFT JOIN users asignado ON asignado.id = leads.assigned_user_id AND asignado.deleted = 0
                LEFT JOIN campaigns ON campaigns.id = leads.campaign_id AND campaigns.deleted = 0 
                WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del prospecto asociado al requerimiento " . $focus->id );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            $focus->soel_home_phone_lead            = $row[ 'TELCASA' ];
            $focus->soel_mobile_phone_lead          = $row[ 'CELULAR' ];
            $focus->soel_fecha_expiracion_visa_lead = substr( $row[ 'FECHAEXPIRACIONVISA' ], 0, 10 );
            $focus->soel_fecha_modificacion_lead    = substr( $row[ 'FECHAMODIFICACION' ], 0, 10 );
            $focus->soel_estado_lead                = $row[ 'ESTADO' ];
            $focus->soel_fuente_lead                = $row[ 'FUENTE' ];
            $focus->soel_pais_lead                  = $row[ 'PAIS' ];
            $focus->soel_departamento_lead          = $departamentos[ $row[ 'DPTO' ] ];
            $focus->soel_ciudad_lead                = $ciudades[ $row[ 'CIUDAD' ] ];
            $focus->soel_visa_lead                  = $row[ 'VISA' ];
            $focus->soel_asignado_lead              = $row[ 'ASIGNADO' ];
            $focus->soel_campana_lead               = $row[ 'CAMPANA' ];
        }

        return $focus;
    }

}