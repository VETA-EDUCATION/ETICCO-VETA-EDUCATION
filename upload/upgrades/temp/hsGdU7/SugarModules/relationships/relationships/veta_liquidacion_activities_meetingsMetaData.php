<?php
// created: 2019-12-05 18:00:54
$dictionary["veta_liquidacion_activities_meetings"] = array (
  'relationships' => 
  array (
    'veta_liquidacion_activities_meetings' => 
    array (
      'lhs_module' => 'Veta_Liquidacion',
      'lhs_table' => 'veta_liquidacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
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