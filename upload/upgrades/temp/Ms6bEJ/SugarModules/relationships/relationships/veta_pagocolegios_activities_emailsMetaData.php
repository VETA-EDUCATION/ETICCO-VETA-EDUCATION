<?php
// created: 2019-11-23 19:06:46
$dictionary["veta_pagocolegios_activities_emails"] = array (
  'relationships' => 
  array (
    'veta_pagocolegios_activities_emails' => 
    array (
      'lhs_module' => 'Veta_PagoColegios',
      'lhs_table' => 'veta_pagocolegios',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
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