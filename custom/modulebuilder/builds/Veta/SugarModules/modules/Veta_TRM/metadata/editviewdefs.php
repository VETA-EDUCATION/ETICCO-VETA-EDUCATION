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
            'name' => 'aud',
            'label' => 'LBL_AUD',
          ),
          1 => 
          array (
            'name' => 'pesos',
            'label' => 'LBL_PESOS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mxn',
            'label' => 'LBL_MXN',
          ),
          1 => 
          array (
            'name' => 'clp',
            'label' => 'LBL_CLP',
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
