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
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
