<?php
 // created: 2019-11-23 18:56:28
$layout_defs["Veta_Loo"]["subpanel_setup"]['veta_loo_cases'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_LOO_CASES_FROM_CASES_TITLE',
  'get_subpanel_data' => 'veta_loo_cases',
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
