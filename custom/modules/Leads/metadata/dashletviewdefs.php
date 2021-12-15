<?php
$dashletData['LeadsDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'pasaporte_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['LeadsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'pasaporte_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PASAPORTE',
    'width' => '10%',
  ),
  'email1' => 
  array (
    'width' => '30%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => true,
    'name' => 'email1',
  ),
  'lead_source' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LEAD_SOURCE',
    'name' => 'lead_source',
    'default' => false,
  ),
  'status' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'name' => 'status',
    'default' => false,
  ),
  'account_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_ACCOUNT_NAME',
    'name' => 'account_name',
    'default' => false,
  ),
  'phone_home' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'name' => 'phone_home',
    'default' => false,
  ),
  'phone_mobile' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'name' => 'phone_mobile',
    'default' => false,
  ),
  'phone_other' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'name' => 'phone_other',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
