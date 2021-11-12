<?php
// created: 2021-05-04 17:11:24
$dictionary["veta_requerimiento_activities_1_calls"] = array (
  'relationships' => 
  array (
    'veta_requerimiento_activities_1_calls' => 
    array (
      'lhs_module' => 'Veta_Requerimiento',
      'lhs_table' => 'veta_requerimiento',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Veta_Requerimiento',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);