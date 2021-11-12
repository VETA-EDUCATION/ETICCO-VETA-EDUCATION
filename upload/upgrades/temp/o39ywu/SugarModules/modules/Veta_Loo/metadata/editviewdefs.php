<?php
$module_name = 'Veta_Loo';
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
            'name' => 'fecha_recepcion',
            'label' => 'LBL_FECHA_RECEPCION',
          ),
          1 => 
          array (
            'name' => 'fecha_recepcion2',
            'label' => 'LBL_FECHA_RECEPCION2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_admisiones',
            'label' => 'LBL_FECHA_ADMISIONES',
          ),
          1 => 
          array (
            'name' => 'fecha_envio',
            'label' => 'LBL_FECHA_ENVIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fecha_firma',
            'label' => 'LBL_FECHA_FIRMA',
          ),
          1 => 
          array (
            'name' => 'veta_loo_veta_aplicacion_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
