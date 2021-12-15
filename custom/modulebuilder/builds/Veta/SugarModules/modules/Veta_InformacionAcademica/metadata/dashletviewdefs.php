<?php
$dashletData['Veta_InformacionAcademicaDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'nivel_estudios' => 
  array (
    'default' => '',
  ),
  'veta_informacionacademica_leads_name' => 
  array (
    'default' => '',
  ),
  'veta_informacionacademica_contacts_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_InformacionAcademicaDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'fecha_inicio' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_INICIO',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_fin' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_FIN',
    'width' => '10%',
    'default' => true,
  ),
  'nivel_estudios' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_NIVEL_ESTUDIOS',
    'width' => '10%',
    'default' => true,
  ),
  'veta_informacionacademica_leads_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONACADEMICA_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_INFORMACIONACADEMICA_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'veta_informacionacademica_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_INFORMACIONACADEMICA_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_INFORMACIONACADEMICA_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
