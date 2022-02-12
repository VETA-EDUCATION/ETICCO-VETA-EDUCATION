<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Visas',
    'varName' => 'Veta_Visas',
    'orderBy' => 'veta_visas.name',
    'whereClauses' => array (
  'name' => 'veta_visas.name',
  'pais' => 'veta_visas.pais',
  'veta_visas_leads_name' => 'veta_visas.veta_visas_leads_name',
  'veta_visas_contacts_name' => 'veta_visas.veta_visas_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pais',
  5 => 'veta_visas_leads_name',
  6 => 'veta_visas_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'pais' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'name' => 'pais',
  ),
  'veta_visas_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_VISAS_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_visas_leads_name',
  ),
  'veta_visas_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_VISAS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_VISAS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_visas_contacts_name',
  ),
),
);
