<?php
// created: 2019-11-02 20:13:03
$dictionary["veta_aplicacion_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_aplicacion_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Aplicacion',
      'rhs_table' => 'veta_aplicacion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_aplicacion_opportunities_c',
      'join_key_lhs' => 'veta_aplicacion_opportunitiesopportunities_ida',
      'join_key_rhs' => 'veta_aplicacion_opportunitiesveta_aplicacion_idb',
    ),
  ),
  'table' => 'veta_aplicacion_opportunities_c',
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
      'name' => 'veta_aplicacion_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_aplicacion_opportunitiesveta_aplicacion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_aplicacion_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_aplicacion_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_aplicacion_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_aplicacion_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_aplicacion_opportunitiesveta_aplicacion_idb',
      ),
    ),
  ),
);