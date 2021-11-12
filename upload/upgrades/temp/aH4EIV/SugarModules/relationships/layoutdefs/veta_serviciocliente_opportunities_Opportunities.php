<?php
 // created: 2019-12-19 13:16:52
$layout_defs["Opportunities"]["subpanel_setup"]['veta_serviciocliente_opportunities'] = array (
  'order' => 100,
  'module' => 'Veta_ServicioCliente',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_VETA_SERVICIOCLIENTE_TITLE',
  'get_subpanel_data' => 'veta_serviciocliente_opportunities',
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
