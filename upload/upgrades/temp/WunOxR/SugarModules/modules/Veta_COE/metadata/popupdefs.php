<?php
$popupMeta = array (
    'moduleMain' => 'Veta_COE',
    'varName' => 'Veta_COE',
    'orderBy' => 'veta_coe.name',
    'whereClauses' => array (
  'name' => 'veta_coe.name',
  'fecha_solicitud' => 'veta_coe.fecha_solicitud',
  'fecha_correccion' => 'veta_coe.fecha_correccion',
  'fecha_envio_estudiante' => 'veta_coe.fecha_envio_estudiante',
  'assigned_user_id' => 'veta_coe.assigned_user_id',
  'veta_coe_veta_aplicacion_name' => 'veta_coe.veta_coe_veta_aplicacion_name',
  'veta_coe_opportunities_name' => 'veta_coe.veta_coe_opportunities_name',
  'estado' => 'veta_coe.estado',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fecha_solicitud',
  5 => 'fecha_correccion',
  6 => 'fecha_envio_estudiante',
  7 => 'assigned_user_id',
  8 => 'veta_coe_veta_aplicacion_name',
  9 => 'veta_coe_opportunities_name',
  10 => 'estado',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'fecha_solicitud' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_SOLICITUD',
    'width' => '10%',
    'name' => 'fecha_solicitud',
  ),
  'fecha_correccion' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_CORRECCION',
    'width' => '10%',
    'name' => 'fecha_correccion',
  ),
  'fecha_envio_estudiante' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
    'width' => '10%',
    'name' => 'fecha_envio_estudiante',
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
    'width' => '10%',
  ),
  'veta_coe_veta_aplicacion_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
    'id' => 'VETA_COE_VETA_APLICACIONVETA_APLICACION_IDA',
    'width' => '10%',
    'name' => 'veta_coe_veta_aplicacion_name',
  ),
  'veta_coe_opportunities_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_COE_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'name' => 'veta_coe_opportunities_name',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
),
);
