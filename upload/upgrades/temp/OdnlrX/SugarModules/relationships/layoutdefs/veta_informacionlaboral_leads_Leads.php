<?php
 // created: 2019-11-23 18:56:27
$layout_defs["Leads"]["subpanel_setup"]['veta_informacionlaboral_leads'] = array (
  'order' => 100,
  'module' => 'Veta_InformacionLaboral',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_VETA_INFORMACIONLABORAL_TITLE',
  'get_subpanel_data' => 'veta_informacionlaboral_leads',
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
