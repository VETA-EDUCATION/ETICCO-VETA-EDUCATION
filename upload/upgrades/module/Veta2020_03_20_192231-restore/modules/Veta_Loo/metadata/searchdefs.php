<?php
$module_name = 'Veta_Loo';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
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
      'estado_loo' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_LOO',
        'width' => '10%',
        'default' => true,
        'name' => 'estado_loo',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
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
      'estado_loo' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_LOO',
        'width' => '10%',
        'default' => true,
        'name' => 'estado_loo',
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
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'fecha_admisiones' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_ADMISIONES',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_admisiones',
      ),
      'fecha_recepcion' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_RECEPCION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_recepcion',
      ),
      'fecha_recepcion2' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_RECEPCION2',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_recepcion2',
      ),
      'fecha_firma' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_FIRMA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_firma',
      ),
      'fecha_envio' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_FECHA_ENVIO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_envio',
      ),
      'veta_loo_veta_aplicacion_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
        'id' => 'VETA_LOO_VETA_APLICACIONVETA_APLICACION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_loo_veta_aplicacion_name',
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
