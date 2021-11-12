<?php
$module_name = 'Veta_Pagos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MEDIO_PAGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MEDIO_PAGO',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_PAGOS_VETA_LIQUIDACION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
    'id' => 'VETA_PAGOS_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
    'width' => '10%',
    'default' => true,
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
