<?php
$module_name = 'Veta_Abono';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'VETA_ABONO_VETA_RECIBO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_ABONO_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_ABONO_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ABONO_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_ABONO',
    'width' => '10%',
  ),
  'MONTO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'MONEDAPAGO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MONEDAPAGO',
    'width' => '10%',
  ),
  'DESCUENTOTASA_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_DESCUENTOTASA',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
