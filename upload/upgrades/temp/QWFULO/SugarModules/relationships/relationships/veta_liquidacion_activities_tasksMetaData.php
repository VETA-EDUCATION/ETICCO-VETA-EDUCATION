<?php
// created: 2019-11-30 17:29:27
$dictionary["veta_liquidacion_activities_tasks"] = array (
  'relationships' => 
  array (
    'veta_liquidacion_activities_tasks' => 
    array (
      'lhs_module' => 'Veta_Liquidacion',
      'lhs_table' => 'veta_liquidacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Veta_Liquidacion',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);