<?php
$module_name = 'Veta_TRM';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PESOS' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PESOS',
    'width' => '10%',
    'default' => true,
  ),
  'AUD' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AUD',
    'width' => '10%',
    'default' => true,
  ),
  'MXN' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_MXN',
    'width' => '10%',
  ),
  'CLP' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_CLP',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
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
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
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
);
;
?>
