<?php
 // created: 2019-11-23 12:29:58
$layout_defs["Leads"]["subpanel_setup"]['veta_recibo_leads'] = array (
  'order' => 100,
  'module' => 'Veta_Recibo',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_RECIBO_LEADS_FROM_VETA_RECIBO_TITLE',
  'get_subpanel_data' => 'veta_recibo_leads',
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
