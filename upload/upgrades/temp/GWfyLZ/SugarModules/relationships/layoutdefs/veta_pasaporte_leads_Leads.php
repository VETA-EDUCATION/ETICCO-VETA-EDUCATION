<?php
 // created: 2019-11-29 06:45:28
$layout_defs["Leads"]["subpanel_setup"]['veta_pasaporte_leads'] = array (
  'order' => 100,
  'module' => 'Veta_Pasaporte',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_PASAPORTE_LEADS_FROM_VETA_PASAPORTE_TITLE',
  'get_subpanel_data' => 'veta_pasaporte_leads',
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
