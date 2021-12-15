<?php

require_once('modules/Veta_Requerimiento/Veta_Requerimiento.php');

class Veta_RequerimientoViewCreateList extends ViewEdit
{
    public function __construct()
    {
        parent::__construct();
    }

    public function display()
    {
        $lista = $this->salvar();
        //$this->ss->assign( "MSG", 'Lista de publico <a href="index.php?module=ProspectLists&action=DetailView&record=' . $lista->id . '>' . $lista->name . '</a> objetivo creada' );
        $this->ss->assign("NAME", $lista->name);
        $this->ss->assign("ID", $lista->id);

        $this->ss->display('modules/Veta_Requerimiento/tpls/createlist.tpl');
    }

    private function salvar()
    {

        set_time_limit(300000);

        $publicoObjetivo = new ProspectList();

        if (!isset ($_REQUEST['LISTA_ID']) || $_REQUEST['LISTA_ID'] == '-o-') {
            $publicoObjetivo->list_type = 'default';
            $publicoObjetivo->name = 'NUEVA LISTA DE PUBLICO OBJETIVO DE REQUERIMIENTOS ';

            $publicoObjetivo->save();
        } else {
            $publicoObjetivo->retrieve($_REQUEST['LISTA_ID']);
        }

        $ids = $this->obtener_ids();

        foreach ($ids as $id) {
            $requerimiento = new Veta_Requerimiento();
            $requerimiento->retrieve($id);

            $leads = $requerimiento->get_linked_beans('veta_requerimiento_leads', 'Leads');

            if (count($leads) > 0) {
                $publicoObjetivo->load_relationship('leads');
                $publicoObjetivo->leads->add($leads[0]->id);
            } else {
                $contacts = $requerimiento->get_linked_beans('veta_requerimiento_contacts', 'Contacts');

                if (count($contacts) > 0) {
                    $publicoObjetivo->load_relationship('contacts');
                    $publicoObjetivo->contacts->add($contacts[0]->id);
                }
            }
        }

        return $publicoObjetivo;

    }

    function obtener_ids()
    {
        $ids = array();
        if (isset($_REQUEST['SELECT_ENTIRE_LIST']) and $_REQUEST['SELECT_ENTIRE_LIST'] == '1') {
            $db = DBManagerFactory::getInstance();
            $result = $db->query($_SESSION["Veta_Requerimiento2_QUERY"], true);

            while ($row = $db->fetchByAssoc($result)) {
                array_push($ids, $row['id']);
            }

        } else {

            $ids = explode(',', $_REQUEST["UIDS"]);
        }

        return $ids;
    }

}
