<?php
$module_name = 'Veta_Abono';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'abono_c',
            'label' => 'LBL_ABONO',
          ),
          1 => 
          array (
            'name' => 'monedapago_c',
            'studio' => 'visible',
            'label' => 'LBL_MONEDAPAGO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'descuentotasa_c',
            'label' => 'LBL_DESCUENTOTASA',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
