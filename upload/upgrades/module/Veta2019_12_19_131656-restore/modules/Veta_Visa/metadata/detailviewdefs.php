<?php
$module_name = 'Veta_Visa';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estudiante',
            'studio' => 'visible',
            'label' => 'LBL_ESTUDIANTE',
          ),
          1 => '',
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
            'name' => 'fecha_aplicacion',
            'label' => 'LBL_FECHA_APLICACION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_avac',
            'label' => 'LBL_FECHA_AVAC',
          ),
          1 => 
          array (
            'name' => 'fecha_examenes_medicos',
            'label' => 'LBL_FECHA_EXAMENES_MEDICOS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_expiracion',
            'label' => 'LBL_FECHA_EXPIRACION',
          ),
          1 => 
          array (
            'name' => 'fecha_firma_acta',
            'label' => 'LBL_FECHA_FIRMA_ACTA',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'fecha_otorgada',
            'label' => 'LBL_FECHA_OTORGADA',
          ),
          1 => 
          array (
            'name' => 'fecha_pago',
            'label' => 'LBL_FECHA_PAGO',
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
            'name' => 'veta_visa_opportunities_name',
          ),
          1 => 
          array (
            'name' => 'veta_visa_veta_serviciocliente_name',
            'label' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
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
            'name' => 'fecha_recibido',
            'label' => 'LBL_FECHA_RECIBIDO',
          ),
          1 => 
          array (
            'name' => 'fecha_requerimiento',
            'label' => 'LBL_FECHA_REQUERIMIENTO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_ultimo_requerimiento',
            'label' => 'LBL_FECHA_ULTIMO_REQUERIMIENTO',
          ),
          1 => 
          array (
            'name' => 'fecha_expiracion_requerimiento',
            'label' => 'LBL_FECHA_EXPIRACION_REQUERIMIENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fecha_req1',
            'label' => 'LBL_FECHA_REQ1',
          ),
          1 => 
          array (
            'name' => 'fecha_exp_req1',
            'label' => 'LBL_FECHA_EXP_REQ1',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_req2',
            'label' => 'LBL_FECHA_REQ2',
          ),
          1 => 
          array (
            'name' => 'fecha_exp_req2',
            'label' => 'LBL_FECHA_EXP_REQ2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_req3',
            'label' => 'LBL_FECHA_REQ3',
          ),
          1 => 
          array (
            'name' => 'fecha_exp_req3',
            'label' => 'LBL_FECHA_EXP_REQ3',
          ),
        ),
      ),
    ),
  ),
);
;
?>
