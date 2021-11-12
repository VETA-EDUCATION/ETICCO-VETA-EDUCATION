<?php
$dashletData['Veta_VisasDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'veta_visas_leads_name' => 
  array (
    'default' => '',
  ),
  'veta_visas_contacts_name' => 
  array (
    'default' => '',
  ),
  'pais' => 
  array (
    'default' => '',
  ),
  'fecha' => 
  array (
    'default' => '',
  ),
  'fecha_expiracion' => 
  array (
    'default' => '',
  ),
  'negada' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_VisasDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'fecha' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_expiracion' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXPIRACION',
    'width' => '10%',
    'default' => true,
  ),
  'pais' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'default' => true,
  ),
  'negada' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_NEGADA',
    'width' => '10%',
  ),
  'veta_visas_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_VISAS_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'veta_visas_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_VISAS_CONTACTSCONTACTS_IDA',
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
