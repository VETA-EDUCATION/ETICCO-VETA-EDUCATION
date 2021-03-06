<?php
// created: 2021-09-02 13:15:25
$dictionary["veta_detallereciboitem_veta_recibo"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_detallereciboitem_veta_recibo' => 
    array (
      'lhs_module' => 'Veta_Recibo',
      'lhs_table' => 'veta_recibo',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_DetalleReciboItem',
      'rhs_table' => 'veta_detallereciboitem',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_detallereciboitem_veta_recibo_c',
      'join_key_lhs' => 'veta_detallereciboitem_veta_reciboveta_recibo_ida',
      'join_key_rhs' => 'veta_detallereciboitem_veta_reciboveta_detallereciboitem_idb',
    ),
  ),
  'table' => 'veta_detallereciboitem_veta_recibo_c',
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
      'name' => 'veta_detallereciboitem_veta_reciboveta_recibo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_detallereciboitem_veta_reciboveta_detallereciboitem_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_detallereciboitem_veta_recibospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_detallereciboitem_veta_recibo_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_detallereciboitem_veta_reciboveta_recibo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_detallereciboitem_veta_recibo_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_detallereciboitem_veta_reciboveta_detallereciboitem_idb',
      ),
    ),
  ),
);