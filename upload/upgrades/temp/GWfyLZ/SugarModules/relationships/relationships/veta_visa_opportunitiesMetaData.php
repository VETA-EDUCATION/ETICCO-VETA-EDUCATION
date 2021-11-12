<?php
// created: 2019-11-29 06:45:24
$dictionary["veta_visa_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_visa_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Visa',
      'rhs_table' => 'veta_visa',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_visa_opportunities_c',
      'join_key_lhs' => 'veta_visa_opportunitiesopportunities_ida',
      'join_key_rhs' => 'veta_visa_opportunitiesveta_visa_idb',
    ),
  ),
  'table' => 'veta_visa_opportunities_c',
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
      'name' => 'veta_visa_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_visa_opportunitiesveta_visa_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_visa_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_visa_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_visa_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_visa_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_visa_opportunitiesveta_visa_idb',
      ),
    ),
  ),
);