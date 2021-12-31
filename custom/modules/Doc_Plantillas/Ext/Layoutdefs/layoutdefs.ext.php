<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2021-08-03 19:41:26
$layout_defs["Doc_Plantillas"]["subpanel_setup"]['doc_plantillas_doc_documentos'] = array (
  'order' => 100,
  'module' => 'Doc_Documentos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_PLANTILLAS_DOC_DOCUMENTOS_FROM_DOC_DOCUMENTOS_TITLE',
  'get_subpanel_data' => 'doc_plantillas_doc_documentos',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2021-08-03 19:41:26
$layout_defs["Doc_Plantillas"]["subpanel_setup"]['doc_plantillas_opportunities'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_PLANTILLAS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'doc_plantillas_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>