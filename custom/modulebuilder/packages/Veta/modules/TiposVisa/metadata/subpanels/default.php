<?php
$module_name='Veta_TiposVisa';
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
      'popup_module' => 'Veta_TiposVisa',
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
    'total_visa' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_TOTAL_VISA',
      'currency_format' => true,
      'width' => '10%',
    ),
    'costo_examen' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_COSTO_EXAMEN',
      'currency_format' => true,
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
      'module' => 'Veta_TiposVisa',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_TiposVisa',
      'width' => '5%',
      'default' => true,
    ),
  ),
);