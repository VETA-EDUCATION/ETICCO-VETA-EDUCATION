<?php
$module_name = 'Veta_Presupuesto';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PAIS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAIS',
    'width' => '10%',
  ),
  'DEPARTAMENTO' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_DEPARTAMENTO',
    'width' => '10%',
    'default' => true,
  ),
  'CIUDAD' => 
  array (
    'type' => 'dynamicenum',
    'studio' => 'visible',
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
    'default' => true,
  ),
  'PRIMER_PAGO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PRIMER_PAGO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SUBTOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_SUBTOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DESCUENTO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_DESCUENTO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'GRAN_TOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_GRAN_TOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'TIPO_VISA' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_VISA',
    'id' => 'VETA_TIPOSVISA_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_VISA' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_TOTAL_VISA',
    'currency_format' => true,
    'width' => '10%',
  ),
  'EXAMEN_MEDICO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_EXAMEN_MEDICO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SEGURO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_SEGURO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'VETA_PRESUPUESTO_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_PRESUPUESTO_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_PRESUPUESTO_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_PRESUPUESTO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'USD_COP' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_USD_COP',
    'width' => '10%',
  ),
  'AUD_USD' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_AUD_USD',
    'width' => '10%',
  ),
  'PESOS' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PESOS',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'USD' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_USD',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'MXN' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_MXN',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CLP' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_CLP',
    'currency_format' => true,
    'width' => '10%',
  ),
  'CLP_USD' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_CLP_USD',
    'width' => '10%',
  ),
  'USD_MXN' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_USD_MXN',
    'width' => '10%',
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
  'DURACION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DURACION',
    'width' => '10%',
    'default' => false,
  ),
  'TIPO_SEGURO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO_SEGURO',
    'width' => '10%',
    'default' => false,
  ),
  'ASEGURADOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ASEGURADOR',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
