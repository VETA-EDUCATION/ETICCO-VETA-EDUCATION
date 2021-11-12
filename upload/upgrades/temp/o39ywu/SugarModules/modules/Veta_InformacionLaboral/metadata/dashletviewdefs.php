<?php
$dashletData['Veta_InformacionLaboralDashlet']['searchFields'] = array (
  'empresa' => 
  array (
    'default' => '',
  ),
  'veta_informacionlaboral_contacts_name' => 
  array (
    'default' => '',
  ),
  'veta_informacionlaboral_leads_name' => 
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
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_InformacionLaboralDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'veta_informacionlaboral_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_informacionlaboral_contacts_name',
  ),
  'veta_informacionlaboral_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'empresa' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPRESA',
    'width' => '10%',
    'default' => true,
    'name' => 'empresa',
  ),
  'fecha_inicio' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha_inicio',
  ),
  'fecha_retiro' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RETIRO',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha_retiro',
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
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
