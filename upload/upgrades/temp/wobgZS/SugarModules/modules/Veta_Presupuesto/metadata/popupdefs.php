<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Presupuesto',
    'varName' => 'Veta_Presupuesto',
    'orderBy' => 'veta_presupuesto.name',
    'whereClauses' => array (
  'name' => 'veta_presupuesto.name',
  'veta_presupuesto_leads_name' => 'veta_presupuesto.veta_presupuesto_leads_name',
  'veta_presupuesto_contacts_name' => 'veta_presupuesto.veta_presupuesto_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_presupuesto_leads_name',
  5 => 'veta_presupuesto_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_presupuesto_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_PRESUPUESTO_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_presupuesto_leads_name',
  ),
  'veta_presupuesto_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_PRESUPUESTO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_presupuesto_contacts_name',
  ),
),
);
