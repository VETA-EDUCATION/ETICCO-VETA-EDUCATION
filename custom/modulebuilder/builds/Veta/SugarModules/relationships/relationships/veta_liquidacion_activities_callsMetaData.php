<?php
// created: 2022-01-28 10:25:05
$dictionary["veta_liquidacion_activities_calls"] = array (
  'relationships' => 
  array (
    'veta_liquidacion_activities_calls' => 
    array (
      'lhs_module' => 'Veta_Liquidacion',
      'lhs_table' => 'veta_liquidacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
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