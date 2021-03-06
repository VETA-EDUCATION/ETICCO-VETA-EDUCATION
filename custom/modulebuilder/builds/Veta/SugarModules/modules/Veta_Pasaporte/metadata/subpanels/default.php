<?php
$module_name='Veta_Pasaporte';
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
      'popup_module' => 'Veta_Pasaporte',
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
    'autoridad_emite' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_AUTORIDAD_EMITE',
      'width' => '10%',
      'default' => true,
    ),
    'fecha_emision' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_EMISION',
      'width' => '10%',
      'default' => true,
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
      'module' => 'Veta_Pasaporte',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_Pasaporte',
      'width' => '5%',
      'default' => true,
    ),
  ),
);