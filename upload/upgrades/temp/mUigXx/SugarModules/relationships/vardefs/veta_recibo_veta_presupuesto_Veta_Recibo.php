<?php
// created: 2019-11-29 18:55:43
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_veta_presupuesto"] = array (
  'name' => 'veta_recibo_veta_presupuesto',
  'type' => 'link',
  'relationship' => 'veta_recibo_veta_presupuesto',
  'source' => 'non-db',
  'module' => 'Veta_Presupuesto',
  'bean_name' => 'Veta_Presupuesto',
  'vname' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
  'id_name' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_veta_presupuesto_name"] = array (
  'name' => 'veta_recibo_veta_presupuesto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
  'save' => true,
  'id_name' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
  'link' => 'veta_recibo_veta_presupuesto',
  'table' => 'veta_presupuesto',
  'module' => 'Veta_Presupuesto',
  'rname' => 'name',
);
$dictionary["Veta_Recibo"]["fields"]["veta_recibo_veta_presupuestoveta_presupuesto_ida"] = array (
  'name' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
  'type' => 'link',
  'relationship' => 'veta_recibo_veta_presupuesto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_RECIBO_TITLE',
);
