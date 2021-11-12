<?php
// created: 2019-11-02 20:52:03
$dictionary["veta_abono_veta_recibo"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_abono_veta_recibo' => 
    array (
      'lhs_module' => 'Veta_Recibo',
      'lhs_table' => 'veta_recibo',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Abono',
      'rhs_table' => 'veta_abono',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_abono_veta_recibo_c',
      'join_key_lhs' => 'veta_abono_veta_reciboveta_recibo_ida',
      'join_key_rhs' => 'veta_abono_veta_reciboveta_abono_idb',
    ),
  ),
  'table' => 'veta_abono_veta_recibo_c',
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
      'name' => 'veta_abono_veta_reciboveta_recibo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_abono_veta_reciboveta_abono_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_abono_veta_recibospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_abono_veta_recibo_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_abono_veta_reciboveta_recibo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_abono_veta_recibo_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_abono_veta_reciboveta_abono_idb',
      ),
    ),
  ),
);