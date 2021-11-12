<?php
$module_name = 'Veta_COE';
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
      'prospecto' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROSPECTO',
        'id' => 'LEAD_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'prospecto',
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
      'prospecto' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_PROSPECTO',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'LEAD_ID_C',
        'name' => 'prospecto',
      ),
      'fecha_solicitud' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_SOLICITUD',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_solicitud',
      ),
      'fecha_envio_estudiante' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_envio_estudiante',
      ),
      'fecha_expiracion_visa' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXPIRACION_VISA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_expiracion_visa',
      ),
      'veta_coe_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'VETA_COE_OPPORTUNITIESOPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_coe_opportunities_name',
      ),
      'veta_coe_veta_aplicacion_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
        'id' => 'VETA_COE_VETA_APLICACIONVETA_APLICACION_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_coe_veta_aplicacion_name',
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
