<?php
$listViewDefs ['Leads'] = 
array (
  'FULL_NAME' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
  ),
  'PASAPORTE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PASAPORTE',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'width' => '7%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'default' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '16%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}</a>',
    'default' => true,
  ),
  'EDAD_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_EDAD',
    'width' => '10%',
  ),
  'CIUDAD_TMP_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CIUDAD_TMP',
    'width' => '10%',
  ),
  'CIUDAD_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'EXPIRACION_VISA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EXPIRACION_VISA',
    'width' => '10%',
  ),
  'FECHA_EXPIRACION_VISA_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_EXPIRACION_VISA',
    'width' => '10%',
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'FECHA_PRIMER_PRESUPUESTO_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_FECHA_PRIMER_PRESUPUESTO',
    'width' => '10%',
  ),
  'CAMPANA_C' =>
      array (
          'type' => 'relate',
          'default' => false,
          'studio' => 'visible',
          'label' => 'LBL_CAMPANA',
          'id' => 'CAMPAIGN_ID_C',
          'link' => true,
          'width' => '10%'
  ),
  'SOEL_OFICINA_COMERCIAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SOEL_OFICINA_COMERCIAL',
    'width' => '10%',
    'default' => true,
    'sortable' => false,
  ),
  'SOEL_AUDITORIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SOEL_AUDITORIA',
    'width' => '10%',
    'default' => true,
  ),
  'VISA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_VISA',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
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
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'TRABAJO_ACTUAL_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TRABAJO_ACTUAL',
    'width' => '10%',
  ),
  'CARRERA_UNIVERSITARIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CARRERA_UNIVERSITARIA',
    'width' => '10%',
  ),
  'CONVERTED' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CONVERTED',
    'width' => '10%',
  ),
  'BIRTHDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => false,
  ),
  'PAIS_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
  ),
  'DEPARTAMENTO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'width' => '10%',
  ),
);
;
?>
