<?php
// created: 2019-12-05 18:00:54
$dictionary["Veta_DetallePresupuesto"]["fields"]["veta_detallepresupuesto_veta_presupuesto"] = array (
  'name' => 'veta_detallepresupuesto_veta_presupuesto',
  'type' => 'link',
  'relationship' => 'veta_detallepresupuesto_veta_presupuesto',
  'source' => 'non-db',
  'module' => 'Veta_Presupuesto',
  'bean_name' => 'Veta_Presupuesto',
  'vname' => 'LBL_VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
  'id_name' => 'veta_detallepresupuesto_veta_presupuestoveta_presupuesto_ida',
);
$dictionary["Veta_DetallePresupuesto"]["fields"]["veta_detallepresupuesto_veta_presupuesto_name"] = array (
  'name' => 'veta_detallepresupuesto_veta_presupuesto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
  'save' => true,
  'id_name' => 'veta_detallepresupuesto_veta_presupuestoveta_presupuesto_ida',
  'link' => 'veta_detallepresupuesto_veta_presupuesto',
  'table' => 'veta_presupuesto',
  'module' => 'Veta_Presupuesto',
  'rname' => 'name',
);
$dictionary["Veta_DetallePresupuesto"]["fields"]["veta_detallepresupuesto_veta_presupuestoveta_presupuesto_ida"] = array (
  'name' => 'veta_detallepresupuesto_veta_presupuestoveta_presupuesto_ida',
  'type' => 'link',
  'relationship' => 'veta_detallepresupuesto_veta_presupuesto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTO_FROM_VETA_DETALLEPRESUPUESTO_TITLE',
);
