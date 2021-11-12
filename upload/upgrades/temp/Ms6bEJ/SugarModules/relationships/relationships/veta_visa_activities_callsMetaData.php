<?php
// created: 2019-11-23 19:06:47
$dictionary["veta_visa_activities_calls"] = array (
  'relationships' => 
  array (
    'veta_visa_activities_calls' => 
    array (
      'lhs_module' => 'Veta_Visa',
      'lhs_table' => 'veta_visa',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
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