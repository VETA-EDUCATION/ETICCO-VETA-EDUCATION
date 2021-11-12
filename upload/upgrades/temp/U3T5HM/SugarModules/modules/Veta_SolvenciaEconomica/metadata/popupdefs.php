<?php
$popupMeta = array (
    'moduleMain' => 'Veta_SolvenciaEconomica',
    'varName' => 'Veta_SolvenciaEconomica',
    'orderBy' => 'veta_solvenciaeconomica.name',
    'whereClauses' => array (
  'name' => 'veta_solvenciaeconomica.name',
  'veta_solvenciaeconomica_leads_name' => 'veta_solvenciaeconomica.veta_solvenciaeconomica_leads_name',
  'veta_solvenciaeconomica_contacts_name' => 'veta_solvenciaeconomica.veta_solvenciaeconomica_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_solvenciaeconomica_leads_name',
  5 => 'veta_solvenciaeconomica_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_solvenciaeconomica_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_SOLVENCIAECONOMICA_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_solvenciaeconomica_leads_name',
  ),
  'veta_solvenciaeconomica_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_SOLVENCIAECONOMICA_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_solvenciaeconomica_contacts_name',
  ),
),
);
