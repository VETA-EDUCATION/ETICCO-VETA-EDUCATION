<?php
$module_name = 'Veta_DetalleReciboItem';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MONTO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DETALLE_RECIBO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DETALLE_RECIBO',
    'id' => 'VETA_DETALLERECIBO_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'VETA_DETALLERECIBOITEM_VETA_RECIBO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_DETALLERECIBOITEM_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBO_TITLE',
    'id' => 'VETA_DETALLERECIBOITEM_VETA_DETALLERECIBOVETA_DETALLERECIBO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
