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
            "Error obteniendo informacion del comercial asociado al requerimiento " . $focus->id
        );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {

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
        global $app_list_strings, $current_user;
        $dateformat    = $current_user->getPreference( 'datef' );
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
                    contacts_cstm.carrera_universitaria_c AS CARRERAUNIVERSITARIA,
                    contacts_cstm.trabajo_actual_c AS TRABAJOACTUAL,
                    campaigns.name as CAMPANA                                   
                FROM contacts 
                INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida = contacts.id AND veta_requerimiento_contacts_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb                
                LEFT JOIN users asignado ON asignado.id = contacts.assigned_user_id AND asignado.deleted = 0
                LEFT JOIN campaigns ON campaigns.id = contacts.campaign_id AND campaigns.deleted = 0 
                 WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del contacto asociado al requerimiento " . $focus->id
        );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {

            $focus->soel_home_phone_contact    = $row[ 'TELCASA' ];
            $focus->soel_mobile_phone_contact  = $row[ 'CELULAR' ];
            $focus->soel_fuente_contact        = $row[ 'FUENTE' ];
            $focus->soel_pais_contact          = $row[ 'PAIS' ];
            $focus->soel_departamento_contact  = $row[ 'DEPARTAMENTO' ];
            $focus->soel_ciudad_contact        = $row[ 'CIUDAD' ];
            $focus->soel_carrera_universitaria = $row[ 'CARRERAUNIVERSITARIA' ];
            $focus->soel_trabajo_actual        = $row[ 'TRABAJOACTUAL' ];

            if ( ! empty($row[ 'FECHAEXPIRACIONVISA' ]) )
            {
                $aux                                       = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
                $focus->soel_fecha_expiracion_visa_contact = date_format( $aux, $dateformat );
            }

            $focus->soel_asignado_contact = $row[ 'ASIGNADO' ];

            if( ! empty($row[ 'FECHAMODIFICACION' ])){
                $aux2                                   = date_create( $row[ 'FECHAMODIFICACION' ] );
                $focus->soel_fecha_modificacion_contact = date_format( $aux2, $dateformat );
            }

            $focus->soel_visa_contact    = $row[ 'VISA' ];
            $focus->soel_campana_contact = $row[ 'CAMPANA' ];
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
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT leads.id AS ID, 
                    CONCAT(leads.first_name, ' ' , leads.last_name) AS NOMBRE,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO,
                    TRIM(UPPER(asignado.address_city)) AS OFICINA,
                    leads.phone_home as TELCASA,
                    leads.phone_mobile as CELULAR,
                    leads_cstm.fecha_expiracion_visa_c AS FECHAEXPIRACIONVISA,
                    leads_cstm.expiracion_visa_c AS FECHAEXPIRACIONVISATEXTO,
                    leads_cstm.edad_c AS EDAD,
                    leads.date_modified AS FECHAMODIFICACION,
                    if(leads.converted = 1, \"YES\", \"NO\" )AS CONVERTIDO,
                    leads.status AS ESTADO,
                    leads.lead_source AS FUENTE,
                    leads_cstm.pais_c AS PAIS,
                    leads_cstm.departamento_c AS DPTO,
                    leads_cstm.ciudad_c AS CIUDAD,
                    leads_cstm.visa_c AS VISA,
                    leads_cstm.pasaporte_c AS PASAPORTE,
                    leads_cstm.ciudad_tmp_c AS CIUDADTMP,
                    leads_cstm.carrera_universitaria_c AS CARRERAUNIVERSITARIA,
                    leads_cstm.trabajo_actual_c AS TRABAJOACTUAL,
                    campaigns.name as CAMPANA                    
                FROM leads 
                INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida = leads.id AND veta_requerimiento_leads_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb                
                LEFT JOIN users asignado ON asignado.id = leads.assigned_user_id AND asignado.deleted = 0
                LEFT JOIN campaigns ON campaigns.id = leads.campaign_id AND campaigns.deleted = 0 
                WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.id = '" . $focus->id . "'";

        //error_log($query . PHP_EOL,3,"error_tmp");

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del prospecto asociado al requerimiento " . $focus->id
        );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $focus->soel_home_phone_lead       = $row[ 'TELCASA' ];
            $focus->soel_mobile_phone_lead     = $row[ 'CELULAR' ];
            $focus->soel_ciudad_tmp            = $row[ 'CIUDADTMP' ];
            $focus->soel_carrera_universitaria = $row[ 'CARRERAUNIVERSITARIA' ];
            $focus->soel_trabajo_actual        = $row[ 'TRABAJOACTUAL' ];

            if ( ! empty( $row[ 'FECHAEXPIRACIONVISA' ] ) )
            {
                $aux                                    = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
                $focus->soel_fecha_expiracion_visa_lead = date_format( $aux, $dateformat );
            }


            if ( ! empty( $row[ 'FECHAMODIFICACION' ] ) )
            {
                $aux2                                = date_create( $row[ 'FECHAMODIFICACION' ] );
                $focus->soel_fecha_modificacion_lead = date_format( $aux2, $dateformat );
            }

            $focus->soel_estado_lead                      = $row[ 'ESTADO' ];
            $focus->soel_fuente_lead                      = $row[ 'FUENTE' ];
            $focus->soel_pais_lead                        = $row[ 'PAIS' ];
            $focus->soel_departamento_lead                = $departamentos[ $row[ 'DPTO' ] ];
            $focus->soel_ciudad_lead                      = $ciudades[ $row[ 'CIUDAD' ] ];
            $focus->soel_visa_lead                        = $row[ 'VISA' ];
            $focus->soel_asignado_lead                    = $row[ 'ASIGNADO' ];
            $focus->soel_campana_lead                     = $row[ 'CAMPANA' ];
            $focus->soel_pasaporte_lead                   = $row[ 'PASAPORTE' ];
            $focus->soel_fecha_expiracion_visa_texto_lead = $row[ 'FECHAEXPIRACIONVISATEXTO' ];
            $focus->soel_edad_lead                        = $row[ 'EDAD' ];
            $focus->soel_convertido_lead                  = $row[ 'CONVERTIDO' ];
        }

        return $focus;
    }

}