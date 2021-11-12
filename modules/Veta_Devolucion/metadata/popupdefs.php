<?php
$popupMeta = array (
    'moduleMain' => 'Veta_Devolucion',
    'varName' => 'Veta_Devolucion',
    'orderBy' => 'veta_devolucion.name',
    'whereClauses' => array (
  'name' => 'veta_devolucion.name',
  'veta_devolucion_veta_recibo_name' => 'veta_devolucion.veta_devolucion_veta_recibo_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_devolucion_veta_recibo_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_devolucion_veta_recibo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_DEVOLUCION_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'name' => 'veta_devolucion_veta_recibo_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'VETA_DEVOLUCION_VETA_RECIBO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DEVOLUCION_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_DEVOLUCION_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'veta_devolucion_veta_recibo_name',
  ),
  'MONTO' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'monto',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_modified',
  ),
),
);
