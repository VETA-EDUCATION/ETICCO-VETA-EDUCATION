<?php
// created: 2019-10-15 14:09:43
$dictionary["Case"]["fields"]["veta_liquidacion_cases"] = array (
  'name' => 'veta_liquidacion_cases',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_cases',
  'source' => 'non-db',
  'module' => 'Veta_Liquidacion',
  'bean_name' => 'Veta_Liquidacion',
  'vname' => 'LBL_VETA_LIQUIDACION_CASES_FROM_VETA_LIQUIDACION_TITLE',
  'id_name' => 'veta_liquidacion_casesveta_liquidacion_ida',
);
$dictionary["Case"]["fields"]["veta_liquidacion_cases_name"] = array (
  'name' => 'veta_liquidacion_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LIQUIDACION_CASES_FROM_VETA_LIQUIDACION_TITLE',
  'save' => true,
  'id_name' => 'veta_liquidacion_casesveta_liquidacion_ida',
  'link' => 'veta_liquidacion_cases',
  'table' => 'veta_liquidacion',
  'module' => 'Veta_Liquidacion',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["veta_liquidacion_casesveta_liquidacion_ida"] = array (
  'name' => 'veta_liquidacion_casesveta_liquidacion_ida',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LIQUIDACION_CASES_FROM_CASES_TITLE',
);
