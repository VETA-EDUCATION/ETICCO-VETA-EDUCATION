<?php
$module_name = 'Veta_TRM';
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
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'monedafrom_c',
            'label' => 'LBL_MONEDAFROM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'monedato_c',
            'label' => 'LBL_MONEDATO',
          ),
          1 => 
          array (
            'name' => 'tasaadm_c',
            'label' => 'LBL_TASAADM',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
