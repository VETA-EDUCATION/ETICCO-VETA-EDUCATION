<?php
$dashletData['Veta_COEDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'fecha_solicitud' => 
  array (
    'default' => '',
  ),
  'fecha_correccion' => 
  array (
    'default' => '',
  ),
  'fecha_envio_estudiante' => 
  array (
    'default' => '',
  ),
  'veta_coe_opportunities_name' => 
  array (
    'default' => '',
  ),
  'veta_coe_veta_aplicacion_name' => 
  array (
    'default' => '',
  ),
  'estado' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_COEDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
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
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
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
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
