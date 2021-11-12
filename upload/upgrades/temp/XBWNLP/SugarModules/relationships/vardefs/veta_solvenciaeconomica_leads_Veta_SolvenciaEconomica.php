<?php
// created: 2019-11-24 13:21:08
$dictionary["Veta_SolvenciaEconomica"]["fields"]["veta_solvenciaeconomica_leads"] = array (
  'name' => 'veta_solvenciaeconomica_leads',
  'type' => 'link',
  'relationship' => 'veta_solvenciaeconomica_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'veta_solvenciaeconomica_leadsleads_ida',
);
$dictionary["Veta_SolvenciaEconomica"]["fields"]["veta_solvenciaeconomica_leads_name"] = array (
  'name' => 'veta_solvenciaeconomica_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'veta_solvenciaeconomica_leadsleads_ida',
  'link' => 'veta_solvenciaeconomica_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Veta_SolvenciaEconomica"]["fields"]["veta_solvenciaeconomica_leadsleads_ida"] = array (
  'name' => 'veta_solvenciaeconomica_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'veta_solvenciaeconomica_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_VETA_SOLVENCIAECONOMICA_TITLE',
);
