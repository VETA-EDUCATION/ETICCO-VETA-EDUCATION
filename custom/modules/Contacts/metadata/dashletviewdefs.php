<?php
$dashletData['ContactsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'pasaporte_c' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ContactsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'pasaporte_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PASAPORTE',
    'width' => '10%',
    'name' => 'pasaporte_c',
  ),
  'phone_home' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'name' => 'phone_home',
    'default' => true,
  ),
  'email1' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'name' => 'email1',
    'default' => true,
  ),
  'phone_mobile' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'name' => 'phone_mobile',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'assigned_user_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'first_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FIRST_NAME',
    'width' => '10%',
    'default' => false,
    'name' => 'first_name',
  ),
  'departamento_nacimiento_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO_NACIMIENTO',
    'width' => '10%',
    'name' => 'departamento_nacimiento_c',
  ),
  'viajes_realizados_c' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_VIAJES_REALIZADOS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'viajes_realizados_c',
  ),
  'anos_sin_estudiar_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_ANOS_SIN_ESTUDIAR',
    'width' => '10%',
    'name' => 'anos_sin_estudiar_c',
  ),
  'ciudad_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'name' => 'ciudad_c',
  ),
  'cuenta_bancaria_australia_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CUENTA_BANCARIA_AUSTRALIA',
    'width' => '10%',
    'name' => 'cuenta_bancaria_australia_c',
  ),
  'nombre_conyuge_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NOMBRE_CONYUGE',
    'width' => '10%',
    'name' => 'nombre_conyuge_c',
  ),
  'visa_negada_c' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_VISA_NEGADA_C',
    'width' => '10%',
    'name' => 'visa_negada_c',
  ),
  'ciudad_nacimiento_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD_NACIMIENTO',
    'width' => '10%',
    'name' => 'ciudad_nacimiento_c',
  ),
  'pais_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
    'name' => 'pais_c',
  ),
  'departamento_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'width' => '10%',
    'name' => 'departamento_c',
  ),
  'identificacion_australia_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_IDENTIFICACION_AUSTRALIA',
    'width' => '10%',
    'name' => 'identificacion_australia_c',
  ),
  'celular_contacto_emergencia_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CELULAR_CONTACTO_EMERGENCIA',
    'width' => '10%',
    'name' => 'celular_contacto_emergencia_c',
  ),
  'last_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LAST_NAME',
    'width' => '10%',
    'default' => false,
    'name' => 'last_name',
  ),
  'lead_source' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LEAD_SOURCE',
    'width' => '10%',
    'default' => false,
    'name' => 'lead_source',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
  'estado_civil_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_CIVIL',
    'width' => '10%',
    'name' => 'estado_civil_c',
  ),
  'relacion_contacto_emergencia_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_RELACION_CONTACTO_EMERGENCIA',
    'width' => '10%',
    'name' => 'relacion_contacto_emergencia_c',
  ),
  'celular_autralia_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CELULAR_AUTRALIA',
    'width' => '10%',
    'name' => 'celular_autralia_c',
  ),
  'nivel_ingles_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NIVEL_INGLES',
    'width' => '10%',
    'name' => 'nivel_ingles_c',
  ),
  'pais_nacimiento_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS_NACIMIENTO',
    'width' => '10%',
    'name' => 'pais_nacimiento_c',
  ),
  'ocupacion_conyuge_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_OCUPACION_CONYUGE',
    'width' => '10%',
    'name' => 'ocupacion_conyuge_c',
  ),
  'contacto_emergencia_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CONTACTO_EMERGENCIA',
    'width' => '10%',
    'name' => 'contacto_emergencia_c',
  ),
  'genero_c' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GENERO',
    'width' => '10%',
    'name' => 'genero_c',
  ),
  'direccion_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DIRECCION',
    'width' => '10%',
    'name' => 'direccion_c',
  ),
  'institucion_australia_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_INSTITUCION_AUSTRALIA',
    'width' => '10%',
    'name' => 'institucion_australia_c',
  ),
  'edad_conyuge_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_EDAD_CONYUGE',
    'width' => '10%',
    'name' => 'edad_conyuge_c',
  ),
  'edad_c' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_EDAD',
    'width' => '10%',
    'name' => 'edad_c',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'birthdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => false,
    'name' => 'birthdate',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
