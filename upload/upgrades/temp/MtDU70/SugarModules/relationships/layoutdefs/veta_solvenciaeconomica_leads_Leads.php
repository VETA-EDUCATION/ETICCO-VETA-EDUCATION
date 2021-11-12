<?php
 // created: 2019-11-29 07:05:28
$layout_defs["Leads"]["subpanel_setup"]['veta_solvenciaeconomica_leads'] = array (
  'order' => 100,
  'module' => 'Veta_SolvenciaEconomica',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_VETA_SOLVENCIAECONOMICA_TITLE',
  'get_subpanel_data' => 'veta_solvenciaeconomica_leads',
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
