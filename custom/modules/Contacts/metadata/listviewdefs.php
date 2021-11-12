<?php
$listViewDefs ['Contacts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'PASAPORTE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PASAPORTE',
    'width' => '10%',
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}</a>',
    'default' => true,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'default' => true,
  ),
  'EDAD_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_EDAD',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'VISA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VISA',
    'width' => '10%',
  ),
  'FECHA_EXPIRACION_VISA_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_EXPIRACION_VISA',
    'width' => '10%',
  ),
  'FECHA_DE_VIAJE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_FECHA_DE_VIAJE',
    'width' => '10%',
  ),
  'SOEL_CREACION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SOEL_CREACION',
    'width' => '10%',
    'default' => true,
  ),
  'SOEL_AUDITORIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SOEL_AUDITORIA',
    'width' => '10%',
    'default' => true,
  ),
  'SOEL_FUENTE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SOEL_FUENTE',
    'width' => '10%',
    'default' => true,
  ),
  'SOEL_OFICINA_COMERCIAL' =>
      array (
          'type' => 'varchar',
          'label' => 'LBL_SOEL_OFICINA_COMERCIAL',
          'width' => '10%',
          'default' => true,
          'sortable' => false,
      ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'FECHA_VIAJE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_FECHA_VIAJE',
    'width' => '10%',
  ),
  'RELACION_CONTACTO_EMERGENCIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_RELACION_CONTACTO_EMERGENCIA',
    'width' => '10%',
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
  'CELULAR_AUTRALIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CELULAR_AUTRALIA',
    'width' => '10%',
  ),
  'CIUDAD_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
  ),
  'CUENTA_BANCARIA_AUSTRALIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CUENTA_BANCARIA_AUSTRALIA',
    'width' => '10%',
  ),
  'NOMBRE_CONYUGE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NOMBRE_CONYUGE',
    'width' => '10%',
  ),
  'VISA_NEGADA_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_VISA_NEGADA_C',
    'width' => '10%',
  ),
  'PAIS_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
  ),
  'ANOS_SIN_ESTUDIAR_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_ANOS_SIN_ESTUDIAR',
    'width' => '10%',
  ),
  'VIAJES_REALIZADOS_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_VIAJES_REALIZADOS',
    'sortable' => false,
    'width' => '10%',
  ),
  'CIUDAD_NACIMIENTO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD_NACIMIENTO',
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
  'IDENTIFICACION_AUSTRALIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_IDENTIFICACION_AUSTRALIA',
    'width' => '10%',
  ),
  'DEPARTAMENTO_NACIMIENTO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO_NACIMIENTO',
    'width' => '10%',
  ),
  'ESTADO_CIVIL_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_CIVIL',
    'width' => '10%',
  ),
  'CELULAR_CONTACTO_EMERGENCIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CELULAR_CONTACTO_EMERGENCIA',
    'width' => '10%',
  ),
  'OCUPACION_CONYUGE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_OCUPACION_CONYUGE',
    'width' => '10%',
  ),
  'NIVEL_INGLES_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NIVEL_INGLES',
    'width' => '10%',
  ),
  'GENERO_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GENERO',
    'width' => '10%',
  ),
  'PAIS_NACIMIENTO_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PAIS_NACIMIENTO',
    'width' => '10%',
  ),
  'CONTACTO_EMERGENCIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CONTACTO_EMERGENCIA',
    'width' => '10%',
  ),
  'DIRECCION_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DIRECCION',
    'width' => '10%',
  ),
  'INSTITUCION_AUSTRALIA_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_INSTITUCION_AUSTRALIA',
    'width' => '10%',
  ),
  'EDAD_CONYUGE_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_EDAD_CONYUGE',
    'width' => '10%',
  ),
  'BIRTHDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'FECHA_PROXIMO_CONTACTO_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
    'width' => '10%',
  ),
  'FECHA_ULTIMO_CONTACTO_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
    'width' => '10%',
  ),
  'NACIMIENTO_CONYUGE_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_NACIMIENTO_CONYUGE',
    'width' => '10%',
  ),
);
;
?>
