<?php
$module_name = 'Veta_COE';
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
      'fecha_envio_estudiante' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_envio_estudiante',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
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
      'veta_coe_veta_aplicacion_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
        'id' => 'VETA_COE_VETA_APLICACIONVETA_APLICACION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_coe_veta_aplicacion_name',
      ),
      'veta_coe_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'VETA_COE_OPPORTUNITIESOPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_coe_opportunities_name',
      ),
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado',
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
