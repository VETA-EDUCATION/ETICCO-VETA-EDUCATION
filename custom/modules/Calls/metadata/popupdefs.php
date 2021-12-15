<?php
$popupMeta = array (
    'moduleMain' => 'Calls',
    'varName' => 'Call',
    'orderBy' => 'calls.name',
    'whereClauses' => array (
  'name' => 'calls.name',
  'contact_name' => 'calls.contact_name',
  'parent_name' => 'calls.parent_name',
  'current_user_only' => 'calls.current_user_only',
  'direction' => 'calls.direction',
  'status' => 'calls.status',
  'date_start' => 'calls.date_start',
  'date_end' => 'calls.date_end',
  'assigned_user_id' => 'calls.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'contact_name',
  5 => 'parent_name',
  6 => 'current_user_only',
  7 => 'direction',
  8 => 'date_start',
  9 => 'date_end',
  10 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'contact_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'required' => false,
      'listview' => true,
      'visible' => false,
    ),
    'label' => 'LBL_CONTACT_NAME',
    'id' => 'CONTACT_ID',
    'width' => '10%',
    'name' => 'contact_name',
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
  'direction' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DIRECTION',
    'width' => '10%',
    'name' => 'direction',
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
  'date_end' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_END',
    'width' => '10%',
    'name' => 'date_end',
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
),
);
