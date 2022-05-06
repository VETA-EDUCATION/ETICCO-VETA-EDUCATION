<?php
$module_name = 'Doc_Documentos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RECURSOS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_RECURSOS',
    'width' => '10%',
    'default' => true,
  ),
  'OBSERVACIONES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OBSERVACIONES',
    'width' => '10%',
    'default' => true,
  ),
  'SOLICITADOPOR' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOLICITADOPOR',
    'width' => '10%',
    'default' => true,
  ),
  'AYUDA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AYUDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
