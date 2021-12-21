<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

set_time_limit(300000);
require_once('modules/Veta_Aplicacion/Veta_Aplicacion.php');

$error = false;
$msgError = null;

function obtener_ids()
{
    $ids = array();
    if (isset($_REQUEST['select_entire_list']) and $_REQUEST['select_entire_list'] == '1') {
        $db = DBManagerFactory::getInstance();
        $result = $db->query($_SESSION["Veta_Aplicacion2_QUERY"], true);

        while ($row = $db->fetchByAssoc($result)) {
            array_push($ids, $row['id']);
        }

    } else {

        $ids = explode(',', $_REQUEST["uid"]);
    }

    return $ids;
}

function get_person($app_id)
{
    $person = null;
    $db = DBManagerFactory::getInstance();
    $sql = "SELECT 
                veta_aplicacion.id                                                    AS ID,
                veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida          AS LEAD_ID,
                veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida AS CONTACT_ID
              FROM veta_aplicacion 
                  INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                  INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                  INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                  INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                  INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                  INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida
                  LEFT JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0
                  LEFT JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0
              WHERE veta_aplicacion.id = '" . $app_id . "'";

    $result = $db->query($sql, true, "Error exportando aplicaciones");

    while ($row = $db->fetchByAssoc($result)) {

        if (!empty($row['LEAD_ID'])) {
            $person = array('id' => $row['LEAD_ID'], 'tipo' => 'LEAD');
        }

        if (!empty($row['CONTACT_ID'])) {
            $person = array('id' => $row['CONTACT_ID'], 'tipo' => 'CONTACT');
        }
    }

    return $person;
}

$publicoObjetivo = new ProspectList();
$publicoObjetivo->list_type = 'default';
$publicoObjetivo->name = 'Publico objetivo Aplicacion ';

$publicoObjetivo->save();

$ids = obtener_ids();
$list = array();
$list2 = array();

foreach ($ids as $id) {
    $person = get_person($id);
    array_push($list, $person);

    if (isset($person)) {

        if ($person['tipo'] == 'LEAD') {
            $publicoObjetivo->load_relationship('leads');
            $publicoObjetivo->leads->add($person['id']);
            array_push($list2, $person);
        } else {
            $publicoObjetivo->load_relationship('contacts');
            $publicoObjetivo->contacts->add($person['id']);
            array_push($list2, $person);
        }
    }
}

$aux = "<script>
        var registro='" . $publicoObjetivo->id . "';";

$aux .= "alert('Lista de público objetivo creada, seras redireccionado a esta lista');
                    window.location = 'index.php?module=ProspectLists&action=DetailView&record=' + registro;
        </script>";

echo $aux;




