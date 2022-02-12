<?php

class Veta_COEHooks
{
    function procesar( &$focus, $event, $args )
    {
        $this->asignar_info( $focus );
        $this->asignar_info_lead( $focus );
        //$this->asignar_info_contact( $focus );
    }

    private function asignar_info( &$bean )
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $query = "SELECT  
                    veta_requerimiento.referido AS REFERIDO,
                    veta_requerimiento.fecha_viaje AS FECHAVIAJE,
                    asignado.address_city AS OFICINACOMERCIAL,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO
                FROM veta_coe
                    INNER JOIN veta_coe_veta_liquidacion_c ON veta_coe_veta_liquidacion_c.veta_coe_veta_liquidacionveta_coe_idb = veta_coe.id AND veta_coe_veta_liquidacion_c.deleted = 0                
                    INNER JOIN veta_liquidacion_veta_loo_c ON veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_liquidacion_idb = veta_coe_veta_liquidacion_c.veta_coe_veta_liquidacionveta_liquidacion_ida AND veta_liquidacion_veta_loo_c.deleted = 0                
                    INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_loo_ida and veta_loo_veta_aplicacion_c.deleted = 0                 
                    INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion_opportunities_c.deleted = 0 
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND veta_recibo_opportunities_c.deleted = 0 
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                    INNER JOIN veta_requerimiento ON veta_requerimiento.id =  veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida
                    LEFT JOIN users asignado ON asignado.id = veta_requerimiento.assigned_user_id AND asignado.deleted = 0
                WHERE veta_requerimiento.deleted = 0 AND veta_coe.deleted = 0 AND veta_coe.id = '" . $bean->id . "'";

        $result = $bean->db->query( $query, true,
            "Error obteniendo informacion la fecha de viaje de la aplicacion " . $bean->id
        );
        $row    = $bean->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            $bean->soel_referido = $row[ 'REFERIDO' ];

            if ( ! empty( $row[ 'FECHAVIAJE' ] ) )
            {
                $aux                    = date_create( $row[ 'FECHAVIAJE' ] );
                $bean->soel_fecha_viaje = date_format( $aux, $dateformat );
            }

            if (!empty($row['OFICINACOMERCIAL'])){
                $bean->soel_oficina_comercial = $row[ 'OFICINACOMERCIAL' ];
            }

            if (!empty($row['ASIGNADO'])){
                $bean->soel_comercial_requerimiento = $row[ 'ASIGNADO' ];
            }
        }

        return $bean;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_contact( &$focus )
    {
        global $app_list_strings, $current_user;
        $dateformat    = $current_user->getPreference( 'datef' );
        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT
                    contacts.id                                          AS ID,
                    CONCAT(contacts.first_name, ' ', contacts.last_name) AS NOMBRE,
                    contacts.phone_home                                  AS TELCASA,
                    contacts.phone_mobile                                AS CELULAR,
                    contacts.lead_source                                 AS FUENTE,
                    contacts_cstm.pais_c                                 AS PAIS,
                    contacts_cstm.departamento_c                         AS DEPARTAMENTO,
                    contacts_cstm.ciudad_c                               AS CIUDAD,
                    contacts_cstm.fecha_expiracion_visa_c                AS FECHAEXPIRACIONVISA,
                    contacts.date_modified                               AS FECHAMODIFICACION,
                    contacts_cstm.visa_c                                 AS VISA
                FROM veta_coe
                         INNER JOIN veta_coe_veta_liquidacion_c ON veta_coe_veta_liquidacion_c.veta_coe_veta_liquidacionveta_coe_idb = veta_coe.id AND veta_coe_veta_liquidacion_c.deleted = 0
                         INNER JOIN veta_liquidacion_veta_loo_c ON veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_liquidacion_idb = veta_coe_veta_liquidacion_c.veta_coe_veta_liquidacionveta_liquidacion_ida AND veta_liquidacion_veta_loo_c.deleted = 0
                         INNER JOIN veta_loo_veta_aplicacion_c  ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_loo_ida AND veta_loo_veta_aplicacion_c.deleted = 0
                         INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion_opportunities_c.deleted = 0
                         INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND veta_recibo_opportunities_c.deleted = 0
                         INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                         INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento_contacts_c.deleted = 0
                         INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida AND contacts.deleted = 0
                         INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                WHERE 
                        veta_coe.deleted = 0 
                        AND veta_coe.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del contacto asociado a la carta de oferta " . $focus->id
        );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            if ( ! empty( $row[ 'FECHAEXPIRACIONVISA' ] ) )
            {
                $aux                               = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
                $focus->soel_fecha_expiracion_visa = date_format( $aux, $dateformat );
            }
        }

        return $focus;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_lead( &$focus )
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT leads.id AS ID, 
                    CONCAT(leads.first_name, ' ' , leads.last_name) AS NOMBRE,
                    leads.phone_home AS TELCASA,
                    leads.phone_mobile AS CELULAR,
                    leads.lead_source AS FUENTE,
                    leads_cstm.pais_c AS PAIS,
                    leads_cstm.departamento_c AS DEPARTAMENTO,
                    leads_cstm.ciudad_c AS CIUDAD,     
                    leads_cstm.fecha_expiracion_visa_c AS FECHAEXPIRACIONVISA,
                    leads.date_modified AS FECHAMODIFICACION,
                    leads_cstm.visa_c AS VISA                                                       
                FROM veta_coe
                         INNER JOIN veta_coe_veta_liquidacion_c ON veta_coe_veta_liquidacion_c.veta_coe_veta_liquidacionveta_coe_idb = veta_coe.id AND veta_coe_veta_liquidacion_c.deleted = 0
                         INNER JOIN veta_liquidacion_veta_loo_c ON veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_liquidacion_idb = veta_coe_veta_liquidacion_c.veta_coe_veta_liquidacionveta_liquidacion_ida AND veta_liquidacion_veta_loo_c.deleted = 0
                         INNER JOIN veta_loo_veta_aplicacion_c  ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_loo_ida AND veta_loo_veta_aplicacion_c.deleted = 0
                         INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion_opportunities_c.deleted = 0
                         INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND veta_recibo_opportunities_c.deleted = 0
                         INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                         INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento_leads_c.deleted = 0    
                         INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida AND leads.deleted = 0
                         INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                WHERE 
                        veta_coe.deleted = 0 
                        AND veta_coe.id = '" . $focus->id . "'";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del prospecto asociado a la carta de oferta " . $focus->id
        );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null )
        {
            if ( ! empty( $row[ 'FECHAEXPIRACIONVISA' ] ) )
            {
                $aux                               = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
                $focus->soel_fecha_expiracion_visa = date_format( $aux, $dateformat );
            }
        }

        return $focus;


    }

}