<?php
$module_name = 'Veta_Presupuesto';
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
          4 => 
          array (
            'customCode' => '<input value="Crear Recibo" type="button" class="button" onClick="document.location=\'index.php?module=Veta_Recibo&action=recibo&pid=\'+ document.getElementsByName(\'record\')[0].value" >',
          ),
          5 => 
          array (
            'customCode' => '<input value="Descargar PDF" type="button" class="button" onClick="document.location=\'index.php?module=Veta_Presupuesto&action=pdf&pid=\'+ document.getElementsByName(\'record\')[0].value" >',
          ),
          6 => 
          array (
            'customCode' => '<input value="Enviar Presupuesto" type="button" class="button" onClick="document.location=\'index.php?module=Veta_Presupuesto&action=send&pid=\'+ document.getElementsByName(\'record\')[0].value" >',
          ),
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
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' => 
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
            'name' => 'moneda_c',
            'studio' => 'visible',
            'label' => 'LBL_MONEDA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'veta_presupuesto_leads_name',
            'label' => 'LBL_VETA_PRESUPUESTO_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_presupuesto_contacts_name',
            'label' => 'LBL_VETA_PRESUPUESTO_CONTACTS_FROM_CONTACTS_TITLE',
          ),
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
          1 => 
          array (
            'name' => 'veta_requerimiento_veta_presupuesto_name',
            'label' => 'LBL_VETA_REQUERIMIENTO_VETA_PRESUPUESTO_FROM_VETA_REQUERIMIENTO_TITLE',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'examen_medico',
            'label' => 'LBL_EXAMEN_MEDICO',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'asegurador',
            'label' => 'LBL_ASEGURADOR',
          ),
          1 => 
          array (
            'name' => 'duracion',
            'label' => 'LBL_DURACION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tipo_seguro',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_SEGURO',
          ),
          1 => 
          array (
            'name' => 'seguro',
            'label' => 'LBL_SEGURO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tipo_visa',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_VISA',
          ),
          1 => 
          array (
            'name' => 'total_visa',
            'label' => 'LBL_TOTAL_VISA',
          ),
        ),
      ),
      'lbl_detailview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'aeropuerto_c',
            'label' => 'LBL_AEROPUERTO',
          ),
          1 => 
          array (
            'name' => 'tiquete_c',
            'label' => 'LBL_TIQUETE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tour_c',
            'label' => 'LBL_TOUR',
          ),
          1 => 
          array (
            'name' => 'mmm_c',
            'label' => 'LBL_MMM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'hospedaje_c',
            'label' => 'LBL_HOSPEDAJE',
          ),
          1 => '',
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primer_pago',
            'label' => 'LBL_PRIMER_PAGO',
          ),
          1 => 
          array (
            'name' => 'subtotal',
            'label' => 'LBL_SUBTOTAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'descuento',
            'label' => 'LBL_DESCUENTO',
          ),
          1 => 
          array (
            'name' => 'gran_total',
            'label' => 'LBL_GRAN_TOTAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pesos',
            'label' => 'LBL_PESOS',
          ),
          1 => 
          array (
            'name' => 'usd',
            'label' => 'LBL_USD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'clp',
            'label' => 'LBL_CLP',
          ),
          1 => 
          array (
            'name' => 'mxn',
            'label' => 'LBL_MXN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'aud_usd',
            'label' => 'LBL_AUD_USD',
          ),
          1 => 
          array (
            'name' => 'usd_cop',
            'label' => 'LBL_USD_COP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'clp_usd',
            'label' => 'LBL_CLP_USD',
          ),
          1 => 
          array (
            'name' => 'usd_mxn',
            'label' => 'LBL_USD_MXN',
          ),
        ),
      ),
    ),
  ),
);
;
?>
