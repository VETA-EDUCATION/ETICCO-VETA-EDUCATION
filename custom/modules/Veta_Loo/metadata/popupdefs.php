<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Loo',
    'varName' => 'Veta_Loo',
    'orderBy' => 'veta_loo.name',
    'whereClauses' => array (
  'fecha_recepcion2' => 'veta_loo.fecha_recepcion2',
  'fecha_recepcion' => 'veta_loo.fecha_recepcion',
  'fecha_admisiones' => 'veta_loo.fecha_admisiones',
  'fecha_firma' => 'veta_loo.fecha_firma',
  'fecha_envio' => 'veta_loo.fecha_envio',
  'veta_loo_veta_aplicacion_name' => 'veta_loo.veta_loo_veta_aplicacion_name',
  'name' => 'veta_loo.name',
  'estudiante' => 'veta_loo.estudiante',
  'estado_loo' => 'veta_loo.estado_loo',
  'prospecto' => 'veta_loo.prospecto',
),
    'searchInputs' => array (
  4 => 'fecha_recepcion2',
  5 => 'fecha_recepcion',
  6 => 'fecha_admisiones',
  7 => 'fecha_firma',
  8 => 'fecha_envio',
  9 => 'veta_loo_veta_aplicacion_name',
  11 => 'name',
  12 => 'estudiante',
  13 => 'estado_loo',
  14 => 'prospecto',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
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
    'name' => 'prospecto',
  ),
  'fecha_recepcion' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RECEPCION',
    'width' => '10%',
    'name' => 'fecha_recepcion',
  ),
  'fecha_recepcion2' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RECEPCION2',
    'width' => '10%',
    'name' => 'fecha_recepcion2',
  ),
  'fecha_admisiones' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ADMISIONES',
    'width' => '10%',
    'name' => 'fecha_admisiones',
  ),
  'fecha_firma' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_FIRMA',
    'width' => '10%',
    'name' => 'fecha_firma',
  ),
  'fecha_envio' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_ENVIO',
    'width' => '10%',
    'name' => 'fecha_envio',
  ),
  'estado_loo' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_LOO',
    'width' => '10%',
    'name' => 'estado_loo',
  ),
  'veta_loo_veta_aplicacion_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
    'id' => 'VETA_LOO_VETA_APLICACIONVETA_APLICACION_IDA',
    'width' => '10%',
    'name' => 'veta_loo_veta_aplicacion_name',
  ),
),
);
