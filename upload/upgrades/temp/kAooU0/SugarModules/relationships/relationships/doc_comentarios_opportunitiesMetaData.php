<?php
// created: 2021-06-14 16:40:36
$dictionary["doc_comentarios_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'doc_comentarios_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Doc_Comentarios',
      'rhs_table' => 'doc_comentarios',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_comentarios_opportunities_c',
      'join_key_lhs' => 'doc_comentarios_opportunitiesopportunities_ida',
      'join_key_rhs' => 'doc_comentarios_opportunitiesdoc_comentarios_idb',
    ),
  ),
  'table' => 'doc_comentarios_opportunities_c',
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
      'name' => 'doc_comentarios_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_comentarios_opportunitiesdoc_comentarios_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_comentarios_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_comentarios_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'doc_comentarios_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'doc_comentarios_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_comentarios_opportunitiesdoc_comentarios_idb',
      ),
    ),
  ),
);