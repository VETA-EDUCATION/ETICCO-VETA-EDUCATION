<?php
$listViewDefs ['Opportunities'] =
    array(
        'NAME' =>
            array(
                'width' => '30%',
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'link' => true,
                'default' => true,
            ),
        'SALES_STAGE' =>
            array(
                'width' => '10%',
                'label' => 'LBL_LIST_SALES_STAGE',
                'default' => true,
            ),
        'AMOUNT' =>
            array(
                'type' => 'currency',
                'label' => 'LBL_AMOUNT',
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
            ),
        'MONTO_DOLARES_AUSTRALIANOS_C' =>
            array(
                'type' => 'int',
                'default' => true,
                'label' => 'LBL_MONTO_DOLARES_AUSTRALIANOS',
                'width' => '10%',
            ),
        'LEAD_SOURCE' =>
            array(
                'width' => '15%',
                'label' => 'LBL_LEAD_SOURCE',
                'default' => true,
            ),
        'CAMPAIGN_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_CAMPAIGN',
                'id' => 'CAMPAIGN_ID',
                'width' => '10%',
                'default' => true,
            ),
        'DATE_CLOSED' =>
            array(
                'width' => '10%',
                'label' => 'LBL_LIST_DATE_CLOSED',
                'default' => true,
            ),
        'ASSIGNED_USER_NAME' =>
            array(
                'width' => '5%',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'module' => 'Employees',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true,
            ),
        'ESTADO_ADMISIONES_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_ADMISIONES',
                'width' => '10%',
            ),
        'ESTADO_GESTION_COMERCIAL_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_GESTION_COMERCIAL',
                'width' => '10%',
            ),
        'ESTADO_SERVICIO_AL_CLIENTE_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_SERVICIO_AL_CLIENTE',
                'width' => '10%',
            ),
        'ESTADO_PAGO_INSTITUCION_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_PAGO_INSTITUCION',
                'width' => '10%',
            ),
        'ESTADO_CARTERA_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_CARTERA',
                'width' => '10%',
            ),
        'ESTADO_VISAS_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_VISAS',
                'width' => '10%',
            ),
        'DATE_ENTERED' =>
            array(
                'width' => '10%',
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
            ),
        'FECHA_PRESUPUESTO_C' =>
            array(
                'type' => 'date',
                'default' => true,
                'label' => 'LBL_FECHA_PRESUPUESTO',
                'width' => '10%',
            ),
        'SOEL_FECHA_VIAJE' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_SOEL_FECHA_VIAJE',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_FECHA_EXPIRACION_VISA' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'LEADS_OPPORTUNITIES_1_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_LEADS_OPPORTUNITIES_1_FROM_LEADS_TITLE',
                'id' => 'LEADS_OPPORTUNITIES_1LEADS_IDA',
                'width' => '10%',
                'default' => true,
            ),
        'CONTACTS_OPPORTUNITIES_1_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
                'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
                'width' => '10%',
                'default' => true,
            ),
        'SOEL_VISTO_BUENO_COMERCIAL' =>
            array(
                'type' => 'bool',
                'label' => 'LBL_SOEL_VISTO_BUENO_COMERCIAL',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_VISTO_BUENO_VISAS' =>
            array(
                'type' => 'bool',
                'label' => 'LBL_SOEL_VISTO_BUENO_VISAS',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_OFICINA' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_OFICINA',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_REQUERIMIENTO' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_REQUERIMIENTO',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_ASIGNADO_APLICACION' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_ASIGNADO_APLICACION',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_ASIGNADO_SERVICIO_CLIENTE' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_ASIGNADO_SERVICIO_CLIENTE',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_ASIGNADO_VISAS' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_ASIGNADO_VISAS',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'DATE_MODIFIED' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'width' => '10%',
                'default' => false,
            ),
        'CREATED_BY_NAME' =>
            array(
                'width' => '10%',
                'label' => 'LBL_CREATED',
                'default' => false,
            ),
        'MODIFIED_BY_NAME' =>
            array(
                'width' => '5%',
                'label' => 'LBL_MODIFIED',
                'default' => false,
            ),
        'PENDIENTE_PAGO_COLEGIOS_C' =>
            array(
                'type' => 'currency',
                'default' => false,
                'label' => 'LBL_PENDIENTE_PAGO_COLEGIOS',
                'currency_format' => true,
                'width' => '10%',
            ),
        'PENDIENTE_CARTERA_C' =>
            array(
                'type' => 'currency',
                'default' => false,
                'label' => 'LBL_PENDIENTE_CARTERA',
                'currency_format' => true,
                'width' => '10%',
            ),
        'FECHA_PROXIMO_CONTACTO_C' =>
            array(
                'type' => 'datetimecombo',
                'default' => false,
                'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
                'width' => '10%',
            ),
        'FECHA_ULTIMO_CONTACTO_C' =>
            array(
                'type' => 'datetimecombo',
                'default' => false,
                'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
                'width' => '10%',
            ),
        'SOEL_REFERIDO' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_REFERIDO',
                'width' => '10%',
                'default' => false,
            ),

        'SOEL_DOCS_SOLICITADOS' =>
            array (
                'type' => 'varchar',
                'label' => 'LBL_SOEL_DOCS_SOLICITADOS',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_CAMPUS' =>
            array (
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CAMPUS',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_DATE_ESTUDIANTE' =>
            array (
                'type' => 'datetime',
                'label' => 'LBL_SOEL_DATE_ESTUDIANTE',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_DATE_ASESOR' =>
            array (
                'type' => 'datetime',
                'label' => 'LBL_SOEL_DATE_ASESOR',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_DOCS_APROBADOS' =>
            array (
                'type' => 'varchar',
                'label' => 'LBL_SOEL_DOCS_APROBADOS',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_DOCS_CARGADOS' =>
            array (
                'type' => 'varchar',
                'label' => 'LBL_SOEL_DOCS_CARGADOS',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_DOCS_PENDIENTES' =>
            array (
                'type' => 'varchar',
                'label' => 'LBL_SOEL_DOCS_PENDIENTES',
                'width' => '10%',
                'default' => false,
            ),
        'LIMITE_LUZ_VERDE_C' =>
            array(
                'type' => 'date',
                'default' => false,
                'label' => 'LBL_LIMITE_LUZ_VERDE',
                'width' => '10%',
            ),

        'SOEL_CIUDAD_TMP' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CIUDAD_TMP',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_LOCALIZACION' =>
            array(
                'type' => 'multienum',
                'studio' => 'visible',
                'label' => 'LBL_SOEL_LOCALIZACION',
                'width' => '10%',
                'default' => false,
            ),
            'SOEL_MOBILE_PHONE_LEAD' =>
            array(
                'type' => 'varchar',
                'studio' => 'visible',
                'label' => 'LBL_SOEL_MOBILE_PHONE_LEAD',
                'width' => '10%',
                'default' => false,
            ),
        'SOEL_EMAIL_LEAD' =>
            array(
                'type' => 'varchar',
                'studio' => 'visible',
                'label' => 'LBL_EMAIL_LEAD',
                'width' => '10%',
                'default' => false,
            ),
    );
?>
