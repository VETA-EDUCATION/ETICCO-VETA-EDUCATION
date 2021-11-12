<?php
$module_name='Veta_InformacionLaboral';
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
      'popup_module' => 'Veta_InformacionLaboral',
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
    'empresa' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_EMPRESA',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_inicio' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_INICIO',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_retiro' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_RETIRO',
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
      'module' => 'Veta_InformacionLaboral',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_InformacionLaboral',
      'width' => '5%',
      'default' => true,
    ),
  ),
);