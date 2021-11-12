<?php
// created: 2019-12-19 13:16:50
$dictionary["veta_loocorreccion_veta_loo"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_loocorreccion_veta_loo' => 
    array (
      'lhs_module' => 'Veta_Loo',
      'lhs_table' => 'veta_loo',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_LooCorreccion',
      'rhs_table' => 'veta_loocorreccion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_loocorreccion_veta_loo_c',
      'join_key_lhs' => 'veta_loocorreccion_veta_looveta_loo_ida',
      'join_key_rhs' => 'veta_loocorreccion_veta_looveta_loocorreccion_idb',
    ),
  ),
  'table' => 'veta_loocorreccion_veta_loo_c',
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
      'name' => 'veta_loocorreccion_veta_looveta_loo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_loocorreccion_veta_looveta_loocorreccion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_loocorreccion_veta_loospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_loocorreccion_veta_loo_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_loocorreccion_veta_looveta_loo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_loocorreccion_veta_loo_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_loocorreccion_veta_looveta_loocorreccion_idb',
      ),
    ),
  ),
);