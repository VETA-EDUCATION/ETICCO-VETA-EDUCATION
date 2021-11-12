<?php
$popupMeta = array (
    'moduleMain' => 'Veta_LooCorreccion',
    'varName' => 'Veta_LooCorreccion',
    'orderBy' => 'veta_loocorreccion.name',
    'whereClauses' => array (
  'name' => 'veta_loocorreccion.name',
  'fecha_solicitud' => 'veta_loocorreccion.fecha_solicitud',
  'fecha_correccion' => 'veta_loocorreccion.fecha_correccion',
  'assigned_user_id' => 'veta_loocorreccion.assigned_user_id',
  'veta_loocorreccion_veta_loo_name' => 'veta_loocorreccion.veta_loocorreccion_veta_loo_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fecha_solicitud',
  5 => 'fecha_correccion',
  6 => 'assigned_user_id',
  7 => 'veta_loocorreccion_veta_loo_name',
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
  'veta_loocorreccion_veta_loo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOO_TITLE',
    'id' => 'VETA_LOOCORRECCION_VETA_LOOVETA_LOO_IDA',
    'width' => '10%',
    'name' => 'veta_loocorreccion_veta_loo_name',
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
),
);
