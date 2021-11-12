<?php
// created: 2019-11-23 19:06:50
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_leads"] = array (
  'name' => 'veta_pasaporte_leads',
  'type' => 'link',
  'relationship' => 'veta_pasaporte_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_pasaporte_leadsleads_ida',
);
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_leads_name"] = array (
  'name' => 'veta_pasaporte_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_pasaporte_leadsleads_ida',
  'link' => 'veta_pasaporte_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Pasaporte"]["fields"]["veta_pasaporte_leadsleads_ida"] = array (
  'name' => 'veta_pasaporte_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_pasaporte_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PASAPORTE_LEADS_FROM_VETA_PASAPORTE_TITLE',
);
