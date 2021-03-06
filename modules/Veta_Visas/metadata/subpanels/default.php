<?php
$module_name='Veta_Visas';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Veta_Visas',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'pais' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_PAIS',
      'width' => '10%',
      'default' => true,
    ),
    'fecha' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA',
      'width' => '10%',
      'default' => true,
    ),
    'negada' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_NEGADA',
      'width' => '10%',
    ),
    'fecha_expiracion' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_EXPIRACION',
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
      'module' => 'Veta_Visas',
      'width' => '4%',
      'default' => true,
    ),
  ),
);