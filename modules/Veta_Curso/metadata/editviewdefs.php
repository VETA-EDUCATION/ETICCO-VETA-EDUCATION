<?php
$module_name = 'Veta_Curso';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          1 => 
          array (
            'name' => 'fecha_expiracion',
            'label' => 'LBL_FECHA_EXPIRACION',
          ),
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'campus',
            'label' => 'LBL_CAMPUS',
          ),
          1 => 
          array (
            'name' => 'jornada',
            'label' => 'LBL_JORNADA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'intensidad',
            'label' => 'LBL_INTENSIDAD',
          ),
          1 => 
          array (
            'name' => 'tipo_curso',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_CURSO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tps',
            'label' => 'LBL_TPS',
          ),
          1 => 
          array (
            'name' => 'vacaciones',
            'label' => 'LBL_VACACIONES',
          ),
        ),
      ),
    ),
  ),
);
;
?>
