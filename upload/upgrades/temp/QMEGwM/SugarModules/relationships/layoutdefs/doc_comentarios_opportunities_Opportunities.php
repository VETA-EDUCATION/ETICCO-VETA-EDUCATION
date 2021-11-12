<?php
 // created: 2021-08-03 19:41:25
$layout_defs["Opportunities"]["subpanel_setup"]['doc_comentarios_opportunities'] = array (
  'order' => 100,
  'module' => 'Doc_Comentarios',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_COMENTARIOS_OPPORTUNITIES_FROM_DOC_COMENTARIOS_TITLE',
  'get_subpanel_data' => 'doc_comentarios_opportunities',
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
