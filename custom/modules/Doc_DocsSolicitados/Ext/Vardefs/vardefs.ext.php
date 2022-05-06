<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2022-03-22 09:00:20
$dictionary["Doc_DocsSolicitados"]["fields"]["doc_docssolicitados_doc_documentos"] = array (
  'name' => 'doc_docssolicitados_doc_documentos',
  'type' => 'link',
  'relationship' => 'doc_docssolicitados_doc_documentos',
  'source' => 'non-db',
  'module' => 'Doc_Documentos',
  'bean_name' => 'Doc_Documentos',
  'side' => 'right',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_DOC_DOCUMENTOS_FROM_DOC_DOCUMENTOS_TITLE',
);


// created: 2022-03-22 09:00:20
$dictionary["Doc_DocsSolicitados"]["fields"]["doc_docssolicitados_doc_plantillas"] = array (
  'name' => 'doc_docssolicitados_doc_plantillas',
  'type' => 'link',
  'relationship' => 'doc_docssolicitados_doc_plantillas',
  'source' => 'non-db',
  'module' => 'Doc_Plantillas',
  'bean_name' => 'Doc_Plantillas',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_DOC_PLANTILLAS_FROM_DOC_PLANTILLAS_TITLE',
);


// created: 2022-03-22 09:00:20
$dictionary["Doc_DocsSolicitados"]["fields"]["doc_docssolicitados_opportunities"] = array (
  'name' => 'doc_docssolicitados_opportunities',
  'type' => 'link',
  'relationship' => 'doc_docssolicitados_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'doc_docssolicitados_opportunitiesopportunities_ida',
);
$dictionary["Doc_DocsSolicitados"]["fields"]["doc_docssolicitados_opportunities_name"] = array (
  'name' => 'doc_docssolicitados_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'doc_docssolicitados_opportunitiesopportunities_ida',
  'link' => 'doc_docssolicitados_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Doc_DocsSolicitados"]["fields"]["doc_docssolicitados_opportunitiesopportunities_ida"] = array (
  'name' => 'doc_docssolicitados_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'doc_docssolicitados_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DOC_DOCSSOLICITADOS_OPPORTUNITIES_FROM_DOC_DOCSSOLICITADOS_TITLE',
);

$dictionary["Doc_DocsSolicitados"]["fields"]["ayuda"] = array(
    'name' => 'ayuda',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_AYUDA',
);
$dictionary["Doc_DocsSolicitados"]["fields"]["observaciones"] = array(
    'name' => 'observaciones',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_OBSERVACIONES',
);
$dictionary["Doc_DocsSolicitados"]["fields"]["recursos"] = array(
    'name' => 'recursos',
    'type' => 'url',
    'source' => 'non-db',
    'vname' => 'LBL_RECURSOS',
);
$dictionary["Doc_DocsSolicitados"]["fields"]["solicitadopor"] = array(
    'name' => 'solicitadopor',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_SOLICITADOPOR',
);

$dictionary["Doc_DocsSolicitados"]["fields"]["plantilla"] = array(
    'name' => 'plantilla',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_PLANTILLA',
);
$dictionary["Doc_DocsSolicitados"]["fields"]["colegio"] = array(
    'name' => 'colegio',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_COLEGIO',
);




?>