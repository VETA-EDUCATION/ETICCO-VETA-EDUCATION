<?php
 // created: 2022-03-22 09:00:20
$layout_defs["Doc_DocsSolicitados"]["subpanel_setup"]['doc_docssolicitados_doc_plantillas'] = array (
  'order' => 100,
  'module' => 'Doc_Plantillas',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_DOCSSOLICITADOS_DOC_PLANTILLAS_FROM_DOC_PLANTILLAS_TITLE',
  'get_subpanel_data' => 'doc_docssolicitados_doc_plantillas',
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
