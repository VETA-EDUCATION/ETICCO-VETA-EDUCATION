<?php
// created: 2021-09-02 13:15:22
$dictionary["veta_pagocolegios_activities_meetings"] = array (
  'relationships' => 
  array (
    'veta_pagocolegios_activities_meetings' => 
    array (
      'lhs_module' => 'Veta_PagoColegios',
      'lhs_table' => 'veta_pagocolegios',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
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