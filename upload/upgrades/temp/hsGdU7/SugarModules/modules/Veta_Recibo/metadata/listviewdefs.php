<?php
$module_name = 'Veta_Recibo';
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
  'SUBTOTAL' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_SUBTOTAL',
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
  'PAGADO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PAGADO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'PENDIENTE_POR_PAGAR' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_PENDIENTE_POR_PAGAR',
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
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'VETA_RECIBO_VETA_PRESUPUESTO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
    'id' => 'VETA_RECIBO_VETA_PRESUPUESTOVETA_PRESUPUESTO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_RECIBO_LEADS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
    'id' => 'VETA_RECIBO_LEADSLEADS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'VETA_RECIBO_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'VETA_RECIBO_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
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
    'default' => false,
    'label' => 'LBL_USD',
    'currency_format' => true,
    'width' => '10%',
  ),
  'USD_COP' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_USD_COP',
    'width' => '10%',
  ),
);
;
?>
