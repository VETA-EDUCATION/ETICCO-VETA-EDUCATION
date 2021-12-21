<?php
// created: 2021-08-02 14:38:16
$dictionary["Case"]["fields"]["leads_cases_1"] = array (
  'name' => 'leads_cases_1',
  'type' => 'link',
  'relationship' => 'leads_cases_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_cases_1leads_ida',
);
$dictionary["Case"]["fields"]["leads_cases_1_name"] = array (
  'name' => 'leads_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CASES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_cases_1leads_ida',
  'link' => 'leads_cases_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Case"]["fields"]["leads_cases_1leads_ida"] = array (
  'name' => 'leads_cases_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CASES_1_FROM_CASES_TITLE',
);
