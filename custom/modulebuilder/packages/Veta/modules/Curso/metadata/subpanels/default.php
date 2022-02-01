<?php
$module_name='Veta_Curso';
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
      'popup_module' => 'Veta_Curso',
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
    'college' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_COLLEGE',
      'id' => 'VETA_COLLEGE_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Veta_College',
      'target_record_key' => 'veta_college_id_c',
    ),
    'intake' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_INTAKE',
      'width' => '10%',
      'default' => true,
    ),
    'inscripcion' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_INSCRIPCION',
      'currency_format' => true,
      'width' => '10%',
    ),
    'deposito' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_DEPOSITO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'pps' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_PPS',
      'currency_format' => true,
      'width' => '10%',
    ),
    'duracion' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_DURACION',
      'width' => '10%',
    ),
    'costo_materiales' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_COSTO_MATERIALES',
      'currency_format' => true,
      'width' => '10%',
    ),
    'costo_extra' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_COSTO_EXTRA',
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
      'module' => 'Veta_Curso',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_Curso',
      'width' => '5%',
      'default' => true,
    ),
  ),
);