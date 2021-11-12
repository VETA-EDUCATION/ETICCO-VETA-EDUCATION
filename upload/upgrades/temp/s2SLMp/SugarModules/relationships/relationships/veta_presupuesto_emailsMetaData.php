<?php
// created: 2019-12-15 13:44:45
$dictionary["veta_presupuesto_emails"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_presupuesto_emails' => 
    array (
      'lhs_module' => 'Veta_Presupuesto',
      'lhs_table' => 'veta_presupuesto',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_presupuesto_emails_c',
      'join_key_lhs' => 'veta_presupuesto_emailsveta_presupuesto_ida',
      'join_key_rhs' => 'veta_presupuesto_emailsemails_idb',
    ),
  ),
  'table' => 'veta_presupuesto_emails_c',
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
      'name' => 'veta_presupuesto_emailsveta_presupuesto_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_presupuesto_emailsemails_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_presupuesto_emailsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_presupuesto_emails_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_presupuesto_emailsveta_presupuesto_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_presupuesto_emails_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_presupuesto_emailsemails_idb',
      ),
    ),
  ),
);