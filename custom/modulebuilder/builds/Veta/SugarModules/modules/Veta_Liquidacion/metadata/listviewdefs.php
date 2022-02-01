<?php
$module_name = 'Veta_Liquidacion';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ESTUDIANTE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PROSPECTO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROSPECTO',
    'id' => 'LEAD_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),

  'MONTO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO_PAGO_COLEGIOS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO_PAGO_COLEGIOS',
    'width' => '10%',
  ),
  'VETA_LIQUIDACION_VETA_LOO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LIQUIDACION_VETA_LOO_FROM_VETA_LOO_TITLE',
    'id' => 'VETA_LIQUIDACION_VETA_LOOVETA_LOO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_LIQUIDACION_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_LIQUIDACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'VETA_LIQUIDACION_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_PAGADO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_TOTAL_PAGADO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ASESOR_COMERCIAL' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASESOR_COMERCIAL',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'SOEL_FECHA_EXPIRACION_VISA' =>
      array (
          'type' => 'datetime',
          'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
          'width' => '10%',
          'default' => true,
          'sortable' => false,
      ),
  'SOEL_REFERIDO' =>
      array (
          'type' => 'varchar',
          'label' => 'LBL_SOEL_REFERIDO',
          'width' => '10%',
          'default' => true,
      ),
  'SOEL_FECHA_VIAJE' =>
      array (
          'type' => 'datetime',
          'label' => 'LBL_SOEL_FECHA_VIAJE',
          'width' => '10%',
          'default' => true,
      ),
    'SOEL_CIUDAD_TMP' =>
        array(
            'type' => 'varchar',
            'label' => 'LBL_SOEL_CIUDAD_TMP',
            'width' => '10%',
            'default' => false,
            'sortable' => false,
        ),
    'SOEL_LOCALIZACION' =>
        array(
            'type' => 'multienum',
            'studio' => 'visible',
            'label' => 'LBL_SOEL_LOCALIZACION',
            'width' => '10%',
            'default' => false,
        ),

  
);
;
?>
