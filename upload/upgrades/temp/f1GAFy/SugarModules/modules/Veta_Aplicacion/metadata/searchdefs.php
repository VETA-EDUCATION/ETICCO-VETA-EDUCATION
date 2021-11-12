<?php
$module_name = 'Veta_Aplicacion';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'estudiante' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ESTUDIANTE',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'estudiante',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'estudiante' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_ESTUDIANTE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACT_ID_C',
        'name' => 'estudiante',
      ),
      'curso' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CURSO',
        'width' => '10%',
        'default' => true,
        'name' => 'curso',
      ),
      'jornada' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_JORNADA',
        'width' => '10%',
        'default' => true,
        'name' => 'jornada',
      ),
      'duracion' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DURACION',
        'width' => '10%',
        'default' => true,
        'name' => 'duracion',
      ),
      'intensidad' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_INTENSIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'intensidad',
      ),
      'campus' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CAMPUS',
        'width' => '10%',
        'default' => true,
        'name' => 'campus',
      ),
      'fecha_admisiones' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_ADMISIONES',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_admisiones',
      ),
      'fecha_envio' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_ENVIO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_envio',
      ),
      'fecha_expiracion_visa' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXPIRACION_VISA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_expiracion_visa',
      ),
      'estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado',
      ),
      'veta_aplicacion_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'VETA_APLICACION_OPPORTUNITIESOPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_aplicacion_opportunities_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
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
