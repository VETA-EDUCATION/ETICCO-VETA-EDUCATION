<?php
$module_name = 'Veta_PagoColegios';
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
    'label' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'OFICINA_PAGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OFICINA_PAGO',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_PAGOCOLEGIOS_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_PAGOCOLEGIOS_OPPORTUNITIESOPPORTUNITIES_IDA',
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
