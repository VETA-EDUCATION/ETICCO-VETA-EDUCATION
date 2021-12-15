<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Presupuesto',
    'varName' => 'Veta_Presupuesto',
    'orderBy' => 'veta_presupuesto.name',
    'whereClauses' => array (
  'name' => 'veta_presupuesto.name',
  'veta_presupuesto_leads_name' => 'veta_presupuesto.veta_presupuesto_leads_name',
  'veta_presupuesto_contacts_name' => 'veta_presupuesto.veta_presupuesto_contacts_name',
  'tipo_visa' => 'veta_presupuesto.tipo_visa',
  'assigned_user_name' => 'veta_presupuesto.assigned_user_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_presupuesto_leads_name',
  5 => 'veta_presupuesto_contacts_name',
  6 => 'tipo_visa',
  7 => 'assigned_user_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'tipo_visa' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_VISA',
    'id' => 'VETA_TIPOSVISA_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'tipo_visa',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
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
