<?php
// created: 2019-11-23 19:06:51
$dictionary["veta_solvenciaeconomica_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_solvenciaeconomica_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_SolvenciaEconomica',
      'rhs_table' => 'veta_solvenciaeconomica',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_solvenciaeconomica_leads_c',
      'join_key_lhs' => 'veta_solvenciaeconomica_leadsleads_ida',
      'join_key_rhs' => 'veta_solvenciaeconomica_leadsveta_solvenciaeconomica_idb',
    ),
  ),
  'table' => 'veta_solvenciaeconomica_leads_c',
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
      'name' => 'veta_solvenciaeconomica_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_solvenciaeconomica_leadsveta_solvenciaeconomica_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_solvenciaeconomica_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_solvenciaeconomica_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_solvenciaeconomica_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_solvenciaeconomica_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_solvenciaeconomica_leadsveta_solvenciaeconomica_idb',
      ),
    ),
  ),
);