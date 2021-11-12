<?php
// created: 2019-11-29 06:45:25
$dictionary["Veta_DetalleRecibo"]["fields"]["veta_detallerecibo_veta_recibo"] = array (
  'name' => 'veta_detallerecibo_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_detallerecibo_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_detallerecibo_veta_reciboveta_recibo_ida',
);
$dictionary["Veta_DetalleRecibo"]["fields"]["veta_detallerecibo_veta_recibo_name"] = array (
  'name' => 'veta_detallerecibo_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_detallerecibo_veta_reciboveta_recibo_ida',
  'link' => 'veta_detallerecibo_veta_recibo',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Veta_DetalleRecibo"]["fields"]["veta_detallerecibo_veta_reciboveta_recibo_ida"] = array (
  'name' => 'veta_detallerecibo_veta_reciboveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_detallerecibo_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_DETALLERECIBO_TITLE',
);
