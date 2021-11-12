<?php
// created: 2021-06-14 16:40:36
$dictionary["Doc_Comentarios"]["fields"]["doc_comentarios_opportunities"] = array (
  'name' => 'doc_comentarios_opportunities',
  'type' => 'link',
  'relationship' => 'doc_comentarios_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_DOC_COMENTARIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'doc_comentarios_opportunitiesopportunities_ida',
);
$dictionary["Doc_Comentarios"]["fields"]["doc_comentarios_opportunities_name"] = array (
  'name' => 'doc_comentarios_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DOC_COMENTARIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'doc_comentarios_opportunitiesopportunities_ida',
  'link' => 'doc_comentarios_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Doc_Comentarios"]["fields"]["doc_comentarios_opportunitiesopportunities_ida"] = array (
  'name' => 'doc_comentarios_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'doc_comentarios_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DOC_COMENTARIOS_OPPORTUNITIES_FROM_DOC_COMENTARIOS_TITLE',
);
