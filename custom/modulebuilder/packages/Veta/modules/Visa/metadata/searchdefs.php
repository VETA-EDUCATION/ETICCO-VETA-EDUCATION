<?php
$module_name                 = 'Veta_Visa';
$searchdefs [ $module_name ] =
    array(
        'layout'       =>
            array(
                'basic_search'    =>
                    array(
                        'name'       => array( 'name' => 'name', 'default' => true, 'width' => '10%', ),
                        'estudiante' => array( 'type' => 'relate', 'studio' => 'visible', 'label' => 'LBL_ESTUDIANTE', 'id' => 'CONTACT_ID_C', 'link' => true, 'width' => '10%', 'default' => true, 'name' => 'estudiante' ),
                        'estado'     => array( 'type' => 'enum', 'studio' => 'visible', 'label' => 'LBL_ESTADO', 'width' => '10%', 'default' => true, 'name' => 'estado' ),
                    ),
                'advanced_search' =>
                    array(
                        'name'                                => array( 'name' => 'name', 'default' => true, 'width' => '10%', ),
                        'estudiante'                          => array( 'type' => 'relate', 'studio' => 'visible', 'label' => 'LBL_ESTUDIANTE', 'link' => true, 'width' => '10%', 'default' => true, 'id' => 'CONTACT_ID_C', 'name' => 'estudiante' ),
                        'estado'                              => array( 'type' => 'enum', 'studio' => 'visible', 'label' => 'LBL_ESTADO', 'width' => '10%', 'default' => true, 'name' => 'estado' ),
                        'soel_fecha_expiracion_visa'          => array( 'type' => 'datetimecombo', 'default' => true, 'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA', 'width' => '10%', 'name' => 'soel_fecha_expiracion_visa', 'sortable' => false ),
                        'fecha_avac'                          => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_AVAC', 'width' => '10%', 'default' => true, 'name' => 'fecha_avac' ),
                        'fecha_aplicacion'                    => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_APLICACION', 'width' => '10%', 'default' => true, 'name' => 'fecha_aplicacion' ),
                        'fecha_firma_acta'                    => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_FIRMA_ACTA', 'width' => '10%', 'default' => true, 'name' => 'fecha_firma_acta' ),
                        'fecha_recibido'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_RECIBIDO', 'width' => '10%', 'default' => true, 'name' => 'fecha_recibido' ),
                        'fecha_examenes_medicos'              => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXAMENES_MEDICOS', 'width' => '10%', 'default' => true, 'name' => 'fecha_examenes_medicos' ),
                        'fecha_pago'                          => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_PAGO', 'width' => '10%', 'default' => true, 'name' => 'fecha_pago' ),
                        'fecha_otorgada'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_OTORGADA', 'width' => '10%', 'default' => true, 'name' => 'fecha_otorgada' ),
                        'fecha_req1'                          => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_REQ1', 'width' => '10%', 'default' => true, 'name' => 'fecha_req1' ),
                        'fecha_req2'                          => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_REQ2', 'width' => '10%', 'default' => true, 'name' => 'fecha_req2' ),
                        'fecha_req3'                          => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_REQ3', 'width' => '10%', 'default' => true, 'name' => 'fecha_req3' ),
                        'fecha_exp_req1'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXP_REQ1', 'width' => '10%', 'default' => true, 'name' => 'fecha_exp_req1' ),
                        'fecha_exp_req2'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXP_REQ2', 'width' => '10%', 'default' => true, 'name' => 'fecha_exp_req2' ),
                        'fecha_exp_req3'                      => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_EXP_REQ3', 'width' => '10%', 'default' => true, 'name' => 'fecha_exp_req3' ),
                        'assigned_user_name'                  => array( 'link' => true, 'type' => 'relate', 'label' => 'LBL_ASSIGNED_TO_NAME', 'id' => 'ASSIGNED_USER_ID', 'width' => '10%', 'default' => true, 'name' => 'assigned_user_name' ),
                        'asesor_comercial'                    => array( 'type' => 'relate', 'studio' => 'visible', 'label' => 'LBL_ASESOR_COMERCIAL', 'id' => 'USER_ID_C', 'link' => true, 'width' => '10%', 'default' => true, 'name' => 'asesor_comercial' ),
                        'date_entered'                        => array( 'type' => 'datetime', 'label' => 'LBL_DATE_ENTERED', 'width' => '10%', 'default' => true, 'name' => 'date_entered' ),
                        'soel_referido'                       => array( 'type' => 'varchar', 'default' => true, 'label' => 'LBL_SOEL_REFERIDO', 'width' => '10%', 'name' => 'soel_referido', 'sortable' => false ),
                        'soel_fecha_viaje'                    => array( 'type' => 'datetime', 'default' => true, 'label' => 'LBL_SOEL_FECHA_VIAJE', 'width' => '10%', 'name' => 'soel_fecha_viaje', 'sortable' => false ),
                        'veta_visa_opportunities_name'        => array( 'type' => 'relate', 'link' => true, 'label' => 'LBL_VETA_VISA_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE', 'id' => 'VETA_VISA_OPPORTUNITIESOPPORTUNITIES_IDA', 'width' => '10%', 'default' => true, 'name' => 'veta_visa_opportunities_name' ),
                        'veta_visa_veta_serviciocliente_name' =>
                            array(
                                'type'    => 'relate',
                                'link'    => true,
                                'label'   => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_SERVICIOCLIENTE_TITLE',
                                'id'      => 'VETA_VISA_VETA_SERVICIOCLIENTEVETA_SERVICIOCLIENTE_IDB',
                                'width'   => '10%',
                                'default' => true,
                                'name'    => 'veta_visa_veta_serviciocliente_name',
                            ),
                    ),
            ),
        'templateMeta' => array( 'maxColumns' => '3', 'maxColumnsBasic' => '4', 'widths' => array( 'label' => '10', 'field' => '30' ) ),
    );;
?>
