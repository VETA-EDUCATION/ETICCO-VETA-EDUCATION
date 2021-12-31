<?php
 // created: 2021-08-02 14:43:50
$layout_defs["Veta_Requerimiento"]["subpanel_setup"]['veta_requerimiento_cases_1'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_REQUERIMIENTO_CASES_1_FROM_CASES_TITLE',
  'get_subpanel_data' => 'veta_requerimiento_cases_1',
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
