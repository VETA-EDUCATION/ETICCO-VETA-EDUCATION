<?php
// created: 2019-12-01 16:01:07
$dictionary["veta_aplicacion_activities_notes"] = array (
  'relationships' => 
  array (
    'veta_aplicacion_activities_notes' => 
    array (
      'lhs_module' => 'Veta_Aplicacion',
      'lhs_table' => 'veta_aplicacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
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