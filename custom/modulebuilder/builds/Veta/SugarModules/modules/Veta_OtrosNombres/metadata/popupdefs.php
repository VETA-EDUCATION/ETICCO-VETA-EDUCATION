<?php
$popupMeta = array (
    'moduleMain' => 'Veta_OtrosNombres',
    'varName' => 'Veta_OtrosNombres',
    'orderBy' => 'veta_otrosnombres.name',
    'whereClauses' => array (
  'name' => 'veta_otrosnombres.name',
  'veta_otrosnombres_leads_name' => 'veta_otrosnombres.veta_otrosnombres_leads_name',
  'veta_otrosnombres_contacts_name' => 'veta_otrosnombres.veta_otrosnombres_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_otrosnombres_leads_name',
  5 => 'veta_otrosnombres_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_otrosnombres_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_OTROSNOMBRES_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_OTROSNOMBRES_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_otrosnombres_leads_name',
  ),
  'veta_otrosnombres_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_OTROSNOMBRES_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_OTROSNOMBRES_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_otrosnombres_contacts_name',
  ),
),
);
