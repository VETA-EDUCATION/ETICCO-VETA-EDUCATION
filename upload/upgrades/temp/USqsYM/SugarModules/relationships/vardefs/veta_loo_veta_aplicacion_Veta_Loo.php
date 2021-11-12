<?php
// created: 2019-10-17 10:45:52
$dictionary["Veta_Loo"]["fields"]["veta_loo_veta_aplicacion"] = array (
  'name' => 'veta_loo_veta_aplicacion',
  'type' => 'link',
  'relationship' => 'veta_loo_veta_aplicacion',
  'source' => 'non-db',
  'module' => 'Veta_Aplicacion',
  'bean_name' => 'Veta_Aplicacion',
  'vname' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'id_name' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
);
$dictionary["Veta_Loo"]["fields"]["veta_loo_veta_aplicacion_name"] = array (
  'name' => 'veta_loo_veta_aplicacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'save' => true,
  'id_name' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
  'link' => 'veta_loo_veta_aplicacion',
  'table' => 'veta_aplicacion',
  'module' => 'Veta_Aplicacion',
  'rname' => 'name',
);
$dictionary["Veta_Loo"]["fields"]["veta_loo_veta_aplicacionveta_aplicacion_ida"] = array (
  'name' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
  'type' => 'link',
  'relationship' => 'veta_loo_veta_aplicacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_LOO_TITLE',
);
