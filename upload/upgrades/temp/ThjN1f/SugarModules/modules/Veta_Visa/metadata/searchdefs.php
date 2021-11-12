<?php
$module_name = 'Veta_Visa';
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
      'estado' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'default' => true,
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
      'estado' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'default' => true,
        'name' => 'estado',
      ),
      'fecha_aplicacion' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_APLICACION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_aplicacion',
      ),
      'fecha_pago' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_PAGO',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_pago',
      ),
      'fecha_otorgada' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_OTORGADA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_otorgada',
      ),
      'fecha_expiracion' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXPIRACION',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_expiracion',
      ),
      'fecha_firma_acta' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_FIRMA_ACTA',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_firma_acta',
      ),
      'fecha_examenes_medicos' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_EXAMENES_MEDICOS',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_examenes_medicos',
      ),
      'fecha_avac' => 
      array (
        'type' => 'date',
        'label' => 'LBL_FECHA_AVAC',
        'width' => '10%',
        'default' => true,
        'name' => 'fecha_avac',
      ),
      'veta_visa_veta_coe_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_VISA_VETA_COE_FROM_VETA_COE_TITLE',
        'id' => 'VETA_VISA_VETA_COEVETA_COE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_visa_veta_coe_name',
      ),
      'veta_visa_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
        'id' => 'VETA_VISA_OPPORTUNITIESOPPORTUNITIES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'veta_visa_opportunities_name',
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
