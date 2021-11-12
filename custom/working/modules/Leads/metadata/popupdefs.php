<?php
$popupMeta = array (
    'moduleMain' => 'Lead',
    'varName' => 'LEAD',
    'orderBy' => 'last_name, first_name',
    'whereClauses' => array (
  'first_name' => 'leads.first_name',
  'last_name' => 'leads.last_name',
  'lead_source' => 'leads.lead_source',
  'status' => 'leads.status',
  'assigned_user_id' => 'leads.assigned_user_id',
  'pasaporte_c' => 'leads_cstm.pasaporte_c',
  'email' => 'leads.email',
  'fecha_expiracion_visa_c' => 'leads_cstm.fecha_expiracion_visa_c',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'lead_source',
  3 => 'status',
  5 => 'assigned_user_id',
  6 => 'pasaporte_c',
  7 => 'email',
  8 => 'fecha_expiracion_visa_c',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'pasaporte_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PASAPORTE',
    'width' => '10%',
    'name' => 'pasaporte_c',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'lead_source' => 
  array (
    'name' => 'lead_source',
    'width' => '10%',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
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
  'fecha_expiracion_visa_c' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_FECHA_EXPIRACION_VISA',
    'width' => '10%',
    'name' => 'fecha_expiracion_visa_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'PASAPORTE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PASAPORTE',
    'width' => '10%',
    'name' => 'pasaporte_c',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => true,
    'name' => 'lead_source',
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => true,
      'editField' => true,
      'searchview' => false,
      'popupsearch' => false,
    ),
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
    'default' => true,
    'name' => 'email1',
  ),
  'CIUDAD_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'name' => 'ciudad_c',
  ),
  'OK_COMERCIAL_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_OK_COMERCIAL',
    'width' => '10%',
    'name' => 'ok_comercial_c',
  ),
  'OK_VISAS_C' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_OK_VISAS',
    'width' => '10%',
    'name' => 'ok_visas_c',
  ),
  'FECHA_EXPIRACION_VISA_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_EXPIRACION_VISA',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
