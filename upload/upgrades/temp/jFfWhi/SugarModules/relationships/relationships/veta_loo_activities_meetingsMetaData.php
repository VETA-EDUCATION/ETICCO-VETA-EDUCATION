<?php
// created: 2019-11-28 15:02:17
$dictionary["veta_loo_activities_meetings"] = array (
  'relationships' => 
  array (
    'veta_loo_activities_meetings' => 
    array (
      'lhs_module' => 'Veta_Loo',
      'lhs_table' => 'veta_loo',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
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