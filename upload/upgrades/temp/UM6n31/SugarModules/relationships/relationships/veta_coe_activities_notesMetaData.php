<?php
// created: 2019-11-28 13:53:52
$dictionary["veta_coe_activities_notes"] = array (
  'relationships' => 
  array (
    'veta_coe_activities_notes' => 
    array (
      'lhs_module' => 'Veta_COE',
      'lhs_table' => 'veta_coe',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
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