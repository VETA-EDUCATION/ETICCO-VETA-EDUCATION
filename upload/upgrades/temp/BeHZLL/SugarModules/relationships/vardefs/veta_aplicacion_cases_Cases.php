<?php
// created: 2019-11-02 22:32:55
$dictionary["Case"]["fields"]["veta_aplicacion_cases"] = array (
  'name' => 'veta_aplicacion_cases',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_cases',
  'source' => 'non-db',
  'module' => 'Veta_Aplicacion',
  'bean_name' => 'Veta_Aplicacion',
  'vname' => 'LBL_VETA_APLICACION_CASES_FROM_VETA_APLICACION_TITLE',
  'id_name' => 'veta_aplicacion_casesveta_aplicacion_ida',
);
$dictionary["Case"]["fields"]["veta_aplicacion_cases_name"] = array (
  'name' => 'veta_aplicacion_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_APLICACION_CASES_FROM_VETA_APLICACION_TITLE',
  'save' => true,
  'id_name' => 'veta_aplicacion_casesveta_aplicacion_ida',
  'link' => 'veta_aplicacion_cases',
  'table' => 'veta_aplicacion',
  'module' => 'Veta_Aplicacion',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["veta_aplicacion_casesveta_aplicacion_ida"] = array (
  'name' => 'veta_aplicacion_casesveta_aplicacion_ida',
  'type' => 'link',
  'relationship' => 'veta_aplicacion_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_APLICACION_CASES_FROM_CASES_TITLE',
);
