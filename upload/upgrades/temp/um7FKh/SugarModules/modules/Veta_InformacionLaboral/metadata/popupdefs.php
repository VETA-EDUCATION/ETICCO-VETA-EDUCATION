<?php
$popupMeta = array (
    'moduleMain' => 'Veta_InformacionLaboral',
    'varName' => 'Veta_InformacionLaboral',
    'orderBy' => 'veta_informacionlaboral.name',
    'whereClauses' => array (
  'name' => 'veta_informacionlaboral.name',
  'empresa' => 'veta_informacionlaboral.empresa',
  'veta_informacionlaboral_contacts_name' => 'veta_informacionlaboral.veta_informacionlaboral_contacts_name',
  'veta_informacionlaboral_leads_name' => 'veta_informacionlaboral.veta_informacionlaboral_leads_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'empresa',
  5 => 'veta_informacionlaboral_contacts_name',
  6 => 'veta_informacionlaboral_leads_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'empresa' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMPRESA',
    'width' => '10%',
    'name' => 'empresa',
  ),
  'veta_informacionlaboral_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_informacionlaboral_leads_name',
  ),
  'veta_informacionlaboral_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONLABORAL_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_INFORMACIONLABORAL_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_informacionlaboral_contacts_name',
  ),
),
);
