<?php
 // created: 2019-11-30 14:01:37
$layout_defs["Contacts"]["subpanel_setup"]['veta_solvenciaeconomica_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_SolvenciaEconomica',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_VETA_SOLVENCIAECONOMICA_TITLE',
  'get_subpanel_data' => 'veta_solvenciaeconomica_contacts',
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
