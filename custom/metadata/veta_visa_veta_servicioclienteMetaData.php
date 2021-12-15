<?php
// created: 2021-09-02 13:15:23
$dictionary["veta_visa_veta_serviciocliente"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'veta_visa_veta_serviciocliente' => 
    array (
      'lhs_module' => 'Veta_Visa',
      'lhs_table' => 'veta_visa',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_ServicioCliente',
      'rhs_table' => 'veta_serviciocliente',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_visa_veta_serviciocliente_c',
      'join_key_lhs' => 'veta_visa_veta_servicioclienteveta_visa_ida',
      'join_key_rhs' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
    ),
  ),
  'table' => 'veta_visa_veta_serviciocliente_c',
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
      'name' => 'veta_visa_veta_servicioclienteveta_visa_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_visa_veta_servicioclientespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_visa_veta_serviciocliente_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_visa_veta_servicioclienteveta_visa_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_visa_veta_serviciocliente_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_visa_veta_servicioclienteveta_serviciocliente_idb',
      ),
    ),
  ),
);