<?php
// created: 2019-11-02 20:26:06
$dictionary["veta_pagocolegios_activities_notes"] = array (
  'relationships' => 
  array (
    'veta_pagocolegios_activities_notes' => 
    array (
      'lhs_module' => 'Veta_PagoColegios',
      'lhs_table' => 'veta_pagocolegios',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
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