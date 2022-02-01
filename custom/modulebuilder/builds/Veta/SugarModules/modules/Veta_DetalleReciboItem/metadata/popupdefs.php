<?php
$popupMeta = array (
    'moduleMain' => 'Veta_DetalleReciboItem',
    'varName' => 'Veta_DetalleReciboItem',
    'orderBy' => 'veta_detallereciboitem.name',
    'whereClauses' => array (
  'name' => 'veta_detallereciboitem.name',
  'veta_detallereciboitem_veta_detallerecibo_name' => 'veta_detallereciboitem.veta_detallereciboitem_veta_detallerecibo_name',
  'veta_detallereciboitem_veta_recibo_name' => 'veta_detallereciboitem.veta_detallereciboitem_veta_recibo_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'veta_detallereciboitem_veta_detallerecibo_name',
  5 => 'veta_detallereciboitem_veta_recibo_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'veta_detallereciboitem_veta_detallerecibo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBO_TITLE',
    'id' => 'VETA_DETALLERECIBOITEM_VETA_DETALLERECIBOVETA_DETALLERECIBO_IDA',
    'width' => '10%',
    'name' => 'veta_detallereciboitem_veta_detallerecibo_name',
  ),
  'veta_detallereciboitem_veta_recibo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_DETALLERECIBOITEM_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'name' => 'veta_detallereciboitem_veta_recibo_name',
  ),
),
);
