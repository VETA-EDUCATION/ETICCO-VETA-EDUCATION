<?php
// created: 2022-01-28 10:25:08
$dictionary["veta_recibo_opportunities"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'veta_recibo_opportunities' => 
    array (
      'lhs_module' => 'Veta_Recibo',
      'lhs_table' => 'veta_recibo',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_recibo_opportunities_c',
      'join_key_lhs' => 'veta_recibo_opportunitiesveta_recibo_ida',
      'join_key_rhs' => 'veta_recibo_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'veta_recibo_opportunities_c',
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
      'name' => 'veta_recibo_opportunitiesveta_recibo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_recibo_opportunitiesopportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_recibo_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_recibo_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_recibo_opportunitiesveta_recibo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_recibo_opportunities_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_recibo_opportunitiesopportunities_idb',
      ),
    ),
  ),
);