<?php
// created: 2019-12-17 13:18:46
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_liquidacion"] = array (
  'name' => 'veta_coe_veta_liquidacion',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_liquidacion',
  'source' => 'non-db',
  'module' => 'Veta_Liquidacion',
  'bean_name' => 'Veta_Liquidacion',
  'vname' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
  'id_name' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_liquidacion_name"] = array (
  'name' => 'veta_coe_veta_liquidacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
  'save' => true,
  'id_name' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
  'link' => 'veta_coe_veta_liquidacion',
  'table' => 'veta_liquidacion',
  'module' => 'Veta_Liquidacion',
  'rname' => 'name',
);
$dictionary["Veta_COE"]["fields"]["veta_coe_veta_liquidacionveta_liquidacion_ida"] = array (
  'name' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
  'type' => 'link',
  'relationship' => 'veta_coe_veta_liquidacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_COE_TITLE',
);
