<?php
$module_name='Veta_PagoColegios';
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
      'popup_module' => 'Veta_PagoColegios',
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
    'estudiante' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ESTUDIANTE',
      'id' => 'CONTACT_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Contacts',
      'target_record_key' => 'contact_id_c',
    ),
    'monto' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_MONTO',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'oficina_pago' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_OFICINA_PAGO',
      'width' => '10%',
      'default' => true,
    ),
    'estado' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
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
      'module' => 'Veta_PagoColegios',
      'width' => '4%',
      'default' => true,
    ),
  ),
);