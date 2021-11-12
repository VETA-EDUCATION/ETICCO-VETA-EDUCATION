<?php
// created: 2019-12-17 13:18:48
$dictionary["veta_detallereciboitem_veta_detallerecibo"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_detallereciboitem_veta_detallerecibo' => 
    array (
      'lhs_module' => 'Veta_DetalleRecibo',
      'lhs_table' => 'veta_detallerecibo',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_DetalleReciboItem',
      'rhs_table' => 'veta_detallereciboitem',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_detallereciboitem_veta_detallerecibo_c',
      'join_key_lhs' => 'veta_detallereciboitem_veta_detallereciboveta_detallerecibo_ida',
      'join_key_rhs' => 'veta_detaldf81iboitem_idb',
    ),
  ),
  'table' => 'veta_detallereciboitem_veta_detallerecibo_c',
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
      'name' => 'veta_detallereciboitem_veta_detallereciboveta_detallerecibo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_detaldf81iboitem_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_detallereciboitem_veta_detallerecibospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_detallereciboitem_veta_detallerecibo_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_detallereciboitem_veta_detallereciboveta_detallerecibo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_detallereciboitem_veta_detallerecibo_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_detaldf81iboitem_idb',
      ),
    ),
  ),
);