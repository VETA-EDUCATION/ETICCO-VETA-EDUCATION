<?php
 // created: 2020-10-14 00:58:40
$layout_defs["Leads"]["subpanel_setup"]['veta_visas_leads'] = array (
  'order' => 100,
  'module' => 'Veta_Visas',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_VISAS_LEADS_FROM_VETA_VISAS_TITLE',
  'get_subpanel_data' => 'veta_visas_leads',
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
