<?php
// created: 2020-01-24 13:25:32
$subpanel_layout['list_fields'] = array (
  'object_image' => 
  array (
    'widget_class' => 'SubPanelIcon',
    'width' => '2%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '68%',
    'default' => true,
  ),
  'case_name' => 
  array (
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'case_id',
    'target_module' => 'Cases',
    'module' => 'Cases',
    'vname' => 'LBL_LIST_CASE',
    'width' => '20%',
    'force_exists' => true,
    'sortable' => false,
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'contact_id' => 
  array (
    'usage' => 'query_only',
    'force_exists' => true,
  ),
);