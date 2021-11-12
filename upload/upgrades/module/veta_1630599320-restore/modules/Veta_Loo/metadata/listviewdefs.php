<?php
$module_name = 'Veta_Loo';
$listViewDefs [$module_name] =
    array(
        'NAME' =>
            array(
                'type' => 'name',
                'link' => true,
                'label' => 'LBL_NAME',
                'width' => '10%',
                'default' => true,
            ),
        'ESTUDIANTE' =>
            array(
                'type' => 'relate',
                'studio' => 'visible',
                'label' => 'LBL_ESTUDIANTE',
                'id' => 'CONTACT_ID_C',
                'link' => true,
                'width' => '10%',
                'default' => true,
            ),
        'PROSPECTO' =>
            array(
                'type' => 'relate',
                'studio' => 'visible',
                'label' => 'LBL_PROSPECTO',
                'id' => 'LEAD_ID_C',
                'link' => true,
                'width' => '10%',
                'default' => true,
            ),
        'ESTADO_LOO' =>
            array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_LOO',
                'width' => '10%',
                'default' => true,
            ),

        'FECHA_RECEPCION' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_RECEPCION',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_RECEPCION2' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_RECEPCION2',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_ADMISIONES' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_ADMISIONES',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_FIRMA' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_FIRMA',
                'width' => '10%',
                'default' => true,
            ),
        'FECHA_ENVIO' =>
            array(
                'type' => 'datetimecombo',
                'label' => 'LBL_FECHA_ENVIO',
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
        'VETA_LOO_VETA_APLICACION_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_VETA_LOO_VETA_APLICACION_FROM_VETA_APLICACION_TITLE',
                'id' => 'VETA_LOO_VETA_APLICACIONVETA_APLICACION_IDA',
                'width' => '10%',
                'default' => true,
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
        'DATE_MODIFIED' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'width' => '10%',
                'default' => false,
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
