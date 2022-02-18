<?php
// created: 2022-01-28 10:25:09
$dictionary["Veta_Presupuesto"]["fields"]["veta_requerimiento_veta_presupuesto"] = array (
  'name' => 'veta_requerimiento_veta_presupuesto',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_presupuesto',
  'source' => 'non-db',
  'module' => 'Veta_Requerimiento',
  'bean_name' => 'Veta_Requerimiento',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_REQUERIMIENTO_TITLE',
  'id_name' => 'veta_requerimiento_veta_presupuestoveta_requerimiento_ida',
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_requerimiento_veta_presupuesto_name"] = array (
  'name' => 'veta_requerimiento_veta_presupuesto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_REQUERIMIENTO_TITLE',
  'save' => true,
  'id_name' => 'veta_requerimiento_veta_presupuestoveta_requerimiento_ida',
  'link' => 'veta_requerimiento_veta_presupuesto',
  'table' => 'veta_requerimiento',
  'module' => 'Veta_Requerimiento',
  'rname' => 'name',
);
$dictionary["Veta_Presupuesto"]["fields"]["veta_requerimiento_veta_presupuestoveta_requerimiento_ida"] = array (
  'name' => 'veta_requerimiento_veta_presupuestoveta_requerimiento_ida',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_presupuesto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
);
