<?php
$popupMeta = array (
    'moduleMain' => 'Veta_InformacionAcademica',
    'varName' => 'Veta_InformacionAcademica',
    'orderBy' => 'veta_informacionacademica.name',
    'whereClauses' => array (
  'name' => 'veta_informacionacademica.name',
  'nivel_estudios' => 'veta_informacionacademica.nivel_estudios',
  'veta_informacionacademica_leads_name' => 'veta_informacionacademica.veta_informacionacademica_leads_name',
  'veta_informacionacademica_contacts_name' => 'veta_informacionacademica.veta_informacionacademica_contacts_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'nivel_estudios',
  5 => 'veta_informacionacademica_leads_name',
  6 => 'veta_informacionacademica_contacts_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'nivel_estudios' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NIVEL_ESTUDIOS',
    'width' => '10%',
    'name' => 'nivel_estudios',
  ),
  'veta_informacionacademica_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_INFORMACIONACADEMICA_LEADSLEADS_IDA',
    'width' => '10%',
    'name' => 'veta_informacionacademica_leads_name',
  ),
  'veta_informacionacademica_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_INFORMACIONACADEMICA_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'name' => 'veta_informacionacademica_contacts_name',
  ),
),
);
