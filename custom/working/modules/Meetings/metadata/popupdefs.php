<?php
$popupMeta = array (
    'moduleMain' => 'Meetings',
    'varName' => 'Meeting',
    'orderBy' => 'meetings.name',
    'whereClauses' => array (
  'name' => 'meetings.name',
  'estudiante_c' => 'meetings.estudiante_c',
  'parent_name' => 'meetings.parent_name',
  'current_user_only' => 'meetings.current_user_only',
  'status' => 'meetings.status',
  'date_start' => 'meetings.date_start',
  'assigned_user_id' => 'meetings.assigned_user_id',
  'created_by' => 'meetings.created_by',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'estudiante_c',
  5 => 'parent_name',
  6 => 'current_user_only',
  7 => 'date_start',
  8 => 'assigned_user_id',
  9 => 'created_by',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'estudiante_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'estudiante_c',
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'label' => 'LBL_LIST_RELATED_TO',
    'width' => '10%',
    'name' => 'parent_name',
  ),
  'current_user_only' => 
  array (
    'name' => 'current_user_only',
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'date_start' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'name' => 'date_start',
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
  'created_by' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_CREATED',
    'width' => '10%',
    'name' => 'created_by',
  ),
),
);
