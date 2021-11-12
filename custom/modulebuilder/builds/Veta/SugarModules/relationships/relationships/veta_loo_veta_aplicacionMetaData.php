<?php
// created: 2020-10-14 00:58:28
$dictionary["veta_loo_veta_aplicacion"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_loo_veta_aplicacion' => 
    array (
      'lhs_module' => 'Veta_Aplicacion',
      'lhs_table' => 'veta_aplicacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Loo',
      'rhs_table' => 'veta_loo',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_loo_veta_aplicacion_c',
      'join_key_lhs' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
      'join_key_rhs' => 'veta_loo_veta_aplicacionveta_loo_idb',
    ),
  ),
  'table' => 'veta_loo_veta_aplicacion_c',
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
      'name' => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_loo_veta_aplicacionveta_loo_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_loo_veta_aplicacionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_loo_veta_aplicacion_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_loo_veta_aplicacionveta_aplicacion_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_loo_veta_aplicacion_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_loo_veta_aplicacionveta_loo_idb',
      ),
    ),
  ),
);