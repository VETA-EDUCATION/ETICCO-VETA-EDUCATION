<?php
// created: 2019-12-19 13:16:49
$dictionary["veta_coe_veta_liquidacion"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_coe_veta_liquidacion' => 
    array (
      'lhs_module' => 'Veta_Liquidacion',
      'lhs_table' => 'veta_liquidacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_COE',
      'rhs_table' => 'veta_coe',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_coe_veta_liquidacion_c',
      'join_key_lhs' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
      'join_key_rhs' => 'veta_coe_veta_liquidacionveta_coe_idb',
    ),
  ),
  'table' => 'veta_coe_veta_liquidacion_c',
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
      'name' => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_coe_veta_liquidacionveta_coe_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_coe_veta_liquidacionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_coe_veta_liquidacion_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_coe_veta_liquidacionveta_liquidacion_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_coe_veta_liquidacion_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_coe_veta_liquidacionveta_coe_idb',
      ),
    ),
  ),
);