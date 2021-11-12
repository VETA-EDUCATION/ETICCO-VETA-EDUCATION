<?php
 // created: 2021-08-03 19:41:25
$layout_defs["Doc_DocsSolicitados"]["subpanel_setup"]['doc_docssolicitados_doc_documentos'] = array (
  'order' => 100,
  'module' => 'Doc_Documentos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_DOCSSOLICITADOS_DOC_DOCUMENTOS_FROM_DOC_DOCUMENTOS_TITLE',
  'get_subpanel_data' => 'doc_docssolicitados_doc_documentos',
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
