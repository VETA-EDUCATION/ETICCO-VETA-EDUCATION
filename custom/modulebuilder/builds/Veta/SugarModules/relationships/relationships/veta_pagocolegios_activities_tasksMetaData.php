<?php
// created: 2020-10-14 00:58:31
$dictionary["veta_pagocolegios_activities_tasks"] = array (
  'relationships' => 
  array (
    'veta_pagocolegios_activities_tasks' => 
    array (
      'lhs_module' => 'Veta_PagoColegios',
      'lhs_table' => 'veta_pagocolegios',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Veta_PagoColegios',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);