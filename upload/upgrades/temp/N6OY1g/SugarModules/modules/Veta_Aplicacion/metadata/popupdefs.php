<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Aplicacion',
    'varName' => 'Veta_Aplicacion',
    'orderBy' => 'veta_aplicacion.name',
    'whereClauses' => array (
  'name' => 'veta_aplicacion.name',
  'campus' => 'veta_aplicacion.campus',
  'tipo_curso' => 'veta_aplicacion.tipo_curso',
  'assigned_user_id' => 'veta_aplicacion.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'campus',
  5 => 'tipo_curso',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'campus' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CAMPUS',
    'width' => '10%',
    'name' => 'campus',
  ),
  'tipo_curso' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_CURSO',
    'width' => '10%',
    'name' => 'tipo_curso',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'CAMPUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CAMPUS',
    'width' => '10%',
    'default' => true,
    'name' => 'campus',
  ),
  'CURSO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CURSO',
    'width' => '10%',
    'default' => true,
    'name' => 'curso',
  ),
  'DURACION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DURACION',
    'width' => '10%',
    'default' => true,
    'name' => 'duracion',
  ),
  'INTENSIDAD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INTENSIDAD',
    'width' => '10%',
    'default' => true,
    'name' => 'intensidad',
  ),
  'JORNADA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_JORNADA',
    'width' => '10%',
    'default' => true,
    'name' => 'jornada',
  ),
  'TIPO_CURSO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_CURSO',
    'width' => '10%',
    'default' => true,
    'name' => 'tipo_curso',
  ),
  'PAIS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'name' => 'pais',
  ),
  'DEPARTAMENTO' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'width' => '10%',
    'default' => true,
    'name' => 'departamento',
  ),
  'CIUDAD' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'default' => true,
    'name' => 'ciudad',
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'VETA_APLICACION_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_APLICACION_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_aplicacion_opportunities_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
