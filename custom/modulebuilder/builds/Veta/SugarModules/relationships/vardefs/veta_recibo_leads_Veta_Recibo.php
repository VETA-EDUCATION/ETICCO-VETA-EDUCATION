<?php
// created: 2020-10-14 00:58:33
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_leads"] = array (
  'name' => 'veta_recibo_leads',
  'type' => 'link',
  'relationship' => 'veta_recibo_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_recibo_leadsleads_ida',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_leads_name"] = array (
  'name' => 'veta_recibo_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_leadsleads_ida',
  'link' => 'veta_recibo_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_leadsleads_ida"] = array (
  'name' => 'veta_recibo_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_LEADS_FROM_VETA_RECIBO_TITLE',
);
