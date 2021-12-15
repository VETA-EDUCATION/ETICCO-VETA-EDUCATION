<?php
$popupMeta = array (
    'moduleMain' => 'Case',
    'varName' => 'CASE',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'cases.name',
  'case_number' => 'cases.case_number',
  'estudiante_c' => 'cases.estudiante_c',
  'priority' => 'cases.priority',
  'status' => 'cases.status',
  'assigned_user_id' => 'cases.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'case_number',
  1 => 'estudiante_c',
  2 => 'name',
  3 => 'priority',
  4 => 'status',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'case_number' => 
  array (
    'name' => 'case_number',
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
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'priority' => 
  array (
    'name' => 'priority',
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
),
    'listviewdefs' => array (
  'CASE_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_NUMBER',
    'default' => true,
    'name' => 'case_number',
  ),
  'ESTUDIANTE_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'estudiante_c',
  ),
  'NAME' => 
  array (
    'width' => '35%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'PRIORITY' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_PRIORITY',
    'default' => true,
    'name' => 'priority',
  ),
  'STATUS' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
