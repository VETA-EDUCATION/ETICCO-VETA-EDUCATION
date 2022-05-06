<?php
// created: 2022-03-22 09:00:20
$dictionary["doc_docssolicitados_doc_plantillas"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'doc_docssolicitados_doc_plantillas' => 
    array (
      'lhs_module' => 'Doc_DocsSolicitados',
      'lhs_table' => 'doc_docssolicitados',
      'lhs_key' => 'id',
      'rhs_module' => 'Doc_Plantillas',
      'rhs_table' => 'doc_plantillas',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_docssolicitados_doc_plantillas_c',
      'join_key_lhs' => 'doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida',
      'join_key_rhs' => 'doc_docssolicitados_doc_plantillasdoc_plantillas_idb',
    ),
  ),
  'table' => 'doc_docssolicitados_doc_plantillas_c',
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
      'name' => 'doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_docssolicitados_doc_plantillasdoc_plantillas_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_docssolicitados_doc_plantillasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_docssolicitados_doc_plantillas_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_docssolicitados_doc_plantillasdoc_docssolicitados_ida',
        1 => 'doc_docssolicitados_doc_plantillasdoc_plantillas_idb',
      ),
    ),
  ),
);