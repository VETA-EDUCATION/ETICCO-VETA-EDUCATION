<?php

class SOELHooksListView2
{
    function procesar(&$bean, $event, $args)
    {
        $this->asignar_info_app($bean);
        $this->asignar_info_servicio_cliente($bean);
        $this->asignar_info_visas($bean);
    }

    private function asignar_info_app(&$bean)
    {
        global $current_user;
        $dateformat = $current_user->getPreference('datef');

        $sql = "SELECT DISTINCT
                    opportunities.id AS OPORTUNIDAD_ID,
                    opportunities.name AS OPORTUNIDAD,
                    veta_aplicacion.id AS ID_APP,
                    veta_aplicacion.name AS APP,
                    CONCAT(users.first_name, ' ', users.last_name) AS COMERCIAL
                FROM veta_aplicacion
                         INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0
                         INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0
                         INNER JOIN users ON users.id = veta_aplicacion.assigned_user_id AND users.deleted = 0
                WHERE veta_aplicacion.deleted = 0 AND opportunities.id = '" . $bean->id . "'";

        $result = $bean->db->query($sql, true, "Error obteniendo informacion del comercial del la aplicación asociado al proceso de venta " . $bean->id);
        $row = $bean->db->fetchByAssoc($result);

        if ($row != null) {
            $bean->soel_asignado_aplicacion = $row['COMERCIAL'];
        }

        return $bean;
    }

    private function asignar_info_servicio_cliente(&$bean)
    {
        global $current_user;
        $dateformat = $current_user->getPreference('datef');

        $sql = "SELECT DISTINCT
                    opportunities.id AS OPORTUNIDAD_ID,
                    opportunities.name AS OPORTUNIDAD,
                    veta_serviciocliente.id AS ID_SC,
                    veta_serviciocliente.name AS SC,
                    CONCAT(users.first_name, ' ', users.last_name) AS COMERCIAL
                FROM veta_serviciocliente
                         INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0
                         INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0
                         INNER JOIN users ON users.id = veta_serviciocliente.assigned_user_id AND users.deleted = 0
                WHERE veta_serviciocliente.deleted = 0 AND opportunities.id = '" . $bean->id . "'";

        $result = $bean->db->query($sql, true, "Error obteniendo informacion del comercial del servicio al clente asociado al proceso de venta " . $bean->id);
        $row = $bean->db->fetchByAssoc($result);

        if ($row != null) {
            $bean->soel_asignado_servicio_cliente = $row['COMERCIAL'];
        }

        return $bean;
    }

    private function asignar_info_visas(&$bean)
    {
        global $current_user;
        $dateformat = $current_user->getPreference('datef');

        $sql = "SELECT DISTINCT
                    opportunities.id AS OPORTUNIDAD_ID,
                    opportunities.name AS OPORTUNIDAD,
                    veta_visa.id AS ID_VISA,
                    veta_visa.name AS VISA,
                    CONCAT(users.first_name, ' ', users.last_name) AS COMERCIAL
                FROM veta_visa
                         INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida = veta_visa.id AND veta_visa_veta_serviciocliente_c.deleted = 0 
                         INNER JOIN veta_serviciocliente ON veta_serviciocliente.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb AND veta_serviciocliente.deleted = 0
                         INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0
                         INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0
                         INNER JOIN users ON users.id = veta_visa.assigned_user_id AND users.deleted = 0
                WHERE veta_visa.deleted = 0 AND opportunities.id = '" . $bean->id . "'";

        $result = $bean->db->query($sql, true, "Error obteniendo informacion del comercial de visas asociado al proceso de venta " . $bean->id);
        $row = $bean->db->fetchByAssoc($result);

        if ($row != null) {
            $bean->soel_asignado_visas = $row['COMERCIAL'];
        }

        return $bean;
    }
}
