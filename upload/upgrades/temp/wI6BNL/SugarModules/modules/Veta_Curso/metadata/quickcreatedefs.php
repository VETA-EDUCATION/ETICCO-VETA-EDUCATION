<?php
$module_name = 'Veta_Curso';
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
            'name' => 'college',
            'studio' => 'visible',
            'label' => 'LBL_COLLEGE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'intake',
            'label' => 'LBL_INTAKE',
          ),
          1 => 
          array (
            'name' => 'deposito',
            'label' => 'LBL_DEPOSITO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'inscripcion',
            'label' => 'LBL_INSCRIPCION',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'duracion',
            'label' => 'LBL_DURACION',
          ),
          1 => 
          array (
            'name' => 'pps',
            'label' => 'LBL_PPS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'costo_extra',
            'label' => 'LBL_COSTO_EXTRA',
          ),
          1 => 
          array (
            'name' => 'costo_materiales',
            'label' => 'LBL_COSTO_MATERIALES',
          ),
        ),
      ),
    ),
  ),
);
;
?>
