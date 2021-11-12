<?php
// created: 2019-11-02 20:13:05
$dictionary["Case"]["fields"]["veta_loo_cases"] = array (
  'name' => 'veta_loo_cases',
  'type' => 'link',
  'relationship' => 'veta_loo_cases',
  'source' => 'non-db',
  'module' => 'Veta_Loo',
  'bean_name' => 'Veta_Loo',
  'vname' => 'LBL_VETA_LOO_CASES_FROM_VETA_LOO_TITLE',
  'id_name' => 'veta_loo_casesveta_loo_ida',
);
$dictionary["Case"]["fields"]["veta_loo_cases_name"] = array (
  'name' => 'veta_loo_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LOO_CASES_FROM_VETA_LOO_TITLE',
  'save' => true,
  'id_name' => 'veta_loo_casesveta_loo_ida',
  'link' => 'veta_loo_cases',
  'table' => 'veta_loo',
  'module' => 'Veta_Loo',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["veta_loo_casesveta_loo_ida"] = array (
  'name' => 'veta_loo_casesveta_loo_ida',
  'type' => 'link',
  'relationship' => 'veta_loo_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LOO_CASES_FROM_CASES_TITLE',
);
