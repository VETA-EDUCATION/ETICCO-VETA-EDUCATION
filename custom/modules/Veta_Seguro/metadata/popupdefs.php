<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Seguro',
    'varName' => 'Veta_Seguro',
    'orderBy' => 'veta_seguro.name',
    'whereClauses' => array (
  'name' => 'veta_seguro.name',
  'duracion' => 'veta_seguro.duracion',
  'activo_c' => 'veta_seguro_cstm.activo_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'duracion',
  5 => 'activo_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'duracion' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURACION',
    'width' => '10%',
    'name' => 'duracion',
  ),
  'activo_c' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_ACTIVO',
    'width' => '10%',
    'name' => 'activo_c',
  ),
),
);
