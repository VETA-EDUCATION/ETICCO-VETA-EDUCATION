<?php
$dashletData['Veta_InformacionLaboralDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'veta_informacionlaboral_leads_name' => 
  array (
    'default' => '',
  ),
  'veta_informacionlaboral_contacts_name' => 
  array (
    'default' => '',
  ),
  'empresa' => 
  array (
    'default' => '',
  ),
  'fecha_inicio' => 
  array (
    'default' => '',
  ),
  'fecha_retiro' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
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
  'veta_informacionlaboral_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'veta_informacionlaboral_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'empresa' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPRESA',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_inicio' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_retiro' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RETIRO',
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
