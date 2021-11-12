<?php
$dashletData['Veta_PagosDashlet']['searchFields'] = array (
  'medio_pago' => 
  array (
    'default' => '',
  ),
  'veta_pagos_veta_liquidacion_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_PagosDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'medio_pago' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MEDIO_PAGO',
    'width' => '10%',
    'default' => true,
    'name' => 'medio_pago',
  ),
  'veta_pagos_veta_liquidacion_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
    'id' => 'VETA_PAGOS_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
    'width' => '10%',
    'default' => true,
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
