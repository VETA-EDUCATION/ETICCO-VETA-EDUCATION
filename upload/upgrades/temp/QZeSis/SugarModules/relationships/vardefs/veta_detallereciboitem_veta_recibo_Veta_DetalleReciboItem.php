<?php
// created: 2019-12-10 15:06:52
$dictionary["Veta_DetalleReciboItem"]["fields"]["veta_detallereciboitem_veta_recibo"] = array (
  'name' => 'veta_detallereciboitem_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_detallereciboitem_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_detallereciboitem_veta_reciboveta_recibo_ida',
);
$dictionary["Veta_DetalleReciboItem"]["fields"]["veta_detallereciboitem_veta_recibo_name"] = array (
  'name' => 'veta_detallereciboitem_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_detallereciboitem_veta_reciboveta_recibo_ida',
  'link' => 'veta_detallereciboitem_veta_recibo',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Veta_DetalleReciboItem"]["fields"]["veta_detallereciboitem_veta_reciboveta_recibo_ida"] = array (
  'name' => 'veta_detallereciboitem_veta_reciboveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_detallereciboitem_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_DETALLERECIBOITEM_TITLE',
);
