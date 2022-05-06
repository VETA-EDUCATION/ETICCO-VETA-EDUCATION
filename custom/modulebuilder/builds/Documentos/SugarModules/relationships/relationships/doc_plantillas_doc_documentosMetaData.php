<?php
// created: 2022-03-22 09:00:19
$dictionary["doc_plantillas_doc_documentos"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'doc_plantillas_doc_documentos' => 
    array (
      'lhs_module' => 'Doc_Plantillas',
      'lhs_table' => 'doc_plantillas',
      'lhs_key' => 'id',
      'rhs_module' => 'Doc_Documentos',
      'rhs_table' => 'doc_documentos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_plantillas_doc_documentos_c',
      'join_key_lhs' => 'doc_plantillas_doc_documentosdoc_plantillas_ida',
      'join_key_rhs' => 'doc_plantillas_doc_documentosdoc_documentos_idb',
    ),
  ),
  'table' => 'doc_plantillas_doc_documentos_c',
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
      'name' => 'doc_plantillas_doc_documentosdoc_plantillas_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_plantillas_doc_documentosdoc_documentos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_plantillas_doc_documentosspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_plantillas_doc_documentos_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_plantillas_doc_documentosdoc_plantillas_ida',
        1 => 'doc_plantillas_doc_documentosdoc_documentos_idb',
      ),
    ),
  ),
);