<?php
// created: 2021-08-07 18:53:01
$dictionary["Doc_Documentos"]["fields"]["doc_docssolicitados_doc_documentos"] = array (
  'name' => 'doc_docssolicitados_doc_documentos',
  'type' => 'link',
  'relationship' => 'doc_docssolicitados_doc_documentos',
  'source' => 'non-db',
  'module' => 'Doc_DocsSolicitados',
  'bean_name' => 'Doc_DocsSolicitados',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_DOC_DOCUMENTOS_FROM_DOC_DOCSSOLICITADOS_TITLE',
  'id_name' => 'doc_docssolicitados_doc_documentosdoc_docssolicitados_ida',
);
$dictionary["Doc_Documentos"]["fields"]["doc_docssolicitados_doc_documentos_name"] = array (
  'name' => 'doc_docssolicitados_doc_documentos_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_DOC_DOCUMENTOS_FROM_DOC_DOCSSOLICITADOS_TITLE',
  'save' => true,
  'id_name' => 'doc_docssolicitados_doc_documentosdoc_docssolicitados_ida',
  'link' => 'doc_docssolicitados_doc_documentos',
  'table' => 'doc_docssolicitados',
  'module' => 'Doc_DocsSolicitados',
  'rname' => 'name',
);
$dictionary["Doc_Documentos"]["fields"]["doc_docssolicitados_doc_documentosdoc_docssolicitados_ida"] = array (
  'name' => 'doc_docssolicitados_doc_documentosdoc_docssolicitados_ida',
  'type' => 'link',
  'relationship' => 'doc_docssolicitados_doc_documentos',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_DOC_DOCUMENTOS_FROM_DOC_DOCUMENTOS_TITLE',
);
