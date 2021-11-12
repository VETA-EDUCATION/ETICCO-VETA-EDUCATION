<?php
$module_name = 'Veta_Aplicacion';
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
            'name' => 'veta_aplicacion_opportunities_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => '',
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'ciudad',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD',
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_admisiones',
            'label' => 'LBL_FECHA_ADMISIONES',
          ),
          1 => 
          array (
            'name' => 'fecha_envio',
            'label' => 'LBL_FECHA_ENVIO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'datos_adicionales',
            'studio' => 'visible',
            'label' => 'LBL_DATOS_ADICIONALES',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'curso',
            'label' => 'LBL_CURSO',
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
            'name' => 'campus',
            'label' => 'LBL_CAMPUS',
          ),
          1 => 
          array (
            'name' => 'fecha_inicio',
            'label' => 'LBL_FECHA_INICIO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'duracion',
            'label' => 'LBL_DURACION',
          ),
          1 => 
          array (
            'name' => 'intensidad',
            'label' => 'LBL_INTENSIDAD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tipo_curso',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_CURSO',
          ),
          1 => 
          array (
            'name' => 'tps',
            'label' => 'LBL_TPS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'vacaciones',
            'label' => 'LBL_VACACIONES',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
