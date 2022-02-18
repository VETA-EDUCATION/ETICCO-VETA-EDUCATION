<?php
$dashletData['Veta_PasaporteDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'pais' => 
  array (
    'default' => '',
  ),
  'veta_pasaporte_leads_name' => 
  array (
    'default' => '',
  ),
  'veta_pasaporte_contacts_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_PasaporteDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'pais' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'default' => true,
  ),
  'veta_pasaporte_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PASAPORTE_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_PASAPORTE_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'veta_pasaporte_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PASAPORTE_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_PASAPORTE_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_emision' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EMISION',
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
  'autoridad_emite' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AUTORIDAD_EMITE',
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
