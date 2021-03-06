<?php
$module_name = 'Veta_Requerimiento';
$listViewDefs [$module_name] =
    array(
        'NAME' =>
            array(
                'width' => '32%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true,
            ),

        'VETA_REQUERIMIENTO_CONTACTS_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
                'id' => 'VETA_REQUERIMIENTO_CONTACTSCONTACTS_IDA',
                'width' => '10%',
                'default' => true,
            ),
        'VETA_REQUERIMIENTO_LEADS_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
                'id' => 'VETA_REQUERIMIENTO_LEADSLEADS_IDA',
                'width' => '10%',
                'default' => true,
            ),
        'DATE_ENTERED' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'width' => '10%',
                'default' => true,
            ),
        'ASSIGNED_USER_NAME' =>
            array(
                'width' => '9%',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'module' => 'Employees',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true,
            ),
        'FUENTE' =>
            array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_FUENTE',
                'width' => '10%',
                'default' => true,
            ),
        'CAMPANA' =>
            array(
                'type' => 'relate',
                'studio' => 'visible',
                'label' => 'LBL_CAMPANA',
                'id' => 'CAMPAIGN_ID_C',
                'link' => true,
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_VIAJE_TXT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_FECHA_VIAJE_TXT',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_VIAJE' =>
            array(
                'type' => 'date',
                'label' => 'LBL_FECHA_VIAJE',
                'width' => '10%',
                'default' => true,
            ),
        'VISTO_BUENO_COMERCIAL' =>
            array(
                'type' => 'bool',
                'default' => true,
                'label' => 'LBL_VISTO_BUENO_COMERCIAL',
                'width' => '10%',
            ),
        'VISTO_BUENO_VISAS' =>
            array(
                'type' => 'bool',
                'default' => true,
                'label' => 'LBL_VISTO_BUENO_VISAS',
                'width' => '10%',
            ),
        'PRESUPUESTO' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_PRESUPUESTO',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_PROXIMO_CONTACTO' =>
            array(
                'type' => 'date',
                'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_ULTIMO_CONTACTO' =>
            array(
                'type' => 'date',
                'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_PRIMER_PRESUPUESTO' =>
            array(
                'type' => 'date',
                'label' => 'LBL_FECHA_PRIMER_PRESUPUESTO',
                'width' => '10%',
                'default' => true,
            ),
        'REFERIDO' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_REFERIDO',
                'width' => '10%',
                'default' => true,
            ),
        'ESTADO' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO',
                'width' => '10%',
            ),
        'SOEL_HOME_PHONE_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_HOME_PHONE_LEAD',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_MOBILE_PHONE_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_MOBILE_PHONE_LEAD',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_FECHA_EXPIRACION_VISA_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA_LEAD',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_FECHA_EXPIRACION_VISA_TEXTO_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_EXPIRACION_VISA_TEXTO_LEAD',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_EDAD_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_EDAD_LEAD',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'DESCRIPTION' =>
            array(
                'type' => 'text',
                'label' => 'LBL_DESCRIPTION',
                'sortable' => false,
                'width' => '10%',
                'default' => false,
            ),
        'CREATED_BY_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_CREATED',
                'id' => 'CREATED_BY',
                'width' => '10%',
                'default' => false,
            ),
        'MODIFIED_BY_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_MODIFIED_NAME',
                'id' => 'MODIFIED_USER_ID',
                'width' => '10%',
                'default' => false,
            ),
        'DATE_MODIFIED' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'width' => '10%',
                'default' => false,
            ),

        'SOEL_FECHA_MODIFICACION_LEAD' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_SOEL_FECHA_MODIFICACION_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_ESTADO_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_ESTADO_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_FUENTE_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_FUENTE_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_PAIS_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_PAIS_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_DEPARTAMENTO_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_DEPARTAMENTO_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_CIUDAD_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CIUDAD_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_CIUDAD_TMP' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CIUDAD_TMP',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_CARRERA_UNIVERSITARIA' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_CARRERA_UNIVERSITARIA',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_TRABAJO_ACTUAL' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_TRABAJO_ACTUAL',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_VISA_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_VISA_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_PASAPORTE_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_PASAPORTE_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_ASIGNADO_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_ASIGNADO_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_CAMPANA_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CAMPANA_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_CONVERTIDO_LEAD' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CONVERTIDO_LEAD',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_HOME_PHONE_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_HOME_PHONE_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_MOBILE_PHONE_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_MOBILE_PHONE_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_FUENTE_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_FUENTE_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_PAIS_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_PAIS_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_DEPARTAMENTO_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_DEPARTAMENTO_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_CIUDAD_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CIUDAD_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_FECHA_EXPIRACION_VISA_CONTACT' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_ASIGNADO_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_ASIGNADO_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_FECHA_MODIFICACION_CONTACT' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_SOEL_FECHA_MODIFICACION_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_VISA_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_VISA_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_CAMPANA_CONTACT' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_CAMPANA_CONTACT',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_OFICINA_COMERCIAL' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_OFICINA_COMERCIAL',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'LOCALIZACION' =>
            array(
                'type' => 'multienum',
                'studio' => 'visible',
                'label' => 'LBL_LOCALIZACION',
                'width' => '10%',
                'default' => false,
            ),

    );;
?>
