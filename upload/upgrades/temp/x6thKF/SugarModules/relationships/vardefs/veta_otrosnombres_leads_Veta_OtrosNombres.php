<?php
// created: 2019-11-29 06:55:56
$dictionary["Veta_OtrosNombres"]["fields"]["veta_otrosnombres_leads"] = array (
  'name' => 'veta_otrosnombres_leads',
  'type' => 'link',
  'relationship' => 'veta_otrosnombres_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_otrosnombres_leadsleads_ida',
);
$dictionary["Veta_OtrosNombres"]["fields"]["veta_otrosnombres_leads_name"] = array (
  'name' => 'veta_otrosnombres_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_otrosnombres_leadsleads_ida',
  'link' => 'veta_otrosnombres_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_OtrosNombres"]["fields"]["veta_otrosnombres_leadsleads_ida"] = array (
  'name' => 'veta_otrosnombres_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_otrosnombres_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_VETA_OTROSNOMBRES_TITLE',
);
