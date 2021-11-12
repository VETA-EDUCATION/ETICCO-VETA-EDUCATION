<?php
$module_name = 'Veta_Aplicacion';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
            'name' => 'estudiante',
            'studio' => 'visible',
            'label' => 'LBL_ESTUDIANTE',
          ),
          1 => 
          array (
            'name' => 'estado_aplicacion',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_APLICACION',
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
            'name' => 'fecha_expiracion_visa',
            'label' => 'LBL_FECHA_EXPIRACION_VISA',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'ciudad',
            'studio' => 'visible',
            'label' => 'LBL_CIUDAD',
          ),
          1 => 'assigned_user_name',
        ),
        5 => 
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
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'fecha_recepcion_1',
            'label' => 'LBL_FECHA_RECEPCION_1',
          ),
          1 => 
          array (
            'name' => 'fecha_recepcion_2',
            'label' => 'LBL_FECHA_RECEPCION_2',
          ),
        ),
        8 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
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
