<?php
$module_name = 'Doc_Documentos';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'ayuda' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_AYUDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ayuda',
      ),
      'solicitadopor' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SOLICITADOPOR',
        'width' => '10%',
        'default' => true,
        'name' => 'solicitadopor',
      ),
      'observaciones' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_OBSERVACIONES',
        'width' => '10%',
        'default' => true,
        'name' => 'observaciones',
      ),
      'recursos' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_RECURSOS',
        'width' => '10%',
        'default' => true,
        'name' => 'recursos',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
