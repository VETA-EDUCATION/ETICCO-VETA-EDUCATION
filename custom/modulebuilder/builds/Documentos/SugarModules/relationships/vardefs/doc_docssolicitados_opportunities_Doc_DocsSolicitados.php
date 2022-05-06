<?php
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
