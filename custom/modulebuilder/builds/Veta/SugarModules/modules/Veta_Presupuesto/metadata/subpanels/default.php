<?php
$module_name='Veta_Presupuesto';
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
      'popup_module' => 'Veta_Presupuesto',
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
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_PAIS',
      'width' => '10%',
    ),
    'departamento' => 
    array (
      'type' => 'dynamicenum',
      'studio' => 'visible',
      'vname' => 'LBL_DEPARTAMENTO',
      'width' => '10%',
      'default' => true,
    ),
    'ciudad' => 
    array (
      'type' => 'dynamicenum',
      'studio' => 'visible',
      'vname' => 'LBL_CIUDAD',
      'width' => '10%',
      'default' => true,
    ),
    'primer_pago' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_PRIMER_PAGO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'tipo_visa' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_TIPO_VISA',
      'id' => 'VETA_TIPOSVISA_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Veta_TiposVisa',
      'target_record_key' => 'veta_tiposvisa_id_c',
    ),
    'total_visa' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_TOTAL_VISA',
      'currency_format' => true,
      'width' => '10%',
    ),
    'examen_medico' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_EXAMEN_MEDICO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'seguro' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_SEGURO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'subtotal' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_SUBTOTAL',
      'currency_format' => true,
      'width' => '10%',
    ),
    'descuento' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_DESCUENTO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'gran_total' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_GRAN_TOTAL',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Veta_Presupuesto',
      'width' => '4%',
      'default' => true,
    ),
  ),
);