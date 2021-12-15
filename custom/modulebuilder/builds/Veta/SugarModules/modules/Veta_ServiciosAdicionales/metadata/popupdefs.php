<?php
$popupMeta = array (
    'moduleMain' => 'Veta_ServiciosAdicionales',
    'varName' => 'Veta_ServiciosAdicionales',
    'orderBy' => 'veta_serviciosadicionales.name',
    'whereClauses' => array (
  'name' => 'veta_serviciosadicionales.name',
  'veta_serviciosadicionales_leads_name' => 'veta_serviciosadicionales.veta_serviciosadicionales_leads_name',
  'veta_serviciosadicionales_contacts_name' => 'veta_serviciosadicionales.veta_serviciosadicionales_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_serviciosadicionales_leads_name',
  5 => 'veta_serviciosadicionales_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_serviciosadicionales_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SERVICIOSADICIONALES_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_SERVICIOSADICIONALES_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_serviciosadicionales_leads_name',
  ),
  'veta_serviciosadicionales_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SERVICIOSADICIONALES_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_SERVICIOSADICIONALES_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_serviciosadicionales_contacts_name',
  ),
),
);
