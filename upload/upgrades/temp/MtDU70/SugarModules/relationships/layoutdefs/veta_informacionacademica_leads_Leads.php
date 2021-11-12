<?php
 // created: 2019-11-29 07:05:21
$layout_defs["Leads"]["subpanel_setup"]['veta_informacionacademica_leads'] = array (
  'order' => 100,
  'module' => 'Veta_InformacionAcademica',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_VETA_INFORMACIONACADEMICA_TITLE',
  'get_subpanel_data' => 'veta_informacionacademica_leads',
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
