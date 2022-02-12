<?php
$module_name = 'Veta_ServiciosAdicionales';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TIEMPO_ACOMODACION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TIEMPO_ACOMODACION',
    'width' => '10%',
    'default' => true,
  ),
  'AFECCIONES_ACOMODACION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AFECCIONES_ACOMODACION',
    'width' => '10%',
    'default' => true,
  ),
  'CONVIVENCIA_CON_MASCOTAS' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CONVIVENCIA_CON_MASCOTAS',
    'width' => '10%',
  ),
  'CONVIVENCIA_FUMADORES' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CONVIVENCIA_FUMADORES',
    'width' => '10%',
  ),
  'CONVIVENCIA_NINOS' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CONVIVENCIA_NINOS',
    'width' => '10%',
  ),
  'OTRA_CONVIVENCIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OTRA_CONVIVENCIA',
    'width' => '10%',
    'default' => true,
  ),
  'RECOGER_AEROPUERTO' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_RECOGER_AEROPUERTO',
    'width' => '10%',
  ),
  'NOMBRE_TUTOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NOMBRE_TUTOR',
    'width' => '10%',
    'default' => true,
  ),
  'PARENTEZCO_TUTOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARENTEZCO_TUTOR',
    'width' => '10%',
    'default' => true,
  ),
  'EMAIL_TUTOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL_TUTOR',
    'width' => '10%',
    'default' => true,
  ),
  'HIJOS_VIAJAN' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_HIJOS_VIAJAN',
    'width' => '10%',
  ),
  'VETA_SERVICIOSADICIONALES_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SERVICIOSADICIONALES_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_SERVICIOSADICIONALES_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_SERVICIOSADICIONALES_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SERVICIOSADICIONALES_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_SERVICIOSADICIONALES_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
