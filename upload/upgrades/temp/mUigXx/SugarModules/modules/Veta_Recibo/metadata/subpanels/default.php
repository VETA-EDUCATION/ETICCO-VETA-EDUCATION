<?php
$module_name='Veta_Recibo';
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
      'popup_module' => 'Veta_Recibo',
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
    'subtotal' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_SUBTOTAL',
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
    'pendiente_por_pagar' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_PENDIENTE_POR_PAGAR',
      'currency_format' => true,
      'width' => '10%',
    ),
    'pagado' => 
    array (
      'type' => 'currency',
      'default' => true,
      'vname' => 'LBL_PAGADO',
      'currency_format' => true,
      'width' => '10%',
    ),
    'estado' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_ESTADO',
      'width' => '10%',
    ),
    'assigned_user_name' => 
    array (
      'link' => true,
      'type' => 'relate',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'id' => 'ASSIGNED_USER_ID',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'assigned_user_id',
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
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
      'module' => 'Veta_Recibo',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Veta_Recibo',
      'width' => '5%',
      'default' => true,
    ),
  ),
);