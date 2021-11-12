<?php
$module_name = 'Veta_COE';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estudiante',
            'studio' => 'visible',
            'label' => 'LBL_ESTUDIANTE',
          ),
          1 => 
          array (
            'name' => 'prospecto',
            'studio' => 'visible',
            'label' => 'LBL_PROSPECTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'fecha_expiracion_visa',
            'label' => 'LBL_FECHA_EXPIRACION_VISA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_solicitud',
            'label' => 'LBL_FECHA_SOLICITUD',
          ),
          1 => 
          array (
            'name' => 'fecha_envio_estudiante',
            'label' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_correccion',
            'label' => 'LBL_FECHA_CORRECCION',
          ),
          1 => 
          array (
            'name' => 'fecha_correccion2',
            'label' => 'LBL_FECHA_CORRECCION2',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'veta_coe_veta_aplicacion_name',
          ),
          1 => 
          array (
            'name' => 'veta_coe_opportunities_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
