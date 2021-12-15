<?php
$module_name = 'Veta_COE';
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
      'fecha_expiracion_visa' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_EXPIRACION_VISA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_expiracion_visa',
      ),
      'fecha_solicitud' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_SOLICITUD',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_solicitud',
      ),
      'fecha_correccion' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_CORRECCION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_correccion',
      ),
      'fecha_correccion2' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_CORRECCION2',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_correccion2',
      ),
      'fecha_envio_estudiante' => 
      array (
        'type' => 'datetimecombo',
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
      'veta_coe_veta_liquidacion_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
        'id' => 'VETA_COE_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_coe_veta_liquidacion_name',
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
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado',
      ),
      'assigned_user_name' => 
      array (
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
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
