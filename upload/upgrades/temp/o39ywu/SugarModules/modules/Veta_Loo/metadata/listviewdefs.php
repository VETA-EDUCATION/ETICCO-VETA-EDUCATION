<?php
$module_name = 'Veta_Loo';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_RECEPCION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RECEPCION',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_RECEPCION2' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RECEPCION2',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_ADMISIONES' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ADMISIONES',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_ENVIO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ENVIO',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_FIRMA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_FIRMA',
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
  'VETA_LOO_VETA_APLICACION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
    'id' => 'VETA_LOO_VETA_APLICACIONVETA_APLICACION_IDA',
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
