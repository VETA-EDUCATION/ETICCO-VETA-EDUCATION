<?php
// created: 2020-10-14 00:58:36
$dictionary["Veta_Recibo"]["fields"]["veta_requerimiento_veta_recibo"] = array (
  'name' => 'veta_requerimiento_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Requerimiento',
  'bean_name' => 'Veta_Requerimiento',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_RECIBO_FROM_VETA_REQUERIMIENTO_TITLE',
  'id_name' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
);
$dictionary["Veta_Recibo"]["fields"]["veta_requerimiento_veta_recibo_name"] = array (
  'name' => 'veta_requerimiento_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_RECIBO_FROM_VETA_REQUERIMIENTO_TITLE',
  'save' => true,
  'id_name' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
  'link' => 'veta_requerimiento_veta_recibo',
  'table' => 'veta_requerimiento',
  'module' => 'Veta_Requerimiento',
  'rname' => 'name',
);
$dictionary["Veta_Recibo"]["fields"]["veta_requerimiento_veta_reciboveta_requerimiento_ida"] = array (
  'name' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
  'type' => 'link',
  'relationship' => 'veta_requerimiento_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_REQUERIMIENTO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
);
