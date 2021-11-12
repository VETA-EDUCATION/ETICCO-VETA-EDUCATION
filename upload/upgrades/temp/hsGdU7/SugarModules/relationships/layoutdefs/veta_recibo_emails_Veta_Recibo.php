<?php
 // created: 2019-12-05 18:00:49
$layout_defs["Veta_Recibo"]["subpanel_setup"]['veta_recibo_emails'] = array (
  'order' => 100,
  'module' => 'Emails',
  'subpanel_name' => 'ForQueues',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VETA_RECIBO_EMAILS_FROM_EMAILS_TITLE',
  'get_subpanel_data' => 'veta_recibo_emails',
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
