<?php
 // created: 2019-11-29 06:45:23
$layout_defs["Leads"]["subpanel_setup"]['veta_ciudadania_leads'] = array (
  'order' => 100,
  'module' => 'Veta_Ciudadania',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_CIUDADANIA_LEADS_FROM_VETA_CIUDADANIA_TITLE',
  'get_subpanel_data' => 'veta_ciudadania_leads',
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
