<?php
// created: 2020-10-14 00:58:38
$dictionary["veta_visa_activities_tasks"] = array (
  'relationships' => 
  array (
    'veta_visa_activities_tasks' => 
    array (
      'lhs_module' => 'Veta_Visa',
      'lhs_table' => 'veta_visa',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Veta_Visa',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);