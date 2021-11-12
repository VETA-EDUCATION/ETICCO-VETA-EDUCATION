<?php
 // created: 2019-11-23 21:03:28
$layout_defs["Contacts"]["subpanel_setup"]['veta_ciudadania_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_Ciudadania',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_CIUDADANIA_CONTACTS_FROM_VETA_CIUDADANIA_TITLE',
  'get_subpanel_data' => 'veta_ciudadania_contacts',
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
