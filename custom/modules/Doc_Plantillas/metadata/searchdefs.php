<?php
$module_name = 'Doc_Plantillas';
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
      'tipoproceso' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TIPOPROCESO',
        'width' => '10%',
        'default' => true,
        'name' => 'tipoproceso',
      ),
      'tipovisa' => 
      array (
        'type' => 'dynamicenum',
        'studio' => 'visible',
        'label' => 'LBL_TIPOVISA',
        'width' => '10%',
        'default' => true,
        'name' => 'tipovisa',
      ),
      'pais' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PAIS',
        'width' => '10%',
        'default' => true,
        'name' => 'pais',
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
      'nacionalidad' => 
      array (
        'type' => 'dynamicenum',
        'studio' => 'visible',
        'label' => 'LBL_NACIONALIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'nacionalidad',
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
