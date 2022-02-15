<?php
$module_name                   = 'Veta_Visa';
$listViewDefs [ $module_name ] =
    array(
        'NAME'                                => array( 'width' => '32%', 'label' => 'LBL_NAME', 'default' => true, 'link' => true ),
        'ESTUDIANTE'                          => array( 'type' => 'relate', 'studio' => 'visible', 'label' => 'LBL_ESTUDIANTE', 'id' => 'CONTACT_ID_C', 'link' => true, 'width' => '10%', 'default' => true ),
        'ESTADO'                              => array( 'type' => 'enum', 'studio' => 'visible', 'label' => 'LBL_ESTADO', 'width' => '10%', 'default' => true ),
        'FECHA_AVAC'                          => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_AVAC', 'width' => '10%', 'default' => true, ),
        'FECHA_FIRMA_ACTA'                    => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_FIRMA_ACTA', 'width' => '10%', 'default' => true, ),
        'FECHA_EXAMENES_MEDICOS'              => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXAMENES_MEDICOS', 'width' => '10%', 'default' => true, ),
        'FECHA_OTORGADA'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_OTORGADA', 'width' => '10%', 'default' => true, ),
        'FECHA_RECIBIDO'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_RECIBIDO', 'width' => '10%', 'default' => true, ),
        'FECHA_EXP_REQ1'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXP_REQ1', 'width' => '10%', 'default' => true, ),
        'FECHA_EXP_REQ2'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXP_REQ2', 'width' => '10%', 'default' => true, ),
        'FECHA_EXP_REQ3'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXP_REQ3', 'width' => '10%', 'default' => true, ),
        'FECHA_PAGO'                          => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_PAGO', 'width' => '10%', 'default' => true, ),
        'FECHA_APLICACION'                    => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_APLICACION', 'width' => '10%', 'default' => true, ),
        'ASSIGNED_USER_NAME'                  => array( 'width' => '9%', 'label' => 'LBL_ASSIGNED_TO_NAME', 'module' => 'Employees', 'id' => 'ASSIGNED_USER_ID', 'default' => true, ),
        'ASESOR_COMERCIAL'                    => array( 'type' => 'relate', 'studio' => 'visible', 'label' => 'LBL_ASESOR_COMERCIAL', 'id' => 'USER_ID_C', 'link' => true, 'width' => '10%', 'default' => true ),
        'DATE_ENTERED'                        => array( 'type' => 'datetime', 'label' => 'LBL_DATE_ENTERED', 'width' => '10%', 'default' => true, ),
        'DATE_MODIFIED'                       => array( 'type' => 'datetime', 'label' => 'LBL_DATE_MODIFIED', 'width' => '10%', 'default' => true, ),
        'SOEL_REFERIDO'                       => array( 'type' => 'varchar', 'label' => 'LBL_SOEL_REFERIDO', 'width' => '10%', 'default' => true, ),
        'SOEL_FECHA_VIAJE'                    => array( 'type' => 'datetime', 'label' => 'LBL_SOEL_FECHA_VIAJE', 'width' => '10%', 'default' => true, ),
        'SOEL_FECHA_EXPIRACION_VISA'          => array( 'type' => 'datetime', 'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA', 'width' => '10%', 'default' => true, ),
        'VETA_VISA_OPPORTUNITIES_NAME'        => array( 'type' => 'relate', 'link' => true, 'label' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE', 'id' => 'VETA_VISA_OPPORTUNITIESOPPORTUNITIES_IDA', 'width' => '10%', 'default' => true, ),
        'VETA_VISA_VETA_SERVICIOCLIENTE_NAME' => array( 'type' => 'relate', 'link' => true, 'label' => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE', 'id' => 'VETA_VISA_VETA_SERVICIOCLIENTEVETA_SERVICIOCLIENTE_IDB', 'width' => '10%', 'default' => true, ),
        'SOEL_REQUERIMIENTO'                  => array( 'type' => 'varchar', 'label' => 'LBL_SOEL_REQUERIMIENTO', 'width' => '10%', 'default' => true, 'sortable' => false, ),
        'SOEL_CIUDAD_TMP'                     => array( 'type' => 'varchar', 'label' => 'LBL_SOEL_CIUDAD_TMP', 'width' => '10%', 'default' => true, 'sortable' => false, ),
    );
?>
