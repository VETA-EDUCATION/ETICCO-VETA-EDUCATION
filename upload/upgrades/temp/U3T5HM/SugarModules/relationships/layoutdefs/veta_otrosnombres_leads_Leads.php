<?php
 // created: 2019-11-28 18:33:57
$layout_defs["Leads"]["subpanel_setup"]['veta_otrosnombres_leads'] = array (
  'order' => 100,
  'module' => 'Veta_OtrosNombres',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_VETA_OTROSNOMBRES_TITLE',
  'get_subpanel_data' => 'veta_otrosnombres_leads',
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
