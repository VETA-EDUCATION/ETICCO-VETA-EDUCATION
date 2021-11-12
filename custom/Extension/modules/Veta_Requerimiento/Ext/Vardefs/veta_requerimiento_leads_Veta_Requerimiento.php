<?php
// created: 2021-09-02 13:15:25
$dictionary["Veta_Requerimiento"]["fields"]["veta_requerimiento_leads"] = array (
  'name' => 'veta_requerimiento_leads',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_requerimiento_leadsleads_ida',
);
$dictionary["Veta_Requerimiento"]["fields"]["veta_requerimiento_leads_name"] = array (
  'name' => 'veta_requerimiento_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_requerimiento_leadsleads_ida',
  'link' => 'veta_requerimiento_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Requerimiento"]["fields"]["veta_requerimiento_leadsleads_ida"] = array (
  'name' => 'veta_requerimiento_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_VETA_REQUERIMIENTO_TITLE',
);
