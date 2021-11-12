<?php
 // created: 2019-11-02 19:30:49
$layout_defs["Veta_COE"]["subpanel_setup"]['veta_correccioncoe_veta_coe'] = array (
  'order' => 100,
  'module' => 'Veta_CorreccionCOE',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_CORRECCIONCOE_VETA_COE_FROM_VETA_CORRECCIONCOE_TITLE',
  'get_subpanel_data' => 'veta_correccioncoe_veta_coe',
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
