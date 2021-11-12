<?php
// created: 2019-11-23 18:50:33
$dictionary["veta_otrosnombres_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_otrosnombres_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_OtrosNombres',
      'rhs_table' => 'veta_otrosnombres',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_otrosnombres_leads_c',
      'join_key_lhs' => 'veta_otrosnombres_leadsleads_ida',
      'join_key_rhs' => 'veta_otrosnombres_leadsveta_otrosnombres_idb',
    ),
  ),
  'table' => 'veta_otrosnombres_leads_c',
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
      'name' => 'veta_otrosnombres_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_otrosnombres_leadsveta_otrosnombres_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_otrosnombres_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_otrosnombres_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_otrosnombres_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_otrosnombres_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_otrosnombres_leadsveta_otrosnombres_idb',
      ),
    ),
  ),
);