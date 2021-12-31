<?php
// created: 2020-10-14 00:58:27
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_veta_loo"] = array (
  'name' => 'veta_liquidacion_veta_loo',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_veta_loo',
  'source' => 'non-db',
  'module' => 'Veta_Loo',
  'bean_name' => 'Veta_Loo',
  'vname' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
  'id_name' => 'veta_liquidacion_veta_looveta_loo_ida',
);
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_veta_loo_name"] = array (
  'name' => 'veta_liquidacion_veta_loo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
  'save' => true,
  'id_name' => 'veta_liquidacion_veta_looveta_loo_ida',
  'link' => 'veta_liquidacion_veta_loo',
  'table' => 'veta_loo',
  'module' => 'Veta_Loo',
  'rname' => 'name',
);
$dictionary["Veta_Liquidacion"]["fields"]["veta_liquidacion_veta_looveta_loo_ida"] = array (
  'name' => 'veta_liquidacion_veta_looveta_loo_ida',
  'type' => 'link',
  'relationship' => 'veta_liquidacion_veta_loo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LIQUIDACION_TITLE',
);
