<?php
// created: 2021-08-03 19:41:25
$dictionary["doc_docssolicitados_doc_documentos"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'doc_docssolicitados_doc_documentos' => 
    array (
      'lhs_module' => 'Doc_DocsSolicitados',
      'lhs_table' => 'doc_docssolicitados',
      'lhs_key' => 'id',
      'rhs_module' => 'Doc_Documentos',
      'rhs_table' => 'doc_documentos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_docssolicitados_doc_documentos_c',
      'join_key_lhs' => 'doc_docssolicitados_doc_documentosdoc_docssolicitados_ida',
      'join_key_rhs' => 'doc_docssolicitados_doc_documentosdoc_documentos_idb',
    ),
  ),
  'table' => 'doc_docssolicitados_doc_documentos_c',
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
      'name' => 'doc_docssolicitados_doc_documentosdoc_docssolicitados_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_docssolicitados_doc_documentosdoc_documentos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_docssolicitados_doc_documentosspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_docssolicitados_doc_documentos_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'doc_docssolicitados_doc_documentosdoc_docssolicitados_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'doc_docssolicitados_doc_documentos_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_docssolicitados_doc_documentosdoc_documentos_idb',
      ),
    ),
  ),
);