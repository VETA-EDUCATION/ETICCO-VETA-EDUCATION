<?php
$popupMeta = array (
    'moduleMain' => 'Tasks',
    'varName' => 'Task',
    'orderBy' => 'tasks.name',
    'whereClauses' => array (
  'name' => 'tasks.name',
  'estudiante_c' => 'tasks.estudiante_c',
  'contact_name' => 'tasks.contact_name',
  'current_user_only' => 'tasks.current_user_only',
  'status' => 'tasks.status',
  'parent_name' => 'tasks.parent_name',
  'assigned_user_id' => 'tasks.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'estudiante_c',
  5 => 'contact_name',
  6 => 'current_user_only',
  7 => 'parent_name',
  8 => 'assigned_user_id',
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
  'contact_name' => 
  array (
    'name' => 'contact_name',
    'label' => 'LBL_CONTACT_NAME',
    'type' => 'name',
    'width' => '10%',
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
  'parent_name' => 
  array (
    'type' => 'parent',
    'label' => 'LBL_LIST_RELATED_TO',
    'width' => '10%',
    'name' => 'parent_name',
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
