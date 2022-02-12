<?php
// created: 2022-01-28 10:25:09
$dictionary["veta_requerimiento_veta_recibo"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_requerimiento_veta_recibo' => 
    array (
      'lhs_module' => 'Veta_Requerimiento',
      'lhs_table' => 'veta_requerimiento',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Recibo',
      'rhs_table' => 'veta_recibo',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_requerimiento_veta_recibo_c',
      'join_key_lhs' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
      'join_key_rhs' => 'veta_requerimiento_veta_reciboveta_recibo_idb',
    ),
  ),
  'table' => 'veta_requerimiento_veta_recibo_c',
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
      'name' => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_requerimiento_veta_reciboveta_recibo_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_requerimiento_veta_recibospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_requerimiento_veta_recibo_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_requerimiento_veta_reciboveta_requerimiento_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_requerimiento_veta_recibo_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_requerimiento_veta_reciboveta_recibo_idb',
      ),
    ),
  ),
);