<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Curso',
    'varName' => 'Veta_Curso',
    'orderBy' => 'veta_curso.name',
    'whereClauses' => array (
  'name' => 'veta_curso.name',
  'college' => 'veta_curso.college',
  'tipo_curso' => 'veta_curso.tipo_curso',
  'activo' => 'veta_curso.activo',
  'duracion' => 'veta_curso.duracion',
  'campus' => 'veta_curso.campus',
  'jornada' => 'veta_curso.jornada',
  'created_by_name' => 'veta_curso.created_by_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'college',
  5 => 'tipo_curso',
  6 => 'activo',
  7 => 'duracion',
  8 => 'campus',
  9 => 'jornada',
  10 => 'created_by_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'college' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COLLEGE',
    'id' => 'VETA_COLLEGE_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'college',
  ),
  'tipo_curso' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_CURSO',
    'width' => '10%',
    'name' => 'tipo_curso',
  ),
  'activo' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ACTIVO',
    'width' => '10%',
    'name' => 'activo',
  ),
  'duracion' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURACION',
    'width' => '10%',
    'name' => 'duracion',
  ),
  'campus' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CAMPUS',
    'width' => '10%',
    'name' => 'campus',
  ),
  'jornada' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_JORNADA',
    'width' => '10%',
    'name' => 'jornada',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'name' => 'created_by_name',
  ),
),
);
