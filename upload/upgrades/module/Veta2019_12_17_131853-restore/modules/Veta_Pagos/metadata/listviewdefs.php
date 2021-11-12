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
  'ESTUDIANTE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PROSPECTO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROSPECTO',
    'id' => 'LEAD_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MEDIO_PAGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MEDIO_PAGO',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'MONTO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTO',
    'currency_format' => true,
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
