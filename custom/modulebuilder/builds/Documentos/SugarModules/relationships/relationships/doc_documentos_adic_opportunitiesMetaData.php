<?php
// created: 2022-03-22 09:00:20
$dictionary["doc_documentos_adic_opportunities"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'doc_documentos_adic_opportunities' => 
    array (
      'lhs_module' => 'Doc_Documentos_Adic',
      'lhs_table' => 'doc_documentos_adic',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_documentos_adic_opportunities_c',
      'join_key_lhs' => 'doc_documentos_adic_opportunitiesdoc_documentos_adic_ida',
      'join_key_rhs' => 'doc_documentos_adic_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'doc_documentos_adic_opportunities_c',
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
      'name' => 'doc_documentos_adic_opportunitiesdoc_documentos_adic_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_documentos_adic_opportunitiesopportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_documentos_adic_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_documentos_adic_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_documentos_adic_opportunitiesdoc_documentos_adic_ida',
        1 => 'doc_documentos_adic_opportunitiesopportunities_idb',
      ),
    ),
  ),
);