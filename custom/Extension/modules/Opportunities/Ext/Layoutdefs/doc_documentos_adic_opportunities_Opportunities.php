<?php
 // created: 2022-03-22 09:00:20
$layout_defs["Opportunities"]["subpanel_setup"]['doc_documentos_adic_opportunities'] = array (
  'order' => 100,
  'module' => 'Doc_Documentos_Adic',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_DOCUMENTOS_ADIC_OPPORTUNITIES_FROM_DOC_DOCUMENTOS_ADIC_TITLE',
  'get_subpanel_data' => 'doc_documentos_adic_opportunities',
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
