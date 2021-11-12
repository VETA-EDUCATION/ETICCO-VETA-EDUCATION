<?php
$popupMeta = array (
    'moduleMain' => 'Veta_COE',
    'varName' => 'Veta_COE',
    'orderBy' => 'veta_coe.name',
    'whereClauses' => array (
  'name' => 'veta_coe.name',
  'fecha_solicitud' => 'veta_coe.fecha_solicitud',
  'fecha_envio_estudiante' => 'veta_coe.fecha_envio_estudiante',
  'veta_coe_veta_aplicacion_name' => 'veta_coe.veta_coe_veta_aplicacion_name',
  'veta_coe_opportunities_name' => 'veta_coe.veta_coe_opportunities_name',
  'estado' => 'veta_coe.estado',
  'estudiante' => 'veta_coe.estudiante',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fecha_solicitud',
  6 => 'fecha_envio_estudiante',
  8 => 'veta_coe_veta_aplicacion_name',
  9 => 'veta_coe_opportunities_name',
  10 => 'estado',
  11 => 'estudiante',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
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
    'name' => 'estudiante',
  ),
  'fecha_solicitud' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_SOLICITUD',
    'width' => '10%',
    'name' => 'fecha_solicitud',
  ),
  'fecha_envio_estudiante' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
    'width' => '10%',
    'name' => 'fecha_envio_estudiante',
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
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
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
),
);
