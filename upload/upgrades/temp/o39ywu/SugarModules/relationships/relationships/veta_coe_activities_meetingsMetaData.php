<?php
// created: 2019-10-09 12:37:30
$dictionary["veta_coe_activities_meetings"] = array (
  'relationships' => 
  array (
    'veta_coe_activities_meetings' => 
    array (
      'lhs_module' => 'Veta_COE',
      'lhs_table' => 'veta_coe',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
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