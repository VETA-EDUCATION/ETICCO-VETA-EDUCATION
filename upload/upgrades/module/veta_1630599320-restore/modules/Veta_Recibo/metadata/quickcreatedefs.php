<?php
$module_name = 'Veta_Recibo';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Veta_Presupuesto/javascript/seguro_soel.js',
        ),
      ),
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
        'LBL_EDITVIEW_PANEL1' => 
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
          0 => 
          array (
            'name' => 'pais',
            'studio' => 'visible',
            'label' => 'LBL_PAIS',
          ),
          1 => 
          array (
            'name' => 'departamento',
            'studio' => 'visible',
            'label' => 'LBL_DEPARTAMENTO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ciudad',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD',
          ),
          1 => 
          array (
            'name' => 'tipo_visa',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_VISA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'descuento',
            'label' => 'LBL_DESCUENTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'asegurador',
            'label' => 'LBL_ASEGURADOR',
          ),
          1 => 
          array (
            'name' => 'seguro',
            'label' => 'LBL_SEGURO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'duracion',
            'label' => 'LBL_DURACION',
          ),
          1 => 
          array (
            'name' => 'tipo_seguro',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_SEGURO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
