<?php
$module_name = 'Veta_COE';
$listViewDefs [$module_name] =
    array(
        'NAME' =>
            array(
                'width' => '10%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true,
            ),
        'ESTUDIANTE' =>
            array(
                'type' => 'relate',
                'studio' => 'visible',
                'label' => 'LBL_ESTUDIANTE',
                'id' => 'CONTACT_ID_C',
                'link' => true,
                'width' => '7%',
                'default' => true,
            ),
        'PROSPECTO' =>
            array(
                'type' => 'relate',
                'studio' => 'visible',
                'label' => 'LBL_PROSPECTO',
                'id' => 'LEAD_ID_C',
                'link' => true,
                'width' => '7%',
                'default' => true,
            ),
        'FECHA_SOLICITUD' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_SOLICITUD',
                'width' => '7%',
                'default' => true,
            ),

        'FECHA_CORRECCION' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_CORRECCION',
                'width' => '7%',
                'default' => true,
            ),
        'FECHA_CORRECCION2' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_CORRECCION2',
                'width' => '7%',
                'default' => true,
            ),
        'FECHA_ENVIO_ESTUDIANTE' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_ENVIO_ESTUDIANTE',
                'width' => '7%',
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
                'width' => '7%',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'module' => 'Employees',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true,
            ),
        'VETA_COE_OPPORTUNITIES_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_VETA_COE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
                'id' => 'VETA_COE_OPPORTUNITIESOPPORTUNITIES_IDA',
                'width' => '7%',
                'default' => true,
            ),
        'VETA_COE_VETA_APLICACION_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_VETA_COE_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
                'id' => 'VETA_COE_VETA_APLICACIONVETA_APLICACION_IDA',
                'width' => '7%',
                'default' => true,
            ),
        'VETA_COE_VETA_LIQUIDACION_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_VETA_COE_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
                'id' => 'VETA_COE_VETA_LIQUIDACIONVETA_LIQUIDACION_IDA',
                'width' => '7%',
                'default' => true,
            ),
        'ESTADO' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_ESTADO',
                'width' => '7%',
            ),
        'DATE_MODIFIED' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'width' => '10%',
                'default' => false,
            ),

        'SOEL_FECHA_EXPIRACION_VISA' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
                'width' => '10%',
                'default' => true,
                'sortable' => false,
            ),
        'SOEL_REFERIDO' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_REFERIDO',
                'width' => '10%',
                'default' => true,
            ),
        'SOEL_FECHA_VIAJE' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_SOEL_FECHA_VIAJE',
                'width' => '10%',
                'default' => true,
            ),
        'SOEL_OFICINA_COMERCIAL' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_OFICINA_COMERCIAL',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
        'SOEL_COMERCIAL_REQUERIMIENTO' =>
            array(
                'type' => 'varchar',
                'label' => 'LBL_SOEL_COMERCIAL_REQUERIMIENTO',
                'width' => '10%',
                'default' => false,
                'sortable' => false,
            ),
    );;
?>
