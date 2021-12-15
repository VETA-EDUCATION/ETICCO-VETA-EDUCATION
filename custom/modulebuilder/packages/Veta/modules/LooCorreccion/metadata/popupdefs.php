<?php
$popupMeta = array (
    'moduleMain' => 'Veta_LooCorreccion',
    'varName' => 'Veta_LooCorreccion',
    'orderBy' => 'veta_loocorreccion.name',
    'whereClauses' => array (
  'name' => 'veta_loocorreccion.name',
  'fecha_solicitud' => 'veta_loocorreccion.fecha_solicitud',
  'fecha_correccion' => 'veta_loocorreccion.fecha_correccion',
  'veta_loocorreccion_veta_loo_name' => 'veta_loocorreccion.veta_loocorreccion_veta_loo_name',
  'estudiante' => 'veta_loocorreccion.estudiante',
  'prospecto' => 'veta_loocorreccion.prospecto',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fecha_solicitud',
  5 => 'fecha_correccion',
  7 => 'veta_loocorreccion_veta_loo_name',
  8 => 'estudiante',
  9 => 'prospecto',
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
  'fecha_correccion' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_CORRECCION',
    'width' => '10%',
    'name' => 'fecha_correccion',
  ),
  'fecha_solicitud' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_SOLICITUD',
    'width' => '10%',
    'name' => 'fecha_solicitud',
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
),
);
