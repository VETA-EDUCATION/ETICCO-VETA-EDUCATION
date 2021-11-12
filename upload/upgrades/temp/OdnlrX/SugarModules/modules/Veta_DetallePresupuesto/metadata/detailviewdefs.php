<?php
$module_name = 'Veta_DetallePresupuesto';
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
            'name' => 'veta_detallepresupuesto_veta_presupuesto_name',
            'label' => 'LBL_VETA_DETALLEPRESUPUESTO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
          ),
          1 => 
          array (
            'name' => 'college',
            'studio' => 'visible',
            'label' => 'LBL_COLLEGE',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'intake',
            'label' => 'LBL_INTAKE',
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
            'name' => 'inscripcion',
            'label' => 'LBL_INSCRIPCION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'precio_por_semana',
            'label' => 'LBL_PRECIO_POR_SEMANA',
          ),
          1 => 
          array (
            'name' => 'costo_materiales',
            'label' => 'LBL_COSTO_MATERIALES',
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
            'name' => 'deposito',
            'label' => 'LBL_DEPOSITO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'total_curso',
            'label' => 'LBL_TOTAL_CURSO',
          ),
          1 => 
          array (
            'name' => 'examen_medico',
            'label' => 'LBL_EXAMEN_MEDICO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'valor_seguro',
            'label' => 'LBL_VALOR_SEGURO',
          ),
          1 => 
          array (
            'name' => 'valor_visa',
            'label' => 'LBL_VALOR_VISA',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'bono',
            'label' => 'LBL_BONO',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 'description',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
