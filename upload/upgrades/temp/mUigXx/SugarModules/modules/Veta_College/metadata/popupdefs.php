<?php
$popupMeta = array (
    'moduleMain' => 'Veta_College',
    'varName' => 'Veta_College',
    'orderBy' => 'veta_college.name',
    'whereClauses' => array (
  'name' => 'veta_college.name',
  'pais' => 'veta_college.pais',
  'estado' => 'veta_college.estado',
  'ciudad' => 'veta_college.ciudad',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pais',
  5 => 'estado',
  6 => 'ciudad',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'pais' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'name' => 'pais',
  ),
  'estado' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'ciudad' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'name' => 'ciudad',
  ),
),
);
