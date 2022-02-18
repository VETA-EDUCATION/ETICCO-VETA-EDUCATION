<?php
$module_name = 'Veta_Seguro';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DURACION' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_DURACION',
    'width' => '10%',
  ),
  'SINGLE' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_SINGLE',
    'width' => '10%',
  ),
  'COUPLE' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_COUPLE',
    'width' => '10%',
  ),
  'FAMILY' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_FAMILY',
    'width' => '10%',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
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
