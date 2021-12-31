<?php
// created: 2021-08-02 14:43:50
$dictionary["Case"]["fields"]["veta_requerimiento_cases_1"] = array (
  'name' => 'veta_requerimiento_cases_1',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_cases_1',
  'source' => 'non-db',
  'module' => 'Veta_Requerimiento',
  'bean_name' => 'Veta_Requerimiento',
  'vname' => 'LBL_VETA_REQUERIMIENTO_CASES_1_FROM_VETA_REQUERIMIENTO_TITLE',
  'id_name' => 'veta_requerimiento_cases_1veta_requerimiento_ida',
);
$dictionary["Case"]["fields"]["veta_requerimiento_cases_1_name"] = array (
  'name' => 'veta_requerimiento_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_REQUERIMIENTO_CASES_1_FROM_VETA_REQUERIMIENTO_TITLE',
  'save' => true,
  'id_name' => 'veta_requerimiento_cases_1veta_requerimiento_ida',
  'link' => 'veta_requerimiento_cases_1',
  'table' => 'veta_requerimiento',
  'module' => 'Veta_Requerimiento',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["veta_requerimiento_cases_1veta_requerimiento_ida"] = array (
  'name' => 'veta_requerimiento_cases_1veta_requerimiento_ida',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_CASES_1_FROM_CASES_TITLE',
);
