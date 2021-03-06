<?php
$dashletData['Veta_DetalleReciboItemDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'monto' => 
  array (
    'default' => '',
  ),
  'veta_detallereciboitem_veta_detallerecibo_name' => 
  array (
    'default' => '',
  ),
  'veta_detallereciboitem_veta_recibo_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['Veta_DetalleReciboItemDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'monto' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'veta_detallereciboitem_veta_detallerecibo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_DETALLERECIBO_FROM_VETA_DETALLERECIBO_TITLE',
    'id' => 'VETA_DETALLERECIBOITEM_VETA_DETALLERECIBOVETA_DETALLERECIBO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'veta_detallereciboitem_veta_recibo_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_DETALLERECIBOITEM_VETA_RECIBO_FROM_VETA_RECIBO_TITLE',
    'id' => 'VETA_DETALLERECIBOITEM_VETA_RECIBOVETA_RECIBO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
