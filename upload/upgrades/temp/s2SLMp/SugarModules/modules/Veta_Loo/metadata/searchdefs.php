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
      'fecha_recepcion' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_RECEPCION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_recepcion',
      ),
      'fecha_recepcion2' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_RECEPCION2',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_recepcion2',
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
      'fecha_recepcion' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_RECEPCION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_recepcion',
      ),
      'fecha_recepcion2' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_RECEPCION2',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_recepcion2',
      ),
      'fecha_admisiones' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_ADMISIONES',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_admisiones',
      ),
      'fecha_envio' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_ENVIO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_envio',
      ),
      'fecha_firma' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_FIRMA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_firma',
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
      'fecha_expiracion_visa' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXPIRACION_VISA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_expiracion_visa',
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
