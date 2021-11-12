<?php
// created: 2019-11-30 14:01:33
$dictionary["veta_coe_cases"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_coe_cases' => 
    array (
      'lhs_module' => 'Veta_COE',
      'lhs_table' => 'veta_coe',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_coe_cases_c',
      'join_key_lhs' => 'veta_coe_casesveta_coe_ida',
      'join_key_rhs' => 'veta_coe_casescases_idb',
    ),
  ),
  'table' => 'veta_coe_cases_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'veta_coe_casesveta_coe_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_coe_casescases_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_coe_casesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_coe_cases_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_coe_casesveta_coe_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_coe_cases_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_coe_casescases_idb',
      ),
    ),
  ),
);