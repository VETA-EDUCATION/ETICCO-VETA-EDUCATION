<?php
// created: 2019-11-23 19:06:50
$dictionary["veta_pasaporte_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_pasaporte_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Pasaporte',
      'rhs_table' => 'veta_pasaporte',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_pasaporte_contacts_c',
      'join_key_lhs' => 'veta_pasaporte_contactscontacts_ida',
      'join_key_rhs' => 'veta_pasaporte_contactsveta_pasaporte_idb',
    ),
  ),
  'table' => 'veta_pasaporte_contacts_c',
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
      'name' => 'veta_pasaporte_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_pasaporte_contactsveta_pasaporte_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_pasaporte_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_pasaporte_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_pasaporte_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_pasaporte_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_pasaporte_contactsveta_pasaporte_idb',
      ),
    ),
  ),
);