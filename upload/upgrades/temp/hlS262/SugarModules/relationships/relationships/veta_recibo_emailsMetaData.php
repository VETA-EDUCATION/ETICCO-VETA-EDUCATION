<?php
// created: 2019-11-30 16:10:44
$dictionary["veta_recibo_emails"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_recibo_emails' => 
    array (
      'lhs_module' => 'Veta_Recibo',
      'lhs_table' => 'veta_recibo',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_recibo_emails_c',
      'join_key_lhs' => 'veta_recibo_emailsveta_recibo_ida',
      'join_key_rhs' => 'veta_recibo_emailsemails_idb',
    ),
  ),
  'table' => 'veta_recibo_emails_c',
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
      'name' => 'veta_recibo_emailsveta_recibo_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_recibo_emailsemails_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_recibo_emailsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_recibo_emails_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_recibo_emailsveta_recibo_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_recibo_emails_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_recibo_emailsemails_idb',
      ),
    ),
  ),
);