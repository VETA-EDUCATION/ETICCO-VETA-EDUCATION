<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2021-09-02 13:15:21
$dictionary["Veta_Abono"]["fields"]["veta_abono_veta_recibo"] = array (
  'name' => 'veta_abono_veta_recibo',
  'type' => 'link',
  'relationship' => 'veta_abono_veta_recibo',
  'source' => 'non-db',
  'module' => 'Veta_Recibo',
  'bean_name' => 'Veta_Recibo',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'id_name' => 'veta_abono_veta_reciboveta_recibo_ida',
);
$dictionary["Veta_Abono"]["fields"]["veta_abono_veta_recibo_name"] = array (
  'name' => 'veta_abono_veta_recibo_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
  'save' => true,
  'id_name' => 'veta_abono_veta_reciboveta_recibo_ida',
  'link' => 'veta_abono_veta_recibo',
  'table' => 'veta_recibo',
  'module' => 'Veta_Recibo',
  'rname' => 'name',
);
$dictionary["Veta_Abono"]["fields"]["veta_abono_veta_reciboveta_recibo_ida"] = array (
  'name' => 'veta_abono_veta_reciboveta_recibo_ida',
  'type' => 'link',
  'relationship' => 'veta_abono_veta_recibo',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_ABONO_TITLE',
);


 // created: 2021-11-21 14:33:27
$dictionary['Veta_Abono']['fields']['descuentotasa_c']['inline_edit']='1';
$dictionary['Veta_Abono']['fields']['descuentotasa_c']['labelValue']='Descuento Tasa';

 

 // created: 2021-11-21 14:33:09
$dictionary['Veta_Abono']['fields']['monedapago_c']['inline_edit']='1';
$dictionary['Veta_Abono']['fields']['monedapago_c']['labelValue']='Moneda Pago';

 

 // created: 2021-11-21 14:33:38
$dictionary['Veta_Abono']['fields']['abono_c']['inline_edit']='1';
$dictionary['Veta_Abono']['fields']['abono_c']['labelValue']='Abono';

 
?>