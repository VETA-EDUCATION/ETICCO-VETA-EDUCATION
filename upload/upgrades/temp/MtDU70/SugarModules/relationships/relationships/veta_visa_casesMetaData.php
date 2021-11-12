<?php
// created: 2019-11-29 07:05:22
$dictionary["veta_visa_cases"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_visa_cases' => 
    array (
      'lhs_module' => 'Veta_Visa',
      'lhs_table' => 'veta_visa',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_visa_cases_c',
      'join_key_lhs' => 'veta_visa_casesveta_visa_ida',
      'join_key_rhs' => 'veta_visa_casescases_idb',
    ),
  ),
  'table' => 'veta_visa_cases_c',
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
      'name' => 'veta_visa_casesveta_visa_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_visa_casescases_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_visa_casesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_visa_cases_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_visa_casesveta_visa_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_visa_cases_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_visa_casescases_idb',
      ),
    ),
  ),
);