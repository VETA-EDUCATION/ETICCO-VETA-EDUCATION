<?php
$dashletData['Veta_LooDashlet']['searchFields'] = array (
  'fecha_recepcion' => 
  array (
    'default' => '',
  ),
  'fecha_recepcion2' => 
  array (
    'default' => '',
  ),
  'fecha_admisiones' => 
  array (
    'default' => '',
  ),
  'fecha_envio' => 
  array (
    'default' => '',
  ),
  'fecha_firma' => 
  array (
    'default' => '',
  ),
  'estado' => 
  array (
    'default' => '',
  ),
  'veta_loo_veta_aplicacion_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_LooDashlet']['columns'] = array (
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
  'estado' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
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
