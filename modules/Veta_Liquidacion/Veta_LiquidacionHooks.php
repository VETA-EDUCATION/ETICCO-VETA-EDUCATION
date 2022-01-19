<?php

/**
 * Class Veta_LiquidacionHooks
 *
 * Esta clase requiere que esten creados los siguientes indices:
 *
 * alter table veta_requerimiento_contacts_c add index veta_requerimiento_contacts_c_deleted (deleted);
    alter table veta_requerimiento_veta_recibo_c add index veta_requerimiento_veta_recibo_c_deleted (deleted);
    alter table veta_recibo add index veta_recibo_deleted (deleted);
    alter table veta_recibo_opportunities_c add index veta_recibo_opportunities_c_deleted (deleted);
    alter table opportunities add index opportunities_deleted (deleted);
    alter table veta_aplicacion_opportunities_c add index veta_aplicacion_opportunities_c_deleted (deleted);
    alter table veta_aplicacion add index veta_aplicacion_deleted (deleted);
    alter table veta_loo_veta_aplicacion_c add index veta_loo_veta_aplicacion_c_deleted (deleted);
    alter table veta_loo add index veta_loo_deleted (deleted);
    alter table veta_liquidacion_veta_loo_c add index veta_liquidacion_veta_loo_c_deleted (deleted);
    alter table veta_liquidacion add index veta_liquidacion_deleted (deleted);
    alter table contacts add index contacts_deleted (deleted);
    alter table campaigns add index campaigns_deleted (deleted);
    alter table leads add index leads_deleted (deleted);
    alter table veta_requerimiento_leads_c add index veta_requerimiento_leads_c_deleted (deleted);
 */
class Veta_LiquidacionHooks
{
    function procesar( $focus, $event, $args )
    {
        $this->asignar_info( $focus );
        $this->asignar_info_lead( $focus );
        //$this->asignar_info_contact( $focus );
    }

    private function asignar_info( $bean )
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $query = "SELECT  
                    veta_requerimiento.referido AS REFERIDO,
                    veta_requerimiento.fecha_viaje AS FECHAVIAJE
                FROM veta_liquidacion 
                INNER JOIN veta_liquidacion_veta_loo_c ON veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_liquidacion_idb = veta_liquidacion.id AND veta_liquidacion_veta_loo_c.deleted = 0
                INNER JOIN veta_loo ON veta_loo.id = veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_loo_ida AND veta_loo.deleted = 0 
                INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_loo.id 
                INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida
                INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0 
                INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                INNER JOIN veta_requerimiento ON veta_requerimiento.id =  veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida
                 WHERE veta_requerimiento.deleted = 0 AND veta_liquidacion.deleted = 0 AND veta_liquidacion.id = '" . $bean->id . "'";

        $result = $bean->db->query( $query, true,
            "Error obteniendo informacion la fecha de viaje de la aplicacion " . $bean->id );
        $row    = $bean->db->fetchByAssoc( $result );

        if ( $row != null ) {

            $bean->soel_referido = $row[ 'REFERIDO' ];
            $aux                    = date_create( $row[ 'FECHAVIAJE' ] );
            $bean->soel_fecha_viaje = date_format( $aux, $dateformat );
        }

        return $bean;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_contact( $focus )
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference( 'datef' );

        $departamentos = $app_list_strings[ 'departamentos_list' ];
        $ciudades      = $app_list_strings[ 'ciudades_list' ];

        $query = "SELECT contacts.id AS ID,
                    CONCAT(contacts.first_name, ' ' , contacts.last_name) AS NOMBRE,
                    contacts.phone_home AS TELCASA,
                    contacts.phone_mobile AS CELULAR,
                    contacts.lead_source AS FUENTE,
                    contacts_cstm.pais_c AS PAIS,
                    contacts_cstm.departamento_c AS DEPARTAMENTO,
                    contacts_cstm.ciudad_c AS CIUDAD,     
                    contacts_cstm.fecha_expiracion_visa_c AS FECHAEXPIRACIONVISA,
                    contacts.date_modified AS FECHAMODIFICACION,
                    contacts_cstm.visa_c AS VISA
                    FROM veta_liquidacion
                    INNER JOIN veta_liquidacion_veta_loo_c ON veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_liquidacion_idb = veta_liquidacion.id AND veta_liquidacion_veta_loo_c.deleted = 0 AND veta_liquidacion.id = '" . $focus->id . "' AND veta_liquidacion.deleted = 0
                    INNER JOIN veta_loo ON veta_loo.id = veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_loo_ida AND veta_loo.deleted = 0
                    INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_loo.id AND veta_loo_veta_aplicacion_c.deleted = 0
                    INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion.deleted = 0
                    INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0
                    INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0
                    INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_recibo.deleted = 0
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id AND veta_requerimiento_veta_recibo_c.deleted = 0
                    INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0
                    INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0
                    INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida AND contacts.deleted = 0
                    INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del contacto asociado a la carta de oferta " . $focus->id );
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
            //$focus->soel_fecha_expiracion_visa = $row[ 'FECHAEXPIRACIONVISA' ];
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
    private function asignar_info_lead( $focus )
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
                    leads_cstm.visa_c AS VISA,
                    leads_cstm.ciudad_tmp_c AS CIUDADTMP
                    FROM veta_liquidacion
                    INNER JOIN veta_liquidacion_veta_loo_c ON veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_liquidacion_idb = veta_liquidacion.id AND veta_liquidacion_veta_loo_c.deleted = 0 AND veta_liquidacion.id = '" . $focus->id . "' AND veta_liquidacion.deleted = 0
                    INNER JOIN veta_loo ON veta_loo.id = veta_liquidacion_veta_loo_c.veta_liquidacion_veta_looveta_loo_ida AND veta_loo.deleted = 0
                    INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_loo.id AND veta_loo_veta_aplicacion_c.deleted = 0
                    INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion.deleted = 0
                    INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0
                    INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0
                    INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_recibo.deleted = 0
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id AND veta_requerimiento_veta_recibo_c.deleted = 0
                    INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0
                    INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0
                    INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida AND leads.deleted = 0
                    INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id";

        $result = $focus->db->query( $query, true,
            "Error obteniendo informacion del prospecto asociado a la carta de oferta " . $focus->id );
        $row    = $focus->db->fetchByAssoc( $result );

        if ( $row != null ) {

            if ( ! empty( $row[ 'FECHAEXPIRACIONVISA' ] ) )
            {
                $aux                               = date_create( $row[ 'FECHAEXPIRACIONVISA' ] );
                $focus->soel_fecha_expiracion_visa = date_format( $aux, $dateformat );
            }

            $focus->soel_ciudad_tmp = $row['CIUDADTMP'];
        }

        return $focus;
    }

}