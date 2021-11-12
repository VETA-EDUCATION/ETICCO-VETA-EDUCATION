<?php
// created: 2019-11-28 15:18:09
$dictionary["veta_correccioncoe_veta_coe"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_correccioncoe_veta_coe' => 
    array (
      'lhs_module' => 'Veta_COE',
      'lhs_table' => 'veta_coe',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_CorreccionCOE',
      'rhs_table' => 'veta_correccioncoe',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_correccioncoe_veta_coe_c',
      'join_key_lhs' => 'veta_correccioncoe_veta_coeveta_coe_ida',
      'join_key_rhs' => 'veta_correccioncoe_veta_coeveta_correccioncoe_idb',
    ),
  ),
  'table' => 'veta_correccioncoe_veta_coe_c',
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
      'name' => 'veta_correccioncoe_veta_coeveta_coe_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_correccioncoe_veta_coeveta_correccioncoe_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_correccioncoe_veta_coespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_correccioncoe_veta_coe_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_correccioncoe_veta_coeveta_coe_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_correccioncoe_veta_coe_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_correccioncoe_veta_coeveta_correccioncoe_idb',
      ),
    ),
  ),
);