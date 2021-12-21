<?php
// created: 2021-11-21 14:42:48
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'abono_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_ABONO',
    'width' => '10%',
  ),
  'monedapago_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_MONEDAPAGO',
    'width' => '10%',
  ),
  'descuentotasa_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_DESCUENTOTASA',
    'width' => '10%',
  ),
  'monto' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_MONTO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Veta_Abono',
    'width' => '4%',
    'default' => true,
  ),
);