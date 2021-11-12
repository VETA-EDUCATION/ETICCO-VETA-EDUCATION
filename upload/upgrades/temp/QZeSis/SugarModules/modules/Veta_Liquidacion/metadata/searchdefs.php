<?php
$module_name = 'Veta_Liquidacion';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'estudiante' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ESTUDIANTE',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'estudiante',
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
      'estudiante' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ESTUDIANTE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACT_ID_C',
        'name' => 'estudiante',
      ),
      'veta_liquidacion_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'VETA_LIQUIDACION_OPPORTUNITIESOPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_liquidacion_opportunities_name',
      ),
      'veta_liquidacion_veta_loo_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
        'id' => 'VETA_LIQUIDACION_VETA_LOOVETA_LOO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_liquidacion_veta_loo_name',
      ),
      'fecha_expiracion_visa' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXPIRACION_VISA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_expiracion_visa',
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
