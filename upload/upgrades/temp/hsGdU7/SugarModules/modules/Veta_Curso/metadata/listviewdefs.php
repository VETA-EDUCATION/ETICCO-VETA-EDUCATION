<?php
$module_name = 'Veta_Curso';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '6%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'COLLEGE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COLLEGE',
    'id' => 'VETA_COLLEGE_ID_C',
    'link' => true,
    'width' => '6%',
    'default' => true,
  ),
  'CAMPUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CAMPUS',
    'width' => '6%',
    'default' => true,
  ),
  'DEPOSITO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_DEPOSITO',
    'currency_format' => true,
    'width' => '6%',
  ),
  'PPS' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PPS',
    'currency_format' => true,
    'width' => '6%',
  ),
  'DURACION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURACION',
    'width' => '6%',
    'default' => true,
  ),
  'INSCRIPCION' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_INSCRIPCION',
    'currency_format' => true,
    'width' => '6%',
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
    'width' => '6%',
  ),
  'INTAKE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INTAKE',
    'width' => '6%',
    'default' => true,
  ),
  'TPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TPS',
    'width' => '6%',
    'default' => true,
  ),
  'VACACIONES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VACACIONES',
    'width' => '6%',
    'default' => true,
  ),
  'TIPO_CURSO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_CURSO',
    'width' => '6%',
    'default' => true,
  ),
  'JORNADA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JORNADA',
    'width' => '6%',
    'default' => true,
  ),
  'INTENSIDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INTENSIDAD',
    'width' => '6%',
    'default' => true,
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
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
