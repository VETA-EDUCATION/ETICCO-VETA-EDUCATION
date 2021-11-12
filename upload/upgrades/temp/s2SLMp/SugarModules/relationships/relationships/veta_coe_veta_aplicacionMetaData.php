<?php
// created: 2019-12-15 13:44:43
$dictionary["veta_coe_veta_aplicacion"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_coe_veta_aplicacion' => 
    array (
      'lhs_module' => 'Veta_Aplicacion',
      'lhs_table' => 'veta_aplicacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_COE',
      'rhs_table' => 'veta_coe',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_coe_veta_aplicacion_c',
      'join_key_lhs' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
      'join_key_rhs' => 'veta_coe_veta_aplicacionveta_coe_idb',
    ),
  ),
  'table' => 'veta_coe_veta_aplicacion_c',
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
      'name' => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_coe_veta_aplicacionveta_coe_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_coe_veta_aplicacionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_coe_veta_aplicacion_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_coe_veta_aplicacionveta_aplicacion_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_coe_veta_aplicacion_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_coe_veta_aplicacionveta_coe_idb',
      ),
    ),
  ),
);