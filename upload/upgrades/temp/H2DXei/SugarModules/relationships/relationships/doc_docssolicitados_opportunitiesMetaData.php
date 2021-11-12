<?php
// created: 2021-06-14 15:29:51
$dictionary["doc_docssolicitados_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'doc_docssolicitados_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Doc_DocsSolicitados',
      'rhs_table' => 'doc_docssolicitados',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_docssolicitados_opportunities_c',
      'join_key_lhs' => 'doc_docssolicitados_opportunitiesopportunities_ida',
      'join_key_rhs' => 'doc_docssolicitados_opportunitiesdoc_docssolicitados_idb',
    ),
  ),
  'table' => 'doc_docssolicitados_opportunities_c',
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
      'name' => 'doc_docssolicitados_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_docssolicitados_opportunitiesdoc_docssolicitados_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_docssolicitados_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_docssolicitados_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'doc_docssolicitados_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'doc_docssolicitados_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_docssolicitados_opportunitiesdoc_docssolicitados_idb',
      ),
    ),
  ),
);