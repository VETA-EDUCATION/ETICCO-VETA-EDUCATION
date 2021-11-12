<?php
// created: 2019-11-30 14:01:36
$dictionary["veta_detallepresupuesto_veta_presupuesto"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_detallepresupuesto_veta_presupuesto' => 
    array (
      'lhs_module' => 'Veta_Presupuesto',
      'lhs_table' => 'veta_presupuesto',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_DetallePresupuesto',
      'rhs_table' => 'veta_detallepresupuesto',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_detallepresupuesto_veta_presupuesto_c',
      'join_key_lhs' => 'veta_detallepresupuesto_veta_presupuestoveta_presupuesto_ida',
      'join_key_rhs' => 'veta_detal7e03upuesto_idb',
    ),
  ),
  'table' => 'veta_detallepresupuesto_veta_presupuesto_c',
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
      'name' => 'veta_detallepresupuesto_veta_presupuestoveta_presupuesto_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_detal7e03upuesto_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_detallepresupuesto_veta_presupuestospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_detallepresupuesto_veta_presupuesto_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_detallepresupuesto_veta_presupuestoveta_presupuesto_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_detallepresupuesto_veta_presupuesto_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_detal7e03upuesto_idb',
      ),
    ),
  ),
);