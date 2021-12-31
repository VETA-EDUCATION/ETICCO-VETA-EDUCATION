<?php
$module_name = 'Veta_Aplicacion';
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
  'CAMPUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CAMPUS',
    'width' => '10%',
    'default' => true,
  ),
  'CURSO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CURSO',
    'width' => '10%',
    'default' => true,
  ),
  'DURACION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DURACION',
    'width' => '10%',
    'default' => true,
  ),
  'INTENSIDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INTENSIDAD',
    'width' => '10%',
    'default' => true,
  ),
  'JORNADA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JORNADA',
    'width' => '10%',
    'default' => true,
  ),
  'TIPO_CURSO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_CURSO',
    'width' => '10%',
    'default' => true,
  ),
  'CIUDAD' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO_APLICACION' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_APLICACION',
    'width' => '10%',
  ),
  'VETA_APLICACION_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_APLICACION_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_EXPIRACION_VISA' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_EXPIRACION_VISA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_INICIO' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_RECEPCION_1' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_RECEPCION_1',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_RECEPCION_2' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_RECEPCION_2',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_ENVIO' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_ENVIO',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_ADMISIONES' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_ADMISIONES',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'VACACIONES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VACACIONES',
    'width' => '10%',
    'default' => false,
  ),
  'TPS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TPS',
    'width' => '10%',
    'default' => false,
  ),
  'PAIS' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
  ),
  'DEPARTAMENTO' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'width' => '10%',
    'default' => false,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
);
;
?>
