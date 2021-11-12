<?php
$module_name = 'Veta_College';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'pais' => 
      array (
        'type' => 'enum',
        'default' => true,
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
        'default' => true,
        'name' => 'estado',
      ),
      'ciudad' => 
      array (
        'type' => 'dynamicenum',
        'studio' => 'visible',
        'label' => 'LBL_CIUDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'ciudad',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
