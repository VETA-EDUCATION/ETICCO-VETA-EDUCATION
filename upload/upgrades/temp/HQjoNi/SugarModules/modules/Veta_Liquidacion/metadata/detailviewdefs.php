<?php
$module_name = 'Veta_Liquidacion';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'monto',
            'label' => 'LBL_MONTO',
          ),
          1 => 
          array (
            'name' => 'veta_liquidacion_opportunities_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estudiante',
            'studio' => 'visible',
            'label' => 'LBL_ESTUDIANTE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'total_pagado',
            'label' => 'LBL_TOTAL_PAGADO',
          ),
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_expiracion_visa',
            'label' => 'LBL_FECHA_EXPIRACION_VISA',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
;
?>
