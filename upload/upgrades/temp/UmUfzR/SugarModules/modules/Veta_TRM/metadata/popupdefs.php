<?php
$popupMeta = array (
    'moduleMain' => 'Veta_TRM',
    'varName' => 'Veta_TRM',
    'orderBy' => 'veta_trm.name',
    'whereClauses' => array (
  'name' => 'veta_trm.name',
  'pesos' => 'veta_trm.pesos',
  'aud' => 'veta_trm.aud',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pesos',
  5 => 'aud',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'pesos' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PESOS',
    'width' => '10%',
    'name' => 'pesos',
  ),
  'aud' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AUD',
    'width' => '10%',
    'name' => 'aud',
  ),
),
);
