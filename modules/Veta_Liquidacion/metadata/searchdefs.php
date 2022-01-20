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
      'prospecto' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROSPECTO',
        'id' => 'LEAD_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'prospecto',
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
      'prospecto' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROSPECTO',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'LEAD_ID_C',
        'name' => 'prospecto',
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
      'estado_pago_colegios' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_PAGO_COLEGIOS',
        'width' => '10%',
        'name' => 'estado_pago_colegios',
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
      'asesor_comercial' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ASESOR_COMERCIAL',
        'id' => 'USER_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'asesor_comercial',
      ),
      'soel_referido' =>
          array (
              'type' => 'varchar',
              'default' => true,
              'label' => 'LBL_SOEL_REFERIDO',
              'width' => '10%',
              'name' => 'soel_referido',
              'sortable' => false,
          ),
      'soel_fecha_viaje' =>
          array (
              'type' => 'datetime',
              'default' => true,
              'label' => 'LBL_SOEL_FECHA_VIAJE',
              'width' => '10%',
              'name' => 'soel_fecha_viaje',
              'sortable' => false,
          ),
      'soel_fecha_expiracion_visa' =>
          array (
              'type' => 'datetime',
              'default' => true,
              'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
              'width' => '10%',
              'name' => 'soel_fecha_expiracion_visa',
              'sortable' => false,
          ),

      //region soel_ciudad_tmp
      'soel_ciudad_tmp'                     =>
            array(
                'type'     => 'varchar',
                'default'  => true,
                'label'    => 'LBL_SOEL_CIUDAD_TMP',
                'width'    => '10%',
                'name'     => 'soel_ciudad_tmp',
                'sortable' => false,
            ),
      //endregion
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
