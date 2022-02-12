<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Ciudadania',
    'varName' => 'Veta_Ciudadania',
    'orderBy' => 'veta_ciudadania.name',
    'whereClauses' => array (
  'name' => 'veta_ciudadania.name',
  'veta_ciudadania_leads_name' => 'veta_ciudadania.veta_ciudadania_leads_name',
  'veta_ciudadania_contacts_name' => 'veta_ciudadania.veta_ciudadania_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_ciudadania_leads_name',
  5 => 'veta_ciudadania_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_ciudadania_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_CIUDADANIA_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_CIUDADANIA_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_ciudadania_leads_name',
  ),
  'veta_ciudadania_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_CIUDADANIA_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_CIUDADANIA_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_ciudadania_contacts_name',
  ),
),
);
