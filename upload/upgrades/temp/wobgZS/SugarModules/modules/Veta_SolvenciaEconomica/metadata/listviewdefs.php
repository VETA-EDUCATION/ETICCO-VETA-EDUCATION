<?php
$module_name = 'Veta_SolvenciaEconomica';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PARENTEZCO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARENTEZCO',
    'width' => '10%',
    'default' => true,
  ),
  'VALOR_DEMOSTRAR' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_DEMOSTRAR',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'VETA_SOLVENCIAECONOMICA_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SOLVENCIAECONOMICA_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_SOLVENCIAECONOMICA_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_SOLVENCIAECONOMICA_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_SOLVENCIAECONOMICA_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_SOLVENCIAECONOMICA_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'OTROS_BIENES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OTROS_BIENES',
    'width' => '10%',
    'default' => false,
  ),
  'VALOR_CESANTIAS' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_CESANTIAS',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'VALOR_CDT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_CDT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'VALOR_VEHICULO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_VEHICULO',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'CENTRAL_RIESGO' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_CENTRAL_RIESGO',
    'width' => '10%',
  ),
  'VALOR_COMERCIAL_BIENES' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_COMERCIAL_BIENES',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'INGRESOS_DEUDOR_ICETEX' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_INGRESOS_DEUDOR_ICETEX',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'DEUDOR_ICETEX' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEUDOR_ICETEX',
    'width' => '10%',
    'default' => false,
  ),
  'CREDITO_BANCARIO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CREDITO_BANCARIO',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'CUPO_TARJETA_CREDITO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_CUPO_TARJETA_CREDITO',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'AHORROS' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AHORROS',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'VALOR_MENSUAL_PENSION' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_MENSUAL_PENSION',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'INGRESOS_PATROCINADOR_EMPLEADO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_INGRESOS_PATROCINADOR_EMPLEADO',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'CARGO_PATROCINADOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CARGO_PATROCINADOR',
    'width' => '10%',
    'default' => false,
  ),
  'INGRESOS_PATROCINADOR' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_INGRESOS_PATROCINADOR',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'INGRESOS_PATROCINADOR_PENSIONA' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_INGRESOS_PATROCINADOR_PENSIONA',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'PATROCINADOR_EMPLEADO' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PATROCINADOR_EMPLEADO',
    'width' => '10%',
  ),
  'RENTA_LIQUIDA' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_RENTA_LIQUIDA',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'PATROCINADOR_INDEPENDIENTE' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_PATROCINADOR_INDEPENDIENTE',
    'width' => '10%',
  ),
  'PROCEDENCIA' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PROCEDENCIA',
    'width' => '10%',
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
