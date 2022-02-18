<?php
$dashletData['Veta_CursoDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'college' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_CursoDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'college' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_COLLEGE',
    'id' => 'VETA_COLLEGE_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'college',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'deposito' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_DEPOSITO',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'deposito',
  ),
  'costo_extra' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_COSTO_EXTRA',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'costo_extra',
  ),
  'costo_materiales' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_COSTO_MATERIALES',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'costo_materiales',
  ),
  'inscripcion' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_INSCRIPCION',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'inscripcion',
  ),
  'duracion' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURACION',
    'width' => '10%',
    'default' => false,
    'name' => 'duracion',
  ),
  'intake' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INTAKE',
    'width' => '10%',
    'default' => false,
    'name' => 'intake',
  ),
  'pps' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_PPS',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'pps',
  ),
);
