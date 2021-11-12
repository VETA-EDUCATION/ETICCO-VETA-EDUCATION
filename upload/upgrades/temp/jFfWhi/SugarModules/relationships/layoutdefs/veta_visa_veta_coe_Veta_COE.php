<?php
 // created: 2019-11-28 15:02:13
$layout_defs["Veta_COE"]["subpanel_setup"]['veta_visa_veta_coe'] = array (
  'order' => 100,
  'module' => 'Veta_Visa',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_VISA_VETA_COE_FROM_VETA_VISA_TITLE',
  'get_subpanel_data' => 'veta_visa_veta_coe',
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
