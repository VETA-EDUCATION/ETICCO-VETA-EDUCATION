<?php
// created: 2021-09-02 13:15:21
$dictionary["veta_aplicacion_activities_calls"] = array (
  'relationships' => 
  array (
    'veta_aplicacion_activities_calls' => 
    array (
      'lhs_module' => 'Veta_Aplicacion',
      'lhs_table' => 'veta_aplicacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Veta_Aplicacion',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);