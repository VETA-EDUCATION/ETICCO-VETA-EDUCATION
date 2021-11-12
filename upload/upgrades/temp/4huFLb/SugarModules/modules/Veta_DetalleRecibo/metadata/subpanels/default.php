<?php
$module_name='Veta_DetalleRecibo';
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
      'popup_module' => 'Veta_DetalleRecibo',
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
    'intake' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_INTAKE',
      'width' => '10%',
      'default' => true,
    ),
    'duracion' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_DURACION',
      'width' => '10%',
    ),
    'inscripcion' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_INSCRIPCION',
      'currency_format' => true,
      'width' => '10%',
    ),
    'precio_por_semana' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_PRECIO_POR_SEMANA',
      'currency_format' => true,
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
    'deposito' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_DEPOSITO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'total_curso' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_TOTAL_CURSO',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'examen_medico' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_EXAMEN_MEDICO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'valor_seguro' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_VALOR_SEGURO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'bono' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_BONO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'valor_visa' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_VALOR_VISA',
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
      'module' => 'Veta_DetalleRecibo',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_DetalleRecibo',
      'width' => '5%',
      'default' => true,
    ),
  ),
);