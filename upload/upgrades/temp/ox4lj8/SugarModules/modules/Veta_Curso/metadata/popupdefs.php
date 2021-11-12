<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Curso',
    'varName' => 'Veta_Curso',
    'orderBy' => 'veta_curso.name',
    'whereClauses' => array (
  'name' => 'veta_curso.name',
  'college' => 'veta_curso.college',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'college',
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
),
);
