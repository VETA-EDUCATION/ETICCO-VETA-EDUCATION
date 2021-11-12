<?php
// created: 2021-05-04 17:11:25
$dictionary["veta_requerimiento_activities_1_tasks"] = array (
  'relationships' => 
  array (
    'veta_requerimiento_activities_1_tasks' => 
    array (
      'lhs_module' => 'Veta_Requerimiento',
      'lhs_table' => 'veta_requerimiento',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
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