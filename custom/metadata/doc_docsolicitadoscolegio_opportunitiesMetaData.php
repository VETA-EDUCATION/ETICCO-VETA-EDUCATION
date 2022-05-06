<?php
// created: 2022-03-22 09:00:20
$dictionary["doc_docsolicitadoscolegio_opportunities"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'doc_docsolicitadoscolegio_opportunities' => 
    array (
      'lhs_module' => 'Doc_DocSolicitadosColegio',
      'lhs_table' => 'doc_docsolicitadoscolegio',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_docsolicitadoscolegio_opportunities_c',
      'join_key_lhs' => 'doc_docsol92bccolegio_ida',
      'join_key_rhs' => 'doc_docsolicitadoscolegio_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'doc_docsolicitadoscolegio_opportunities_c',
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
      'name' => 'doc_docsol92bccolegio_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_docsolicitadoscolegio_opportunitiesopportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_docsolicitadoscolegio_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_docsolicitadoscolegio_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_docsol92bccolegio_ida',
        1 => 'doc_docsolicitadoscolegio_opportunitiesopportunities_idb',
      ),
    ),
  ),
);