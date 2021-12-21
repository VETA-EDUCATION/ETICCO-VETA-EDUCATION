<?php
$module_name = 'Veta_Recibo';
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
          4 => array ('customCode' => '<input value="Descargar PDF" type="button" class="button" onClick="document.location=\'index.php?module=Veta_Recibo&action=pdf&rid=\'+ document.getElementsByName(\'record\')[0].value" >', ),
          5 => array ('customCode' => '<input value="Enviar Recibo" type="button" class="button" onClick="document.location=\'index.php?module=Veta_Recibo&action=send&rid=\'+ document.getElementsByName(\'record\')[0].value" >', ),
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
            'name' => 'veta_recibo_veta_presupuesto_name',
            'label' => 'LBL_VETA_RECIBO_VETA_PRESUPUESTO_FROM_VETA_PRESUPUESTO_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'veta_recibo_leads_name',
            'label' => 'LBL_VETA_RECIBO_LEADS_FROM_LEADS_TITLE',
          ),
          1 => 
          array (
            'name' => 'veta_recibo_contacts_name',
            'label' => 'LBL_VETA_RECIBO_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'veta_recibo_opportunities_name',
            'label' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
          1 => '',
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
        6 => 
        array (
          0 => 'description',
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
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'subtotal',
            'label' => 'LBL_SUBTOTAL',
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
            'name' => 'pagado',
            'label' => 'LBL_PAGADO',
          ),
          1 => 
          array (
            'name' => 'pendiente_por_pagar',
            'label' => 'LBL_PENDIENTE_POR_PAGAR',
          ),
        ),
        3 => 
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
      ),
    ),
  ),
);
;
?>
