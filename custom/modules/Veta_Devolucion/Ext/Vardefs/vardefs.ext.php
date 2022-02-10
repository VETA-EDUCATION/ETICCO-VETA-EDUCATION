<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:21
$dictionary["Veta_Devolucion"]["fields"]["veta_devolucion_veta_recibo"] = array (
  'name' => 'veta_devolucion_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_devolucion_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_devolucion_veta_reciboveta_recibo_ida',
);
$dictionary["Veta_Devolucion"]["fields"]["veta_devolucion_veta_recibo_name"] = array (
  'name' => 'veta_devolucion_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_devolucion_veta_reciboveta_recibo_ida',
  'link' => 'veta_devolucion_veta_recibo',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Veta_Devolucion"]["fields"]["veta_devolucion_veta_reciboveta_recibo_ida"] = array (
  'name' => 'veta_devolucion_veta_reciboveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_devolucion_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_DEVOLUCION_TITLE',
);


 // created: 2022-02-09 15:16:31
$dictionary['Veta_Devolucion']['fields']['monedadevolucion_c']['inline_edit']='1';
$dictionary['Veta_Devolucion']['fields']['monedadevolucion_c']['labelValue']='Moneda Devolucion';

 

 // created: 2022-02-09 15:47:11
$dictionary['Veta_Devolucion']['fields']['cantidaddev_c']['inline_edit']='1';
$dictionary['Veta_Devolucion']['fields']['cantidaddev_c']['labelValue']='Cantidad Devuelta';

 
?>