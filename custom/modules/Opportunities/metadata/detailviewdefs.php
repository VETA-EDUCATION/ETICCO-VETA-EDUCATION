<?php
$viewdefs ['Opportunities'] = 
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
        'LBL_DETAILVIEW_PANEL1' => 
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
            'name' => 'veta_recibo_opportunities_name',
            'label' => 'LBL_VETA_RECIBO_OPPORTUNITIES_FROM_VETA_RECIBO_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contacts_opportunities_1_name',
            'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'leads_opportunities_1_name',
            'label' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
          ),
          1 => 
          array (
            'name' => 'monto_dolares_australianos_c',
            'label' => 'LBL_MONTO_DOLARES_AUSTRALIANOS',
          ),
        ),
        3 => 
        array (
          0 => 'lead_source',
          1 => 'campaign_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 'sales_stage',
          1 => 'date_closed',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'estado_gestion_comercial_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_GESTION_COMERCIAL',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estado_admisiones_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_ADMISIONES',
          ),
          1 => 
          array (
            'name' => 'asignado_aplicacion_c',
            'studio' => 'visible',
            'label' => 'LBL_ASIGNADO_APLICACION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'estado_servicio_al_cliente_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_SERVICIO_AL_CLIENTE',
          ),
          1 => 
          array (
            'name' => 'asignado_servicio_cliente_c',
            'studio' => 'visible',
            'label' => 'LBL_ASIGNADO_SERVICIO_CLIENTE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'estado_visas_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_VISAS',
          ),
          1 => 
          array (
            'name' => 'asignado_visas_c',
            'studio' => 'visible',
            'label' => 'LBL_ASIGNADO_VISAS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'estado_pago_institucion_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_PAGO_INSTITUCION',
          ),
          1 => 
          array (
            'name' => 'pendiente_pago_colegios_c',
            'label' => 'LBL_PENDIENTE_PAGO_COLEGIOS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'estado_cartera_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO_CARTERA',
          ),
          1 => 
          array (
            'name' => 'pendiente_cartera_c',
            'label' => 'LBL_PENDIENTE_CARTERA',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'fecha_proximo_contacto_c',
            'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
          ),
          1 => 
          array (
            'name' => 'fecha_ultimo_contacto_c',
            'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'fecha_presupuesto_c',
            'label' => 'LBL_FECHA_PRESUPUESTO',
          ),
          1 => 
          array (
            'name' => 'REQUERIMIENTO',
            'label' => 'LBL_SOEL_REQUERIMIENTO',
            'customCode' => '<a href=\'index.php?module=Veta_Requerimiento&action=DetailView&record={$IDREQUERIMIENTO}\' target=\'_blank\'>{$REQUERIMIENTO}</a>',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'limite_luz_verde_c',
            'label' => 'LBL_LIMITE_LUZ_VERDE',
          ),
          1 => 
          array (
            'name' => 'soel_mobile_phone_lead',
            'label' => 'LBL_SOEL_MOBILE_PHONE_LEAD',
            'customCode' => '{$soel_mobile_phone_lead}',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'soel_email_lead',
            'label' => 'LBL_SOEL_EMAIL_LEAD',
            'customCode' => '{$soel_email_lead}',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
