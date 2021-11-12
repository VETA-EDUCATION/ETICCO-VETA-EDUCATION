<?php
// created: 2019-12-10 15:06:52
$dictionary["Veta_DetalleReciboItem"]["fields"]["veta_detallereciboitem_veta_detallerecibo"] = array (
  'name' => 'veta_detallereciboitem_veta_detallerecibo',
  'type' => 'link',
  'relationship' => 'veta_detallereciboitem_veta_detallerecibo',
  'source' => 'non-db',
  'module' => 'Veta_DetalleRecibo',
  'bean_name' => 'Veta_DetalleRecibo',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBO_TITLE',
  'id_name' => 'veta_detallereciboitem_veta_detallereciboveta_detallerecibo_ida',
);
$dictionary["Veta_DetalleReciboItem"]["fields"]["veta_detallereciboitem_veta_detallerecibo_name"] = array (
  'name' => 'veta_detallereciboitem_veta_detallerecibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_detallereciboitem_veta_detallereciboveta_detallerecibo_ida',
  'link' => 'veta_detallereciboitem_veta_detallerecibo',
  'table' => 'veta_detallerecibo',
  'module' => 'Veta_DetalleRecibo',
  'rname' => 'name',
);
$dictionary["Veta_DetalleReciboItem"]["fields"]["veta_detallereciboitem_veta_detallereciboveta_detallerecibo_ida"] = array (
  'name' => 'veta_detallereciboitem_veta_detallereciboveta_detallerecibo_ida',
  'type' => 'link',
  'relationship' => 'veta_detallereciboitem_veta_detallerecibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBOITEM_TITLE',
);
