<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Hijo',
    'varName' => 'Veta_Hijo',
    'orderBy' => 'veta_hijo.name',
    'whereClauses' => array (
  'name' => 'veta_hijo.name',
  'veta_hijo_contacts_name' => 'veta_hijo.veta_hijo_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_hijo_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_hijo_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_HIJO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_HIJO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_hijo_contacts_name',
  ),
),
);
