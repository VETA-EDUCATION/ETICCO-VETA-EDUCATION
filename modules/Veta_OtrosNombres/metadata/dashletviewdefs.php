<?php
$dashletData['Veta_OtrosNombresDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'veta_otrosnombres_leads_name' => 
  array (
    'default' => '',
  ),
  'veta_otrosnombres_contacts_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_OtrosNombresDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'veta_otrosnombres_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_OTROSNOMBRES_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'veta_otrosnombres_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_OTROSNOMBRES_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_OTROSNOMBRES_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
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
