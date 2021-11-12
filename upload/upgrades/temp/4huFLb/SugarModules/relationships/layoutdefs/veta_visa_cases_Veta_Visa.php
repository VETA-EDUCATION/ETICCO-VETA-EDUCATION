<?php
 // created: 2019-11-23 12:29:57
$layout_defs["Veta_Visa"]["subpanel_setup"]['veta_visa_cases'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_VISA_CASES_FROM_CASES_TITLE',
  'get_subpanel_data' => 'veta_visa_cases',
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
