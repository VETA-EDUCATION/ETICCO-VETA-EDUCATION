<?php
$module_name='Veta_InformacionAcademica';
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
      'popup_module' => 'Veta_InformacionAcademica',
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
    'nivel_estudios' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_NIVEL_ESTUDIOS',
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
    'fecha_fin' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_FECHA_FIN',
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
      'module' => 'Veta_InformacionAcademica',
      'width' => '4%',
      'default' => true,
    ),
  ),
);