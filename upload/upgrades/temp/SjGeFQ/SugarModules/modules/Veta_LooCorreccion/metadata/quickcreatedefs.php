<?php
$module_name = 'Veta_LooCorreccion';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'veta_loocorreccion_veta_loo_name',
            'label' => 'LBL_VETA_LOOCORRECCION_VETA_LOO_FROM_VETA_LOO_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_correccion',
            'label' => 'LBL_FECHA_CORRECCION',
          ),
          1 => 
          array (
            'name' => 'fecha_solicitud',
            'label' => 'LBL_FECHA_SOLICITUD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
