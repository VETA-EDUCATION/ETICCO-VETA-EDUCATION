<?php
$module_name = 'Veta_SolvenciaEconomica';
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL7' => 
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'parentezco',
            'label' => 'LBL_PARENTEZCO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_demostrar',
            'label' => 'LBL_VALOR_DEMOSTRAR',
          ),
          1 => 
          array (
            'name' => 'procedencia',
            'studio' => 'visible',
            'label' => 'LBL_PROCEDENCIA',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ingresos_patrocinador',
            'label' => 'LBL_INGRESOS_PATROCINADOR',
          ),
          1 => 
          array (
            'name' => 'renta_liquida',
            'label' => 'LBL_RENTA_LIQUIDA',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ingresos_patrocinador_empleado',
            'label' => 'LBL_INGRESOS_PATROCINADOR_EMPLEADO',
          ),
          1 => 
          array (
            'name' => 'cargo_patrocinador',
            'label' => 'LBL_CARGO_PATROCINADOR',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ingresos_patrocinador_pensiona',
            'label' => 'LBL_INGRESOS_PATROCINADOR_PENSIONA',
          ),
          1 => 
          array (
            'name' => 'valor_mensual_pension',
            'label' => 'LBL_VALOR_MENSUAL_PENSION',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ahorros',
            'label' => 'LBL_AHORROS',
          ),
          1 => 
          array (
            'name' => 'cupo_tarjeta_credito',
            'label' => 'LBL_CUPO_TARJETA_CREDITO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'credito_bancario',
            'label' => 'LBL_CREDITO_BANCARIO',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'deudor_icetex',
            'label' => 'LBL_DEUDOR_ICETEX',
          ),
          1 => 
          array (
            'name' => 'ingresos_deudor_icetex',
            'label' => 'LBL_INGRESOS_DEUDOR_ICETEX',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'valor_comercial_bienes',
            'label' => 'LBL_VALOR_COMERCIAL_BIENES',
          ),
          1 => 
          array (
            'name' => 'central_riesgo',
            'label' => 'LBL_CENTRAL_RIESGO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_vehiculo',
            'label' => 'LBL_VALOR_VEHICULO',
          ),
          1 => 
          array (
            'name' => 'valor_cdt',
            'label' => 'LBL_VALOR_CDT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'valor_cesantias',
            'label' => 'LBL_VALOR_CESANTIAS',
          ),
          1 => 
          array (
            'name' => 'otros_bienes',
            'label' => 'LBL_OTROS_BIENES',
          ),
        ),
      ),
      'lbl_detailview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'veta_solvenciaeconomica_leads_name',
          ),
          1 => 
          array (
            'name' => 'veta_solvenciaeconomica_contacts_name',
          ),
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
;
?>
