<?php
$popupMeta = array (
    'moduleMain' => 'Veta_CorreccionCOE',
    'varName' => 'Veta_CorreccionCOE',
    'orderBy' => 'veta_correccioncoe.name',
    'whereClauses' => array (
  'name' => 'veta_correccioncoe.name',
  'fecha_solicitud' => 'veta_correccioncoe.fecha_solicitud',
  'fecha_correccion' => 'veta_correccioncoe.fecha_correccion',
  'veta_correccioncoe_veta_coe_name' => 'veta_correccioncoe.veta_correccioncoe_veta_coe_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fecha_solicitud',
  5 => 'fecha_correccion',
  6 => 'veta_correccioncoe_veta_coe_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'fecha_solicitud' => 
  array (
    'type' => 'varchar',
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
  'veta_correccioncoe_veta_coe_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_CORRECCIONCOE_VETA_COE_FROM_VETA_COE_TITLE',
    'id' => 'VETA_CORRECCIONCOE_VETA_COEVETA_COE_IDA',
    'width' => '10%',
    'name' => 'veta_correccioncoe_veta_coe_name',
  ),
),
);
