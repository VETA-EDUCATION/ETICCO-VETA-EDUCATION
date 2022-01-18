<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:24
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


// created: 2021-09-02 13:15:25
$dictionary["Veta_DetalleRecibo"]["fields"]["veta_detallereciboitem_veta_detallerecibo"] = array (
  'name' => 'veta_detallereciboitem_veta_detallerecibo',
  'type' => 'link',
  'relationship' => 'veta_detallereciboitem_veta_detallerecibo',
  'source' => 'non-db',
  'module' => 'Veta_DetalleReciboItem',
  'bean_name' => 'Veta_DetalleReciboItem',
  'side' => 'right',
  'vname' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBOITEM_TITLE',
);

?>