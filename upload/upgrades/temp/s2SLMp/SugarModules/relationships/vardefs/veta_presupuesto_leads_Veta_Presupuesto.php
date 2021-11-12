<?php
// created: 2019-12-15 13:44:45
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_leads"] = array (
  'name' => 'veta_presupuesto_leads',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_presupuesto_leadsleads_ida',
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_leads_name"] = array (
  'name' => 'veta_presupuesto_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_presupuesto_leadsleads_ida',
  'link' => 'veta_presupuesto_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_presupuesto_leadsleads_ida"] = array (
  'name' => 'veta_presupuesto_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_presupuesto_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_VETA_PRESUPUESTO_TITLE',
);
