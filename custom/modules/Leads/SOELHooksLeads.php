<?php

include_once('modules/ACLRoles/ACLRole.php');
include_once('modules/Campaigns/Campaign.php');
require_once('modules/Veta_Aplicacion/Veta_Aplicacion.php');
require_once('modules/Veta_Requerimiento/Veta_Requerimiento.php');
require_once('service/core/SoapHelperWebService.php');


if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class SOELHooksLeads
{

    function __construct()
    {

    }

    private function redireccionar($msg, $registro)
    {
        if (!empty($registro)) {

            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Leads&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        } else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;

    }

    private function fill_requirement(&$lead, $requirement)
    {
        if (isset($lead->fecha_viaje_c)) {
            $requirement->fecha_viaje_txt = $lead->fecha_viaje_c;
        }

        if (isset($lead->fecha_viaje_2_c)) {
            $requirement->fecha_viaje = $lead->fecha_viaje_2_c;
        }

        if (isset($lead->presupuesto_c)) {
            $requirement->presupuesto = $lead->presupuesto_c;
        }

        $current_lead = new Lead();
        $current_lead->retrieve($lead->id);

        if (!empty($lead->campaign_id_c)) {

            /*if ( isset( $current_lead->id ) ) {

                if ( $current_lead->campaign_id_c != $lead->campaign_id_c ) {
                    $requirement->campaign_id_c = $lead->campaign_id_c;
                    $lead->campaign_id          = $lead->campaign_id_c;
                }
            }
            else {
                $requirement->campaign_id_c = $lead->campaign_id_c;
                $lead->campaign_id          = $lead->campaign_id_c;
            }*/

            $requirement->campaign_id_c = $lead->campaign_id_c;
            $lead->campaign_id = $lead->campaign_id_c;

        }

        if (!empty($lead->campaign_id)) {

            /*if($current_lead->campaign_id != $lead->campaign_id){
                $requirement->campaign_id_c = $lead->campaign_id;
                $lead->campaign_id_c        = $lead->campaign_id;
            }
            else{
                $requirement->campaign_id_c = $lead->campaign_id;
                $lead->campaign_id_c        = $lead->campaign_id;
            }*/

            $requirement->campaign_id_c = $lead->campaign_id;
            $lead->campaign_id_c = $lead->campaign_id;

        }

        if (isset($lead->lead_source)) {
            $requirement->fuente = $lead->lead_source;
        }

        /*if ( isset( $lead->assigned_user_id ) )
        {
            $requirement->assigned_user_id = $lead->assigned_user_id;
        }*/

        return $requirement;
    }

    function pre_save(&$bean, $event, $arguments)
    {
        $requirement = new Veta_Requerimiento();

        $prospecto_encontrado = new Lead();
        $prospecto_encontrado->retrieve($bean->id);

        if (!empty($bean->campaign_id_c)) {
            $campana = new Campaign();
            $campana->retrieve($bean->campaign_id_c);
            $bean->lead_source = $campana->origen_c;
        }

        if (empty($prospecto_encontrado->id)) {
            $requirement = $this->fill_requirement($bean, $requirement);

            // Verificar si el prospecto esta duplicado para ello se usa el email y el telefono
            $lead = $this->get_lead_by_email_or_phone($bean);

            if (isset($lead)) {

                if ($_REQUEST['module'] != 'Import') {
                    $this->update_return_and_exit($lead);
                } else {
                    //$bean->id = $lead->id;
                    //return $bean->save();

                    exit;
                }

            }
            else {

                if (isset($bean->campaign_id_c))
                {
                    $bean->campaign_id = $bean->campaign_id_c;
                }
            }

            if (!empty($requirement->campaign_id_c))
            {
                $bean->requerimiento = $requirement;
            }
        }
        else
        {
            $requirement = $this->fill_requirement($bean, $requirement);

            if (!empty($requirement->campaign_id_c))
            {
                $bean->requerimiento = $requirement;
            }
            else
            {
                $aux = "No asigno";
            }
        }
    }

    private function get_json_data(){

        // El siguiente codigo esta basado en el metodo serve de SugarRestJSON.php y SugarWebServiceImplv3_1.php
        $json_data = !empty($_REQUEST['rest_data']) ? $GLOBALS['RAW_REQUEST']['rest_data'] : '';

        return $json_data;
    }

    /**
     * Este funcion construye una respuesta dependiendo de donde se origina la solicitud
     */
    private function update_return_and_exit($lead)
    {
         $json_data = $this->get_json_data();

        if (empty($json_data)) {
            $msg = 'No es posible salvar el prospecto porque ya existe uno con el un email o telefono igual seras redirigido a ese prospecto';
            $this->redireccionar($msg, $lead->id);

        } else {
            $json = getJSONObj();
            $name_value_list = $json->decode($json_data);
            $name_value_list = $name_value_list["name_value_list"];

            $seed = $lead;

            $return_fields = array();
            foreach ($name_value_list as $name => $value) {
                if (!is_array($value)) {
                    $seed->$name = $value;
                    $return_fields[] = $name;
                } else {
                    $seed->{$value['name']} = $value['value'];
                    $return_fields[] = $value['name'];
                }
            }

            $helper = new SoapHelperWebServices();
            $return_entry_list = $helper->get_name_value_list_for_fields($seed, $return_fields);
            $this->update_lead($lead, $return_entry_list);

            $json = array('id' => $seed->id,
                'entry_list' => $return_entry_list
            );
            $json = json_encode($json);

            header('Content-Type: application/json');
            header('Content-Length: ' . strlen($json));
            echo $json;
            exit;

        }
    }

    /**
     * Este metodo ejecuta una consulta sql para actualizar un prospecto desde un arreglo con los campos
     *
     * @param $lead Es un prospecto existe
     * @param $fields  Son los datos que se desean actualizar de ese prospecto
     */
    private function update_lead($lead, $fields)
    {
        foreach ($fields as $k => $v) {
            $lead->$k = $v["value"];
        }

        $lead->save();

    }

    function establecer_dpto_pais(&$bean, $event, $arguments)
    {
        //$bean->fecha_expiracion_visa_c = $bean->fecha_expiracion_visa_c == '' ? null : $bean->fecha_expiracion_visa_c;

        if (!empty($bean->ciudad_c) && empty($bean->departamento_c)) {

            if (count(explode('/', $bean->ciudad_c)) == 2) {
                $this->establecer_dpto_pais_event_brite($bean);
            } else {

                $dpto = $this->obtener_clave_ddl($bean->ciudad_c, 'departamentos_list');

                if (!empty($dpto)) {

                    $bean->departamento_c = $dpto;
                    $pais = $this->obtener_clave_ddl($bean->ciudad_c, 'pais_list');

                    if (!empty($pais)) {
                        $bean->pais_c = $pais;
                    }
                }
            }

        }

        $l = new Lead();
        $l->retrieve($bean->id);

        // Todo: Usar el ID de campaña
        if (isset($bean->campaign_id_c) and !isset($l->id)) {
            $c = new Campaign();
            $c->retrieve($bean->campaign_id_c);

            if (isset($c->origen_c))
                $bean->lead_source = $c->origen_c;

            // Todo: Asignar el comercial
            $bean->assigned_user_id = $this->obtener_comercial($bean, $c);
            $bean->status = 'Asignado';
        }
    }

    /**
     * Este metodo obtiene un prospecto por su email o telefono
     *
     * @param $bean Representa un prospecto
     * @return mixed|null  El prospecto encontrado o null en caso de no encontrar
     */
    public function get_lead_by_email_or_phone($bean)
    {
        $lead = null;
        $query = "SELECT eabr.bean_id , email_address FROM email_addresses
                    INNER JOIN email_addr_bean_rel eabr ON eabr.email_address_id = email_addresses.id 
                    INNER JOIN leads ON leads.id = eabr.bean_id AND leads.deleted = 0
                    WHERE eabr.bean_module = 'Leads' AND email_addresses.invalid_email = 0 AND eabr.deleted = 0 AND eabr.primary_address = 1 AND LOWER(email_address) = LOWER('" . $bean->email1 . "')";

        $res = $bean->db->query($query, true, "Error obteniendo un prospecto por su email : ");

        while ($row = $bean->db->fetchByAssoc($res)) {
            $lead = new Lead();
            $lead->retrieve($row['bean_id']);
        }

        if (!isset($lead->id)) {
            $phone_mobile_phrase = $phone_home_phrase = $phone_work_phrase = '';

            if (!empty($bean->phone_mobile)) {
                $phone_home_phrase = "phone_mobile = '" . $bean->phone_mobile . "'";
            }

            if (!empty($bean->phone_home)) {
                $phone_home_phrase = "phone_home = '" . $bean->phone_home . "'";

                if (!empty($phone_mobile_phrase)) {
                    $phone_home_phrase = " OR " . $phone_home_phrase;
                }
            }

            if (!empty($bean->phone_work)) {
                $phone_work_phrase = "phone_work = '" . $bean->phone_work . "'";

                if (!empty($phone_mobile_phrase) or !empty(phone_home)) {
                    $phone_work_phrase = " OR " . $phone_work_phrase;
                }
            }

            if (!empty($phone_mobile_phrase) or !empty($phone_home_phrase) or !empty($phone_work_phrase)) {
                $query = "SELECT id FROM leads WHERE " . $phone_mobile_phrase . $phone_home_phrase . $phone_work_phrase . " AND deleted = 0";
                $res = $bean->db->query($query, true, "Error obteniendo un prospecto por su telefono : ");

                while ($row = $bean->db->fetchByAssoc($res)) {
                    $lead = new Lead();
                    $lead->retrieve($row['id']);
                }
            }
        }

        return $lead;
    }

    private function obtener_comercial_acumulado($bean, $list, $campaign_id)
    {
        $uid = null;
        $usuarios = $usuarios2 = array();

        $q = "SELECT DISTINCT related_id AS USER_ID 
                FROM prospect_lists_prospects 
                INNER JOIN users ON users.id = prospect_lists_prospects.related_id AND prospect_lists_prospects.deleted = 0
                WHERE related_type = 'Users' AND prospect_lists_prospects.prospect_list_id = '" . $list->id . "' AND users.status = 'Active' and users.deleted = 0";

        $res = $bean->db->query($q, true, "Error obteniendo el usuario : ");

        while ($row = $bean->db->fetchByAssoc($res)) {
            array_push($usuarios, $row['USER_ID']);
        }

        $q = "SELECT DISTINCT related_id AS USER_ID, COUNT(leads.id) as PROSPECTOS
                FROM prospect_lists_prospects
                INNER JOIN users ON users.id = prospect_lists_prospects.related_id AND prospect_lists_prospects.deleted = 0
                LEFT JOIN leads ON leads.assigned_user_id = users.id AND leads.deleted = 0
                INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id AND leads_cstm.campaign_id_c = '" . $campaign_id . "'
                WHERE related_type = 'Users'
                  AND prospect_lists_prospects.prospect_list_id =  '" . $list->id . "'
                  AND users.status = 'Active'
                  AND users.deleted = 0
                GROUP BY related_id
                ORDER BY PROSPECTOS DESC";

        $res = $bean->db->query($q, true, "Error obteniendo el usuario : ");

        while ($row = $bean->db->fetchByAssoc($res)) {
            array_push($usuarios2, $row['USER_ID']);
            $uid = $row['USER_ID'];
        }

        foreach ($usuarios as $u) {
            if (!in_array($u, $usuarios2)) {
                $uid = $u;
            }
        }

        return $uid;
    }

    private function estan_asignados_todos_los_comerciales($bean, $list)
    {
        $estan = false;
        $cant1 = $this->obtener_cantidad_comerciales_asignados($bean, $list);
        $cant2 = $this->obtener_cantidad_comerciales_lista($bean, $list);

        if ($cant1 == $cant2) {
            $estan = true;
        }

        return $estan;
    }

    private function obtener_cantidad_comerciales_asignados($bean, $list)
    {
        $cantidad = 0;

        $q = "select count(assigned_user_id) as cantidad 
              from leads 
              where  deleted =0 and status <> 'Converted' and assigned_user_id in 
              (
                  select related_id 
                  from prospect_lists_prospects 
                  inner join users on users.id = prospect_lists_prospects.related_id and prospect_lists_prospects.deleted = 0
                  where related_type = 'Users' and prospect_list_id = '" . $list->id . "' and users.status= 'Active' and users.deleted = 0
              ) ";

        $res = $bean->db->query($q, true, "Error obteniendo el usuario : ");

        while ($row = $bean->db->fetchByAssoc($res)) {
            $cantidad = $row['cantidad'];
        }

        return $cantidad;
    }

    private function obtener_cantidad_comerciales_lista($bean, $list)
    {

        $cantidad = 0;

        $q = "select count(related_id) as cantidad  
              from prospect_lists_prospects 
              inner join users on users.id = prospect_lists_prospects.related_id and prospect_lists_prospects.deleted = 0
              where related_type = 'Users' and prospect_list_id = '" . $list->id . "' and users.status= 'Active' and users.deleted = 0";

        $res = $bean->db->query($q, true, "Error obteniendo el usuario : ");

        while ($row = $bean->db->fetchByAssoc($res)) {
            $cantidad = $row['cantidad'];
        }

        return $cantidad;
    }

    private function obtener_comercial($bean, $campaign)
    {
        $uid = $bean->assigned_user_id;
        $campaign->load_relationship('prospectlists');

        $target_lists = $campaign->prospectlists->getBeans();

        if (count($target_lists) > 0) {
            foreach ($target_lists as $list) {
                if ($list->list_type == 'Comerciales') {
                    $uid = $this->obtener_comercial_acumulado($bean, $list, $campaign->id);
                }
            }
        }

        return $uid;
    }

    private function establecer_dpto_pais_event_brite($bean)
    {
        $list = explode('/', $bean->ciudad_c);
        $pais = $list[0];
        $ciudad = $list[1];

        global $app_list_strings;

        foreach ($app_list_strings['ciudades_list'] as $clave => $valor) {

            // Si la ciudad comienza con el pais
            if ($this->startsWith($clave, $pais)) {
                $bean->pais_c = $pais;

                // Si la ciudad termina con la ciudad
                if ($this->endsWith($clave, $ciudad)) {
                    $bean->ciudad_c = $clave;

                    $parts = explode('_', $clave);
                    $bean->departamento_c = $parts[0] . '_' . $parts[1];
                }
            }
        }
    }

    private function startsWith($cadena, $valor)
    {
        $length = strlen($valor);
        return (substr($cadena, 0, $length) === $valor);
    }

    private function endsWith($cadena, $valor)
    {
        $length = strlen($valor);
        if ($length == 0) {
            return true;
        }

        return (substr($cadena, -$length) === $valor);
    }

    private function obtener_clave_ddl($cad, $list)
    {
        $clave = null;
        global $app_list_strings;
        $keys = explode('_', $cad);
        $key = null;

        for ($i = 0; $i < count($keys); $i++) {
            $key .= $keys[$i];
            $val = $app_list_strings[$list][$key];

            if (!empty($val)) {
                $clave = $key;
                break;
            } else {
                $key .= '_';
            }
        }

        return $clave;
    }

    /**
     * Este metodo obtiene un requerimiento existente buscandolo por el id del prospecto y el id de la campaña
     *
     * @param $lead_id : Es el id del prospecto
     * @param $campaign_id : Es el id de la campaña
     * @return Veta_Requerimiento|null  : El requerimiento existente si no existe retorna null
     */
    public function get_requirement_by_lead_id_campaign_id($lead_id, $campaign_id)
    {
        $requirement = null;

        $query = "SELECT veta_requerimiento.id FROM veta_requerimiento
                         INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0
                         INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida AND leads.deleted = 0
                         WHERE campaign_id_c = '" . $campaign_id . "' AND veta_requerimiento.deleted = 0 AND veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida = '" . $lead_id . "'";

        $db = DBManagerFactory::getInstance();
        $res = $db->query($query, true,
            "Error obteniendo los requerimientos por contacto y por id de campaña : "
        );

        while ($row = $db->fetchByAssoc($res)) {
            $requirement = new Veta_Requerimiento();
            $requirement->retrieve($row['id']);
        }

        return $requirement;
    }

    public function post_save(&$bean, $event, $arguments)
    {
        // Buscamos si el requerimiento existe usando el id de campaña, si existe lo actualizamos , si no existe lo creamos y lo asociamos con el prospecto
        if (isset($bean->requerimiento)) {
            $requirement = $this->get_requirement_by_lead_id_campaign_id($bean->id, $bean->requerimiento->campaign_id_c);

            $exists = isset($requirement) ? true : false;

            if ($exists == false) {
                $requirement = new Veta_Requerimiento();
            }

            $requirement->fecha_viaje_txt = $bean->requerimiento->fecha_viaje_txt;
            $requirement->fecha_viaje = $bean->requerimiento->fecha_viaje;
            $requirement->presupuesto = $bean->requerimiento->presupuesto;
            $requirement->campaign_id_c = $bean->requerimiento->campaign_id_c;
            $requirement->fuente = $bean->requerimiento->fuente;
            $requirement->assigned_user_id = $bean->assigned_user_id;


            if (!empty($this->get_json_data())){
                $requirement->referido = 'Leads Bridge';
            }

            if (isset($bean->set_estado_al_requerimiento) and $bean->set_estado_al_requerimiento == true) {
                $requirement->estado = $bean->status;

                //Todo: Estas condiciones eliminarlas despues de la migración

                if ($requirement->estado == 'Converted') {
                    $requirement->estado = 'Cerrado';
                }

                if (isset($bean->fecha_proximo_contacto_c)) {
                    $requirement->fecha_proximo_contacto = $bean->fecha_proximo_contacto_c;
                }

                if (isset($bean->fecha_ultimo_contacto_c)) {
                    $requirement->fecha_ultimo_contacto = $bean->fecha_ultimo_contacto_c;
                }
            }

            $requirement->save();

            if ($exists == false) {
                $bean->load_relationship('veta_requerimiento_leads');
                $bean->veta_requerimiento_leads->add($requirement->id);
                $bean->reqid = $requirement->id;
            }

            $requirement->relacionar_con_estudiante();
        }

        $app = new Veta_Aplicacion();
        $app->propagar_info($bean);

        if (!empty($bean->contact_id)) {

            $c = new Contact();
            $c->retrieve($bean->contact_id);
            $c->fecha_expiracion_visa_c = $bean->fecha_expiracion_visa_c;
            $c->save(false);
        }

    }

    public function pre_delete(&$bean, $event, $arguments)
    {
        $convertido = new Contact();
        $convertido->retrieve($bean->contact_id);

        if ($convertido->deleted == 0 && !empty($convertido->id)) {

            $msg = 'No se puede eliminar el prospecto ya fue convertido';

            SugarApplication::appendErrorMessage($msg);
            SugarApplication::redirect("index.php?module=Leads&action=DetailView&record=" . $bean->id);

        } else {

            $tieneProcesoVenta = false;
            $ctasCobro = $bean->get_linked_beans('veta_recibo_leads', 'Veta_Recibo');

            foreach ($ctasCobro as $ctaCobro) {
                $procesosVenta = $ctaCobro->get_linked_beans('veta_recibo_opportunities', 'Opportunities');

                if (count($procesosVenta) > 0) {
                    $tieneProcesoVenta = true;
                    if (empty($_SERVER["REQUEST_URI"])) {
                        throw new Exception("No se puede eliminar el prospecto porque tiene un proceso de venta");
                    } else {
                        SugarApplication::appendErrorMessage(' No se puede eliminar el prospecto porque tiene un proceso de venta');
                        SugarApplication::redirect("index.php?module=Leads&action=DetailView&record=" . $bean->id);
                    }

                    //$this->redireccionar('No se puede eliminar el prospecto porque tiene un proceso de venta', $bean->id);
                }
            }

            if (!$tieneProcesoVenta) {
                $requerimientos = $bean->get_linked_beans('veta_requerimiento_leads', 'Veta_Requerimiento');

                foreach ($requerimientos as $requerimiento) {
                    $requerimiento->mark_deleted($requerimiento->id);
                }
            }
        }


    }
}
