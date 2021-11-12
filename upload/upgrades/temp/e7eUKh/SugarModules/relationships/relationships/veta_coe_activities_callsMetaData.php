<?php
// created: 2019-11-02 20:13:04
$dictionary["veta_coe_activities_calls"] = array (
  'relationships' => 
  array (
    'veta_coe_activities_calls' => 
    array (
      'lhs_module' => 'Veta_COE',
      'lhs_table' => 'veta_coe',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Veta_COE',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);