<?php
// created: 2021-09-02 13:15:21
$dictionary["veta_liquidacion_veta_loo"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_liquidacion_veta_loo' => 
    array (
      'lhs_module' => 'Veta_Loo',
      'lhs_table' => 'veta_loo',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Liquidacion',
      'rhs_table' => 'veta_liquidacion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_liquidacion_veta_loo_c',
      'join_key_lhs' => 'veta_liquidacion_veta_looveta_loo_ida',
      'join_key_rhs' => 'veta_liquidacion_veta_looveta_liquidacion_idb',
    ),
  ),
  'table' => 'veta_liquidacion_veta_loo_c',
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
      'name' => 'veta_liquidacion_veta_looveta_loo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_liquidacion_veta_looveta_liquidacion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_liquidacion_veta_loospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_liquidacion_veta_loo_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_liquidacion_veta_looveta_loo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_liquidacion_veta_loo_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_liquidacion_veta_looveta_liquidacion_idb',
      ),
    ),
  ),
);