<?php
// created: 2019-11-24 13:21:04
$dictionary["veta_coe_activities_emails"] = array (
  'relationships' => 
  array (
    'veta_coe_activities_emails' => 
    array (
      'lhs_module' => 'Veta_COE',
      'lhs_table' => 'veta_coe',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
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