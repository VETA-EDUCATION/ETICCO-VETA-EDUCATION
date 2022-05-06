<?php
 // created: 2022-03-22 09:00:20
$layout_defs["Doc_DocSolicitadosColegio"]["subpanel_setup"]['doc_docsolicitadoscolegio_veta_aplicacion'] = array (
  'order' => 100,
  'module' => 'Veta_Aplicacion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DOC_DOCSOLICITADOSCOLEGIO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
  'get_subpanel_data' => 'doc_docsolicitadoscolegio_veta_aplicacion',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
