<?php
$searchdefs ['Opportunities'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'contacts_opportunities_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_opportunities_1_name',
      ),
      'leads_opportunities_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'LEADS_OPPORTUNITIES_1LEADS_IDA',
        'name' => 'leads_opportunities_1_name',
      ),
      'soel_oficina' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_SOEL_OFICINA',
        'width' => '10%',
        'default' => true,
        'name' => 'soel_oficina',
        'sortable' => false,
        'function' => 
        array (
          'name' => 'getOficinasComercial',
        ),
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'sales_stage' => 
      array (
        'name' => 'sales_stage',
        'default' => true,
        'width' => '10%',
      ),
      'lead_source' => 
      array (
        'name' => 'lead_source',
        'default' => true,
        'width' => '10%',
      ),
      'fecha_cierre_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_CIERRE',
        'width' => '10%',
        'name' => 'fecha_cierre_c',
      ),
      'contacts_opportunities_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
        'name' => 'contacts_opportunities_1_name',
      ),
      'leads_opportunities_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
        'id' => 'LEADS_OPPORTUNITIES_1LEADS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'leads_opportunities_1_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'soel_asignado_aplicacion' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_SOEL_ASIGNADO_APLICACION',
        'width' => '10%',
        'name' => 'soel_asignado_aplicacion',
        'sortable' => false,
        'function' => 
        array (
          'name' => 'getAsignadoLeads',
        ),
      ),
      'soel_asignado_servicio_cliente' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_SOEL_ASIGNADO_SERVICIO_CLIENTE',
        'width' => '10%',
        'name' => 'soel_asignado_servicio_cliente',
        'sortable' => false,
        'function' => 
        array (
          'name' => 'getAsignadoLeads',
        ),
      ),
      'soel_asignado_visas' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_SOEL_ASIGNADO_VISAS',
        'width' => '10%',
        'name' => 'soel_asignado_visas',
        'sortable' => false,
        'function' => 
        array (
          'name' => 'getAsignadoLeads',
        ),
      ),
      'estado_pago_institucion_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_PAGO_INSTITUCION',
        'width' => '10%',
        'name' => 'estado_pago_institucion_c',
      ),
      'estado_gestion_comercial_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_GESTION_COMERCIAL',
        'width' => '10%',
        'name' => 'estado_gestion_comercial_c',
      ),
      'estado_cartera_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_CARTERA',
        'width' => '10%',
        'name' => 'estado_cartera_c',
      ),
      'estado_recoleccion_documento_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_RECOLECCION_DOCUMENTO',
        'width' => '10%',
        'name' => 'estado_recoleccion_documento_c',
      ),
      'estado_servicio_al_cliente_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_SERVICIO_AL_CLIENTE',
        'width' => '10%',
        'name' => 'estado_servicio_al_cliente_c',
      ),
      'estado_visas_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_VISAS',
        'width' => '10%',
        'name' => 'estado_visas_c',
      ),
      'estado_admisiones_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_ADMISIONES',
        'width' => '10%',
        'name' => 'estado_admisiones_c',
      ),
      'fecha_ultimo_contacto_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
        'width' => '10%',
        'name' => 'fecha_ultimo_contacto_c',
      ),
      'fecha_proximo_contacto_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
        'width' => '10%',
        'name' => 'fecha_proximo_contacto_c',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'fecha_presupuesto_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_FECHA_PRESUPUESTO',
        'width' => '10%',
        'name' => 'fecha_presupuesto_c',
      ),
      'soel_fecha_viaje' => 
      array (
        'type' => 'datetime',
        'default' => true,
        'label' => 'LBL_SOEL_FECHA_VIAJE',
        'width' => '10%',
        'name' => 'soel_fecha_viaje',
        'sortable' => false,
      ),
      'limite_luz_verde_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_LIMITE_LUZ_VERDE',
        'width' => '10%',
        'name' => 'limite_luz_verde_c',
      ),
      'soel_fecha_expiracion_visa' => 
      array (
        'type' => 'datetime',
        'default' => true,
        'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
        'width' => '10%',
        'name' => 'soel_fecha_expiracion_visa',
        'sortable' => false,
      ),
      'soel_visto_bueno_comercial' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SOEL_VISTO_BUENO_COMERCIAL',
        'width' => '10%',
        'name' => 'soel_visto_bueno_comercial',
        'sortable' => false,
      ),
      'soel_visto_bueno_visas' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SOEL_VISTO_BUENO_VISAS',
        'width' => '10%',
        'name' => 'soel_visto_bueno_visas',
        'sortable' => false,
      ),
      'soel_oficina' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_SOEL_OFICINA',
        'width' => '10%',
        'default' => true,
        'sortable' => false,
        'name' => 'soel_oficina',
      ),
      'soel_referido' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_SOEL_REFERIDO',
        'width' => '10%',
        'name' => 'soel_referido',
        'sortable' => false,
      ),
      //region soel_ciudad_tmp
        'soel_ciudad_tmp'                     =>
            array(
                'type'     => 'varchar',
                'default'  => true,
                'label'    => 'LBL_SOEL_CIUDAD_TMP',
                'width'    => '10%',
                'name'     => 'soel_ciudad_tmp',
                'sortable' => false,
            ),
      //endregion

      //region soel_localizacion
        'soel_localizacion'                     =>
            array(
                'type'     => 'multienum',
                'default'  => true,
                'label'    => 'LBL_SOEL_LOCALIZACION',
                'width'    => '10%',
                'name'     => 'soel_localizacion',
                'sortable' => false,
            ),
      //endregion

      //region soel_mobile_phone_lead
      'soel_mobile_phone_lead'                     =>
      array(
          'type'     => 'multienum',
          'default'  => true,
          'label'    => 'LBL_SOEL_MOBILE_PHONE_LEAD',
          'width'    => '10%',
          'name'     => 'soel_mobile_phone_lead',
          'sortable' => false,
      ),
      //endregion
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
