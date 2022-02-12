<?php
 // created: 2022-01-28 10:25:09
$layout_defs["Leads"]["subpanel_setup"]['veta_requerimiento_leads'] = array (
  'order' => 100,
  'module' => 'Veta_Requerimiento',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_VETA_REQUERIMIENTO_TITLE',
  'get_subpanel_data' => 'veta_requerimiento_leads',
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
