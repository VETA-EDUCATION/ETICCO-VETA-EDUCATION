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
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'college',
  5 => 'tipo_curso',
  6 => 'activo',
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
),
);
