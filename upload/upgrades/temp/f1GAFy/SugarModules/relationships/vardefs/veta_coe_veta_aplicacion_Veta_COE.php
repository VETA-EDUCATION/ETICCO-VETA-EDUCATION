<?php
// created: 2019-11-23 19:25:03
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_aplicacion"] = array (
  'name' => 'veta_coe_veta_aplicacion',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_aplicacion',
  'source' => 'non-db',
  'module' => 'Veta_Aplicacion',
  'bean_name' => 'Veta_Aplicacion',
  'vname' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'id_name' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_aplicacion_name"] = array (
  'name' => 'veta_coe_veta_aplicacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'save' => true,
  'id_name' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
  'link' => 'veta_coe_veta_aplicacion',
  'table' => 'veta_aplicacion',
  'module' => 'Veta_Aplicacion',
  'rname' => 'name',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_aplicacionveta_aplicacion_ida"] = array (
  'name' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_aplicacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_COE_TITLE',
);
