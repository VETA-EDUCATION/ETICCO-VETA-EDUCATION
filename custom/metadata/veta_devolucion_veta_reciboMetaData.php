<?php
// created: 2021-09-02 13:15:21
$dictionary["veta_devolucion_veta_recibo"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_devolucion_veta_recibo' => 
    array (
      'lhs_module' => 'Veta_Recibo',
      'lhs_table' => 'veta_recibo',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Devolucion',
      'rhs_table' => 'veta_devolucion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_devolucion_veta_recibo_c',
      'join_key_lhs' => 'veta_devolucion_veta_reciboveta_recibo_ida',
      'join_key_rhs' => 'veta_devolucion_veta_reciboveta_devolucion_idb',
    ),
  ),
  'table' => 'veta_devolucion_veta_recibo_c',
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
      'name' => 'veta_devolucion_veta_reciboveta_recibo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_devolucion_veta_reciboveta_devolucion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_devolucion_veta_recibospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_devolucion_veta_recibo_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_devolucion_veta_reciboveta_recibo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_devolucion_veta_recibo_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_devolucion_veta_reciboveta_devolucion_idb',
      ),
    ),
  ),
);