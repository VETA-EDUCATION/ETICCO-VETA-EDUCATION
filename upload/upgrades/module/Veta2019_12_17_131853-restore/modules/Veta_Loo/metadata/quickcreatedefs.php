<?php
$module_name = 'Veta_Loo';
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => '',
        ),
        1 => 
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
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_firma',
            'label' => 'LBL_FECHA_FIRMA',
          ),
          1 => 
          array (
            'name' => 'veta_loo_veta_aplicacion_name',
            'label' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'estado_loo',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_LOO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
