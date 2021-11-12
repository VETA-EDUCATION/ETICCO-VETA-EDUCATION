<?php
 // created: 2019-11-23 13:02:33
$layout_defs["Leads"]["subpanel_setup"]['veta_serviciosadicionales_leads'] = array (
  'order' => 100,
  'module' => 'Veta_ServiciosAdicionales',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_SERVICIOSADICIONALES_LEADS_FROM_VETA_SERVICIOSADICIONALES_TITLE',
  'get_subpanel_data' => 'veta_serviciosadicionales_leads',
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
