<?php
$popupMeta = array (
    'moduleMain' => 'Campaign',
    'varName' => 'CAMPAIGN',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'campaigns.name',
  'campaign_type' => 'campaigns.campaign_type',
  'status' => 'campaigns.status',
  'start_date' => 'campaigns.start_date',
  'end_date' => 'campaigns.end_date',
  'origen_c' => 'campaigns_cstm.origen_c',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'campaign_type',
  2 => 'status',
  3 => 'start_date',
  4 => 'end_date',
  5 => 'origen_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'campaign_type' => 
  array (
    'name' => 'campaign_type',
    'width' => '10%',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'start_date' => 
  array (
    'name' => 'start_date',
    'width' => '10%',
  ),
  'end_date' => 
  array (
    'name' => 'end_date',
    'width' => '10%',
  ),
  'origen_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ORIGEN',
    'width' => '10%',
    'name' => 'origen_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_CAMPAIGN_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'CAMPAIGN_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TYPE',
    'default' => true,
    'name' => 'campaign_type',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'START_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_START_DATE',
    'default' => true,
    'name' => 'start_date',
  ),
  'END_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_END_DATE',
    'default' => true,
    'name' => 'end_date',
  ),
  'ORIGEN_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ORIGEN',
    'width' => '10%',
  ),
),
);
