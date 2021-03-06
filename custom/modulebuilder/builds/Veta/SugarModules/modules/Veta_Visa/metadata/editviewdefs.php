<?php
$module_name = 'Veta_Visa';
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
          1 => 'assigned_user_name',
        ),
        1 => 
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
        2 => 
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
        3 => 
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
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'fecha_recibido',
            'label' => 'LBL_FECHA_RECIBIDO',
          ),
          1 => '',
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
            'name' => 'fecha_req1',
            'label' => 'LBL_FECHA_REQ1',
          ),
          1 => 
          array (
            'name' => 'fecha_exp_req1',
            'label' => 'LBL_FECHA_EXP_REQ1',
          ),
        ),
        1 => 
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
        2 => 
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
