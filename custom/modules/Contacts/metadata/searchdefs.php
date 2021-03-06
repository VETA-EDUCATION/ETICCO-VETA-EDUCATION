<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'pasaporte_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PASAPORTE',
        'width' => '10%',
        'name' => 'pasaporte_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
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
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'pais_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PAIS',
        'width' => '10%',
        'name' => 'pais_c',
      ),
      'departamento_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_DEPARTAMENTO',
        'width' => '10%',
        'name' => 'departamento_c',
      ),
      'ciudad_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CIUDAD',
        'width' => '10%',
        'name' => 'ciudad_c',
      ),
      'soel_oficina_comercial' =>
          array (
              'type' => 'varchar',
              'default' => true,
              'label' => 'LBL_SOEL_OFICINA_COMERCIAL',
              'width' => '10%',
              'name' => 'soel_oficina_comercial',
              'sortable' => false,
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'soel_fuente' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_SOEL_FUENTE',
        'width' => '10%',
        'default' => true,
        'name' => 'soel_fuente',
        'function' => 
        array (
          'name' => 'soel_fprueba2',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
      'soel_creacion' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_SOEL_CREACION',
        'width' => '10%',
        'default' => true,
        'name' => 'soel_creacion',
      ),
      'fecha_expiracion_visa_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_EXPIRACION_VISA',
        'width' => '10%',
        'name' => 'fecha_expiracion_visa_c',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'campaign_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CAMPAIGN',
        'id' => 'CAMPAIGN_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'campaign_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
