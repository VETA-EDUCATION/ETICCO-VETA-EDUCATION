<?php
// created: 2019-12-10 15:06:45
$dictionary["veta_visa_activities_meetings"] = array (
  'relationships' => 
  array (
    'veta_visa_activities_meetings' => 
    array (
      'lhs_module' => 'Veta_Visa',
      'lhs_table' => 'veta_visa',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
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