<?php
// created: 2021-09-02 13:15:22
$dictionary["veta_loo_activities_tasks"] = array (
  'relationships' => 
  array (
    'veta_loo_activities_tasks' => 
    array (
      'lhs_module' => 'Veta_Loo',
      'lhs_table' => 'veta_loo',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Veta_Loo',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);