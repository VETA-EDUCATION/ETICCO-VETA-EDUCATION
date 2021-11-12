<?php
$module_name = 'Veta_Curso';
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
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'college' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_COLLEGE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'VETA_COLLEGE_ID_C',
        'name' => 'college',
      ),
      'tipo_curso' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TIPO_CURSO',
        'width' => '10%',
        'default' => true,
        'name' => 'tipo_curso',
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
