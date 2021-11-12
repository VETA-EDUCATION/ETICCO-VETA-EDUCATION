<?php
$module_name = 'Veta_Seguro';
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
          1 => 
          array (
            'name' => 'duracion',
            'label' => 'LBL_DURACION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'single',
            'label' => 'LBL_SINGLE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'couple',
            'label' => 'LBL_COUPLE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'family',
            'label' => 'LBL_FAMILY',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
