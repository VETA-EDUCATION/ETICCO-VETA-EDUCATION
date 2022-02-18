<?php

class Veta_AplicacionHooks
{
    function procesar($focus, $event, $args)
    {
        $this->asignar_info($focus);
        $this->asignar_info_lead($focus);
        //$this->asignar_info_contact($focus);
        $this->asignar_colegio($focus);
        $this->asignar_info_loo($focus);
        $this->asignar_info_coe($focus);
    }

    private function asignar_info($bean)
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference('datef');

        $query = "SELECT  
                    veta_requerimiento.referido AS REFERIDO,
                    veta_requerimiento.fecha_viaje AS FECHAVIAJE,
                    opportunities.date_closed AS FECHACIERRE,
                    opportunities_cstm.fecha_cierre_c AS FECHACIERRE2,
                    asignado.address_city AS OFICINACOMERCIAL,
                    CONCAT(asignado.first_name, ' ', asignado.last_name) AS ASIGNADO,
                    veta_requerimiento.localizacion AS LOCALIZACION
                FROM veta_aplicacion    
                    INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0
                    INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                    INNER JOIN opportunities_cstm ON opportunities_cstm.id_c = opportunities.id     
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND veta_recibo_opportunities_c.deleted = 0 
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                    INNER JOIN veta_requerimiento ON veta_requerimiento.id =  veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                    LEFT JOIN users asignado ON asignado.id = veta_requerimiento.assigned_user_id AND asignado.deleted = 0
                WHERE veta_requerimiento.deleted = 0 AND veta_aplicacion.deleted = 0 AND veta_aplicacion.id = '" . $bean->id . "'";

        $result = $bean->db->query($query, true, "Error obteniendo informacion la fecha de viaje de la aplicacion " . $bean->id);
        $row = $bean->db->fetchByAssoc($result);

        if ($row != null) {
            $bean->soel_localizacion = $row[ 'LOCALIZACION' ];
            $bean->soel_referido = $row['REFERIDO'];

            if (!empty($row['FECHAVIAJE'])) {
                $aux = date_create($row['FECHAVIAJE']);
                $bean->soel_fecha_viaje = date_format($aux, $dateformat);
            }

            if (!empty($row['FECHACIERRE'])) {
                $aux = date_create($row['FECHACIERRE']);
                $bean->soel_fecha_cierre = date_format($aux, $dateformat);
            } else {
                if (!empty($row['FECHACIERRE2'])) {
                    $aux = date_create($row['FECHACIERRE2']);
                    $bean->soel_fecha_cierre = date_format($aux, $dateformat);
                }
            }

            if (!empty($row['OFICINACOMERCIAL'])) {
                $bean->soel_oficina_comercial = $row['OFICINACOMERCIAL'];
            }

            if (!empty($row['ASIGNADO'])) {
                $bean->soel_comercial_requerimiento = $row['ASIGNADO'];
            }
        }

        return $bean;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_contact($focus)
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference('datef');
        $departamentos = $app_list_strings['departamentos_list'];
        $ciudades = $app_list_strings['ciudades_list'];

        $query = "SELECT
                    veta_aplicacion.id                                   									AS APP_ID,
                    veta_aplicacion.name                                 									AS APP_NAME,
                    veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida			AS OPP_ID,    
                    veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida					AS RECIBO_ID,
                    veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida	AS REQ_ID,
                    contacts.id                                          									AS ID,
                    CONCAT(contacts.first_name, ' ', contacts.last_name) 									AS NOMBRE,
                    contacts.phone_home                                  									AS TELCASA,
                    contacts.phone_mobile                                									AS CELULAR,
                    contacts.lead_source                                 									AS FUENTE,
                    contacts_cstm.pais_c                                 									AS PAIS,
                    contacts_cstm.departamento_c                         									AS DEPARTAMENTO,
                    contacts_cstm.ciudad_c                               									AS CIUDAD,
                    contacts_cstm.fecha_expiracion_visa_c                									AS FECHAEXPIRACIONVISA,
                    contacts.date_modified                               									AS FECHAMODIFICACION,
                    contacts_cstm.visa_c                                 									AS VISA
                FROM veta_aplicacion
                    INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND veta_recibo_opportunities_c.deleted = 0
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0    
                    INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento_contacts_c.deleted = 0
                    INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida AND contacts.deleted = 0
                    INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                WHERE veta_aplicacion.deleted = 0 AND veta_aplicacion.id = '" . $focus->id . "'";

        $result = $focus->db->query($query, true,
            "Error obteniendo informacion del contacto asociado a la aplicacion " . $focus->id
        );
        $row = $focus->db->fetchByAssoc($result);

        if ($row != null) {
            if (!empty($row['FECHAEXPIRACIONVISA'])) {
                $aux = date_create($row['FECHAEXPIRACIONVISA']);
                $focus->soel_fecha_expiracion_visa = date_format($aux, $dateformat);
            }
        }

        return $focus;
    }

    /**
     * Este metodo asigna el telefono de la casa del prospecto al requerimiento
     *
     * @param $focus
     */
    private function asignar_info_lead($focus)
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference('datef');
        $departamentos = $app_list_strings['departamentos_list'];
        $ciudades = $app_list_strings['ciudades_list'];

        $query = "SELECT
                    veta_aplicacion.id                                   									AS APP_ID,
                    veta_aplicacion.name                                 									AS APP_NAME,
                    veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida			AS OPP_ID,
                    veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida					AS RECIBO_ID,
                    veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida	AS REQ_ID,
                    leads.id                                             									AS LEAD_ID,
                    CONCAT(leads.first_name, ' ', leads.last_name)       									AS NOMBRE,
                    leads.phone_home                                     									AS TELCASA,
                    leads.phone_mobile                                   									AS CELULAR,
                    leads.lead_source                                    									AS FUENTE,
                    leads_cstm.pais_c                                    									AS PAIS,
                    leads_cstm.departamento_c                            									AS DEPARTAMENTO,
                    leads_cstm.ciudad_c                                  									AS CIUDAD,
                    leads_cstm.fecha_expiracion_visa_c                   									AS FECHAEXPIRACIONVISA,
                    leads.date_modified                                  									AS FECHAMODIFICACION,
                    leads_cstm.visa_c                                    									AS VISA,
                    leads_cstm.ciudad_tmp_c                                                                 AS CIUDADTMP 
                FROM veta_aplicacion
                    INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0
                    INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND veta_recibo_opportunities_c.deleted = 0
                    INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida AND veta_requerimiento_veta_recibo_c.deleted = 0
                    INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento_leads_c.deleted = 0    
                    INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida AND leads.deleted = 0
                    INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                WHERE veta_aplicacion.deleted = 0 AND veta_aplicacion.id = '" . $focus->id . "'";

        $result = $focus->db->query($query, true,
            "Error obteniendo informacion del prospecto asociado a la aplicacion " . $focus->id
        );
        $row = $focus->db->fetchByAssoc($result);

        if ($row != null) {

            $focus->soel_ciudad_tmp = $row['CIUDADTMP'];

            if (!empty($row['FECHAEXPIRACIONVISA'])) {
                $aux = date_create($row['FECHAEXPIRACIONVISA']);
                $focus->soel_fecha_expiracion_visa = date_format($aux, $dateformat);
            }
        }

        return $focus;
    }

    private function asignar_colegio($bean)
    {

        $query = "SELECT  
                    veta_college.name AS 'COLEGIO', veta_college.pais AS PAIS
                FROM veta_aplicacion
                    INNER JOIN veta_aplicacion_cstm ON veta_aplicacion_cstm.id_c = veta_aplicacion.id 
                    INNER JOIN veta_curso ON veta_curso.id = veta_aplicacion_cstm.veta_curso_id_c AND veta_curso.deleted = 0       
                    INNER JOIN veta_college ON veta_college.id = veta_curso.veta_college_id_c AND veta_college.deleted = 0                
                 WHERE veta_aplicacion.deleted = 0 AND veta_aplicacion.id = '" . $bean->id . "'";

        $result = $bean->db->query($query, true, "Error obteniendo informacion el colegio de la aplicacion " . $bean->id);
        $row = $bean->db->fetchByAssoc($result);

        if ($row != null) {
            $bean->soel_colegio = $row['COLEGIO'];
            $bean->soel_paiscolegio = $row['PAIS'];
        }

        return $bean;
    }

    /**
     * Este metodo asigna informaciòn de la carta de oferta a la aplicaciòn
     * @param $bean
     * @return mixed
     */
    private function asignar_info_loo($bean)
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference('datef');

        $query = "SELECT
            veta_loo.id,
            veta_loo.name,
            veta_loo.estado_loo,
            veta_loo.date_entered
        FROM veta_loo
            INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_loo.id AND veta_loo_veta_aplicacion_c.deleted = 0
            INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion.deleted = 0
        WHERE
            veta_aplicacion.id = '" . $bean->id . "'";

        $result = $bean->db->query($query, true, "Error obteniendo informacion de la carta de oferta de la aplicación " . $bean->id);
        $row = $bean->db->fetchByAssoc($result);

        if ($row != null) {

            $bean->soel_estado_loo = $app_list_strings['estado_loo_list_2'][$row['estado_loo']];
        }

        return $bean;
    }

    /**
     * Este metodo asigna informaciòn del COE a la aplicaciòn
     * @param $bean
     * @return mixed
     */
    private function asignar_info_coe($bean)
    {
        global $app_list_strings, $current_user;
        $dateformat = $current_user->getPreference('datef');

        $query = "SELECT
            veta_coe.id,
            veta_coe.name,
            veta_coe.estado,
            veta_coe.date_entered
        FROM veta_coe
            INNER JOIN veta_coe_veta_aplicacion_c ON veta_coe_veta_aplicacion_c.veta_coe_veta_aplicacionveta_coe_idb = veta_coe.id AND veta_coe_veta_aplicacion_c.deleted = 0
            INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_coe_veta_aplicacion_c.veta_coe_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion.deleted = 0             
        WHERE
            veta_aplicacion.id = '" . $bean->id . "'";

        $result = $bean->db->query($query, true, "Error obteniendo informacion de la carta de oferta de la aplicación " . $bean->id);
        $row = $bean->db->fetchByAssoc($result);

        if ($row != null) {

            $bean->soel_estado_coe = $app_list_strings['coe_estado_list'][$row['estado']];
        }

        return $bean;
    }

}