<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Liquidacion',
    'varName' => 'Veta_Liquidacion',
    'orderBy' => 'veta_liquidacion.name',
    'whereClauses' => array (
  'name' => 'veta_liquidacion.name',
  'veta_liquidacion_opportunities_name' => 'veta_liquidacion.veta_liquidacion_opportunities_name',
  'assigned_user_id' => 'veta_liquidacion.assigned_user_id',
  'estudiante' => 'veta_liquidacion.estudiante',
  'veta_liquidacion_veta_loo_name' => 'veta_liquidacion.veta_liquidacion_veta_loo_name',
  'prospecto' => 'veta_liquidacion.prospecto',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_liquidacion_opportunities_name',
  5 => 'assigned_user_id',
  6 => 'estudiante',
  7 => 'veta_liquidacion_veta_loo_name',
  8 => 'prospecto',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
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
  'veta_liquidacion_opportunities_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_LIQUIDACION_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'name' => 'veta_liquidacion_opportunities_name',
  ),
  'veta_liquidacion_veta_loo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
    'id' => 'VETA_LIQUIDACION_VETA_LOOVETA_LOO_IDA',
    'width' => '10%',
    'name' => 'veta_liquidacion_veta_loo_name',
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
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'MONTO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'monto',
  ),
  'ESTUDIANTE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'estudiante',
  ),
  'PROSPECTO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROSPECTO',
    'id' => 'LEAD_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'prospecto',
  ),
  'VETA_LIQUIDACION_VETA_LOO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
    'id' => 'VETA_LIQUIDACION_VETA_LOOVETA_LOO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_LIQUIDACION_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_LIQUIDACION_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_liquidacion_opportunities_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
