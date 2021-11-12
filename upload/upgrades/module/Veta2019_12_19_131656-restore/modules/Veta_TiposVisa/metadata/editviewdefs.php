<?php
$module_name = 'Veta_TiposVisa';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_visa',
            'label' => 'LBL_TOTAL_VISA',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'costo_examen',
            'label' => 'LBL_COSTO_EXAMEN',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
