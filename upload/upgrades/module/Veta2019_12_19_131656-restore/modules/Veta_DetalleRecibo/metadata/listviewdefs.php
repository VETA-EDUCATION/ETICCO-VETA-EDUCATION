<?php
$module_name = 'Veta_DetalleRecibo';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'INSTITUCION' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_INSTITUCION',
    'id' => 'VETA_COLLEGE_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'INTAKE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INTAKE',
    'width' => '10%',
    'default' => true,
  ),
  'DURACION' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_DURACION',
    'width' => '10%',
  ),
  'INSCRIPCION' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_INSCRIPCION',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PRECIO_POR_SEMANA' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PRECIO_POR_SEMANA',
    'currency_format' => true,
    'width' => '10%',
  ),
  'COSTO_MATERIALES' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_COSTO_MATERIALES',
    'currency_format' => true,
    'width' => '10%',
  ),
  'COSTO_EXTRA' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_COSTO_EXTRA',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DEPOSITO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_DEPOSITO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'BONO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_BONO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'OTROS' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_OTROS',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TOTAL_CURSO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_CURSO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'VETA_DETALLERECIBO_VETA_RECIBO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DETALLERECIBO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_DETALLERECIBO_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'PRECIO_CURSO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRECIO_CURSO',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPCION_BONO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DESCRIPCION_BONO',
    'width' => '10%',
    'default' => false,
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
