<?php
 // created: 2022-03-22 09:00:19
$layout_defs["Opportunities"]["subpanel_setup"]['doc_comentarioscolestage_opportunities'] = array (
  'order' => 100,
  'module' => 'Doc_ComentariosColEstAge',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_COMENTARIOSCOLESTAGE_OPPORTUNITIES_FROM_DOC_COMENTARIOSCOLESTAGE_TITLE',
  'get_subpanel_data' => 'doc_comentarioscolestage_opportunities',
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
