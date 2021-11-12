<?php
 // created: 2021-09-02 13:15:21
$layout_defs["Veta_Liquidacion"]["subpanel_setup"]['veta_liquidacion_cases'] = array (
  'order' => 100,
  'module' => 'Cases',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_LIQUIDACION_CASES_FROM_CASES_TITLE',
  'get_subpanel_data' => 'veta_liquidacion_cases',
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
