<?php
 // created: 2021-08-07 18:53:01
$layout_defs["Doc_Documentos_Adic"]["subpanel_setup"]['doc_documentos_adic_opportunities'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_DOCUMENTOS_ADIC_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
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
