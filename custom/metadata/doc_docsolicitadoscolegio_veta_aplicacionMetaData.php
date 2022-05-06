<?php
// created: 2022-03-22 09:00:20
$dictionary["doc_docsolicitadoscolegio_veta_aplicacion"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'doc_docsolicitadoscolegio_veta_aplicacion' => 
    array (
      'lhs_module' => 'Doc_DocSolicitadosColegio',
      'lhs_table' => 'doc_docsolicitadoscolegio',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Aplicacion',
      'rhs_table' => 'veta_aplicacion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'doc_docsolicitadoscolegio_veta_aplicacion_c',
      'join_key_lhs' => 'doc_docsol30e6colegio_ida',
      'join_key_rhs' => 'doc_docsolicitadoscolegio_veta_aplicacionveta_aplicacion_idb',
    ),
  ),
  'table' => 'doc_docsolicitadoscolegio_veta_aplicacion_c',
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
      'name' => 'doc_docsol30e6colegio_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'doc_docsolicitadoscolegio_veta_aplicacionveta_aplicacion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'doc_docsolicitadoscolegio_veta_aplicacionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'doc_docsolicitadoscolegio_veta_aplicacion_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'doc_docsol30e6colegio_ida',
        1 => 'doc_docsolicitadoscolegio_veta_aplicacionveta_aplicacion_idb',
      ),
    ),
  ),
);