<?php
$module_name = 'Veta_PagoColegios';
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
            'name' => 'oficina_pago',
            'label' => 'LBL_OFICINA_PAGO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'monto',
            'label' => 'LBL_MONTO',
          ),
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'veta_pagocolegios_opportunities_name',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
