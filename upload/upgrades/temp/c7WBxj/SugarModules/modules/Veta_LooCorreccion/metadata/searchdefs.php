<?php
$module_name = 'Veta_LooCorreccion';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'fecha_solicitud' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_SOLICITUD',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_solicitud',
      ),
      'fecha_correccion' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_CORRECCION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_correccion',
      ),
      'veta_loocorreccion_veta_loo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOO_TITLE',
        'id' => 'VETA_LOOCORRECCION_VETA_LOOVETA_LOO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_loocorreccion_veta_loo_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
