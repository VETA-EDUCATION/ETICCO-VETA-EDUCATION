<?php
// created: 2021-09-02 13:15:24
$dictionary["veta_recibo_veta_presupuesto"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_recibo_veta_presupuesto' => 
    array (
      'lhs_module' => 'Veta_Presupuesto',
      'lhs_table' => 'veta_presupuesto',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Recibo',
      'rhs_table' => 'veta_recibo',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_recibo_veta_presupuesto_c',
      'join_key_lhs' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
      'join_key_rhs' => 'veta_recibo_veta_presupuestoveta_recibo_idb',
    ),
  ),
  'table' => 'veta_recibo_veta_presupuesto_c',
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
      'name' => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_recibo_veta_presupuestoveta_recibo_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_recibo_veta_presupuestospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_recibo_veta_presupuesto_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_recibo_veta_presupuestoveta_presupuesto_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_recibo_veta_presupuesto_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_recibo_veta_presupuestoveta_recibo_idb',
      ),
    ),
  ),
);