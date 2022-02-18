<?php
 // created: 2019-10-09 12:37:32
$layout_defs["Contacts"]["subpanel_setup"]['veta_hijo_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_Hijo',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_HIJO_CONTACTS_FROM_VETA_HIJO_TITLE',
  'get_subpanel_data' => 'veta_hijo_contacts',
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
