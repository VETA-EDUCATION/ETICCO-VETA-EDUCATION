<?php
$module_name='Veta_Seguro';
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
      'popup_module' => 'Veta_Seguro',
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
    'duracion' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_DURACION',
      'width' => '10%',
    ),
    'single' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_SINGLE',
      'width' => '10%',
    ),
    'couple' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_COUPLE',
      'width' => '10%',
    ),
    'family' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_FAMILY',
      'width' => '10%',
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
      'module' => 'Veta_Seguro',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_Seguro',
      'width' => '5%',
      'default' => true,
    ),
  ),
);