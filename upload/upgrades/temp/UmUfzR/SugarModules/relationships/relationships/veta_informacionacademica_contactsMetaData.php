<?php
// created: 2019-11-23 12:54:23
$dictionary["veta_informacionacademica_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_informacionacademica_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_InformacionAcademica',
      'rhs_table' => 'veta_informacionacademica',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_informacionacademica_contacts_c',
      'join_key_lhs' => 'veta_informacionacademica_contactscontacts_ida',
      'join_key_rhs' => 'veta_informacionacademica_contactsveta_informacionacademica_idb',
    ),
  ),
  'table' => 'veta_informacionacademica_contacts_c',
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
      'name' => 'veta_informacionacademica_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_informacionacademica_contactsveta_informacionacademica_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_informacionacademica_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_informacionacademica_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_informacionacademica_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_informacionacademica_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_informacionacademica_contactsveta_informacionacademica_idb',
      ),
    ),
  ),
);