<?php
 // created: 2021-09-02 13:15:23
$layout_defs["Contacts"]["subpanel_setup"]['veta_visas_contacts'] = array (
  'order' => 100,
  'module' => 'Veta_Visas',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_VISAS_CONTACTS_FROM_VETA_VISAS_TITLE',
  'get_subpanel_data' => 'veta_visas_contacts',
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
