<?php
// created: 2022-01-28 10:24:59
$dictionary["veta_informacionacademica_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_informacionacademica_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_InformacionAcademica',
      'rhs_table' => 'veta_informacionacademica',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_informacionacademica_leads_c',
      'join_key_lhs' => 'veta_informacionacademica_leadsleads_ida',
      'join_key_rhs' => 'veta_informacionacademica_leadsveta_informacionacademica_idb',
    ),
  ),
  'table' => 'veta_informacionacademica_leads_c',
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
      'name' => 'veta_informacionacademica_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_informacionacademica_leadsveta_informacionacademica_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_informacionacademica_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_informacionacademica_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_informacionacademica_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_informacionacademica_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_informacionacademica_leadsveta_informacionacademica_idb',
      ),
    ),
  ),
);