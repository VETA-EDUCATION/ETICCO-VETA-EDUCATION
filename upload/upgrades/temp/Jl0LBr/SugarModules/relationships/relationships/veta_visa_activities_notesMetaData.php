<?php
// created: 2019-11-30 16:39:42
$dictionary["veta_visa_activities_notes"] = array (
  'relationships' => 
  array (
    'veta_visa_activities_notes' => 
    array (
      'lhs_module' => 'Veta_Visa',
      'lhs_table' => 'veta_visa',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
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