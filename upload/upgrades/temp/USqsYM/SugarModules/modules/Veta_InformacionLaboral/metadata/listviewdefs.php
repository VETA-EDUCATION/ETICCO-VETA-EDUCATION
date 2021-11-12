<?php
$module_name = 'Veta_InformacionLaboral';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'EMPRESA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPRESA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_INICIO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_RETIRO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RETIRO',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_INFORMACIONLABORAL_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_INFORMACIONLABORAL_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
