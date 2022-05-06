<?php
 // created: 2022-03-22 09:00:19
$layout_defs["Veta_College"]["subpanel_setup"]['doc_plantillas_veta_college'] = array (
  'order' => 100,
  'module' => 'Doc_Plantillas',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_PLANTILLAS_VETA_COLLEGE_FROM_DOC_PLANTILLAS_TITLE',
  'get_subpanel_data' => 'doc_plantillas_veta_college',
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
