<?php
// created: 2019-11-30 16:39:44
$dictionary["Case"]["fields"]["veta_coe_cases"] = array (
  'name' => 'veta_coe_cases',
  'type' => 'link',
  'relationship' => 'veta_coe_cases',
  'source' => 'non-db',
  'module' => 'Veta_COE',
  'bean_name' => 'Veta_COE',
  'vname' => 'LBL_VETA_COE_CASES_FROM_VETA_COE_TITLE',
  'id_name' => 'veta_coe_casesveta_coe_ida',
);
$dictionary["Case"]["fields"]["veta_coe_cases_name"] = array (
  'name' => 'veta_coe_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_COE_CASES_FROM_VETA_COE_TITLE',
  'save' => true,
  'id_name' => 'veta_coe_casesveta_coe_ida',
  'link' => 'veta_coe_cases',
  'table' => 'veta_coe',
  'module' => 'Veta_COE',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["veta_coe_casesveta_coe_ida"] = array (
  'name' => 'veta_coe_casesveta_coe_ida',
  'type' => 'link',
  'relationship' => 'veta_coe_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_CASES_FROM_CASES_TITLE',
);
