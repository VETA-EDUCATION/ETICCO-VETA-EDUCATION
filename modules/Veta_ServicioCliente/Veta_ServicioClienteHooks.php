<?php

class Veta_ServicioClienteHooks {

    function procesar( $focus, $event, $args ) {

        $this->asignar_info( $focus );
        $this->asignar_info_lead( $focus );
        //$this->asignar_info_contact( $focus );
    }

    private function asignar_info( $bean ) {

        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $query = "SELECT  
                    veta_requerimiento.referido AS REFERIDO,
                    veta_requerimiento.fecha_viaje AS FECHAVIAJE,
                    opportunities_cstm.limite_luz_verde_c AS FECHALUZVERDE
                FROM veta_serviciocliente
                INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0 
                INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                INNER JOIN opportunities_cstm ON opportunities_cstm.id_c = opportunities.id     
                INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                INNER JOIN veta_requerimiento ON veta_requerimiento.id =  veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida
                 WHERE veta_requerimiento.deleted = 0 AND veta_serviciocliente.deleted = 0 AND veta_serviciocliente.id = '" . $bean->id . "'";

        $result = $bean->db->query( $query, true,
            "Error obteniendo informacion la fecha de viaje del servicio al cliente " . $bean->id
        );

        $row    = $bean->db->fetchByAssoc( $result );

        if ( $row != null ) {
            $bean->soel_referido = $row[ 'REFERIDO' ];

            if (!empty($row['FECHAVIAJE'])){
                $aux                    = date_create( $row[ 'FECHAVIAJE' ] );
                $bean->soel_fecha_viaje = date_format( $aux, $dateformat );
            }

            if (!empty($row['FECHALUZVERDE'])){
                $aux                    = date_create( $row[ 'FECHALUZVERDE' ] );
                $bean->soel_limite_luz_verde = date_format( $aux, $dateformat );
            }

        }

        return $bean;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_contact( $focus ) {
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
                    DATE(contacts_cstm.fecha_expiracion_visa_c) AS FECHAEXPIRACIONVISA,
                    contacts.date_modified AS FECHAMODIFICACION,
                    contacts_cstm.visa_c AS VISA,
                    campaigns.name as CAMPANA                                   
                FROM contacts 
                INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida = contacts.id AND veta_requerimiento_contacts_c.deleted = 0 
                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb 
                INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida = veta_requerimiento.id AND veta_requerimiento_veta_recibo_c.deleted = 0                  
                INNER JOIN veta_recibo ON veta_recibo.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb AND veta_recibo.deleted = 0 
                INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                INNER JOIN opportunities ON opportunities.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb AND opportunities.deleted = 0 
                INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida  = opportunities.id AND veta_serviciocliente_opportunities_c.deleted = 0 
                INNER JOIN veta_serviciocliente ON veta_serviciocliente.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb                 
                LEFT JOIN users asignado ON asignado.id = contacts.assigned_user_id AND asignado.deleted = 0
                LEFT JOIN campaigns ON campaigns.id = contacts.campaign_id AND campaigns.deleted = 0 
                WHERE veta_serviciocliente.deleted = 0 AND veta_serviciocliente.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true, "Error obteniendo informacion del contacto asociado al servicio al cliente " . $focus->id );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            $aux                               = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
            $focus->soel_fecha_expiracion_visa = date_format( $aux, $dateformat );

            /*$focus->soel_home_phone_contact            = $row[ 'TELCASA' ];
            $focus->soel_mobile_phone_contact          = $row[ 'CELULAR' ];
            $focus->soel_fuente_contact                = $row[ 'FUENTE' ];
            $focus->soel_pais_contact                  = $row[ 'PAIS' ];
            $focus->soel_departamento_contact          = $row[ 'DEPARTAMENTO' ];
            $focus->soel_ciudad_contact                = $row[ 'CIUDAD' ];*/
            /*$focus->soel_asignado_contact              = $row[ 'ASIGNADO' ];
            $focus->soel_fecha_modificacion_contact    = $row[ 'FECHAMODIFICACION' ];
            $focus->soel_visa_contact                  = $row[ 'VISA' ];
            $focus->soel_campana_contact               = $row[ 'CAMPANA' ]; */
        }

        return $focus;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_lead( $focus ) {

        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT leads.id AS ID, 
                    CONCAT(leads.first_name, ' ' , leads.last_name) AS NOMBRE,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO,
                    TRIM(UPPER(asignado.address_city)) AS OFICINA,
                    leads.phone_home AS TELCASA,
                    leads.phone_mobile AS CELULAR,
                    leads.lead_source AS FUENTE,
                    leads_cstm.pais_c AS PAIS,
                    leads_cstm.departamento_c AS DEPARTAMENTO,
                    leads_cstm.ciudad_c AS CIUDAD,     
                    leads_cstm.fecha_expiracion_visa_c AS FECHAEXPIRACIONVISA,
                    leads.date_modified AS FECHAMODIFICACION,
                    leads_cstm.visa_c AS VISA                                   
                FROM veta_serviciocliente
                    INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0
                    INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0
                    INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_recibo.deleted = 0
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id AND veta_requerimiento_veta_recibo_c.deleted = 0
                    INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0
                    INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0
                    INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida AND leads.deleted = 0
                    INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                    LEFT JOIN users asignado ON asignado.id = leads.assigned_user_id AND asignado.deleted = 0 
                WHERE veta_serviciocliente.deleted = 0 AND veta_serviciocliente.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true, "Error obteniendo informacion del prospecto asociado al servicio al cliente " . $focus->id );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            if ( ! empty( $row[ 'FECHAEXPIRACIONVISA' ] ) ){
                $aux                               = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
                $focus->soel_fecha_expiracion_visa = date_format( $aux, $dateformat );
            }
        }

        return $focus;
    }
}