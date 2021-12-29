<?php
$module_name                 = 'Veta_ServicioCliente';
$searchdefs [ $module_name ] =
    array(
        'layout'       =>
            array(
                'basic_search'    =>
                    array(
                        'name'              => array( 'name' => 'name', 'default' => true, 'width' => '10%', ),
                        'estado'            => array( 'type' => 'enum', 'default' => true, 'studio' => 'visible', 'label' => 'LBL_ESTADO', 'width' => '10%', 'name' => 'estado' ),
                        'current_user_only' => array( 'name' => 'current_user_only', 'label' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool', 'default' => true, 'width' => '10%' ),
                    ),
                'advanced_search' =>
                    array(
                        'name'       => array( 'name' => 'name', 'default' => true, 'width' => '10%' ),
                        'estado'     => array( 'type' => 'enum', 'default' => true, 'studio' => 'visible', 'label' => 'LBL_ESTADO', 'width' => '10%', 'name' => 'estado', ),
                        'estudiante' => array( 'type' => 'relate', 'studio' => 'visible', 'label' => 'LBL_ESTUDIANTE', 'id' => 'CONTACT_ID_C', 'link' => true, 'width' => '10%', 'default' => true, 'name' => 'estudiante' ),
                        'prospecto'  => array( 'type' => 'relate', 'studio' => 'visible', 'label' => 'LBL_PROSPECTO', 'id' => 'LEAD_ID_C', 'link' => true, 'width' => '10%', 'default' => true, 'name' => 'prospecto' ),

                        'veta_serviciocliente_opportunities_name' => array(
                            'type'    => 'relate',
                            'link'    => true,
                            'label'   => 'LBL_VETA_SERVICIOCLIENTE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
                            'id'      => 'VETA_SERVICIOCLIENTE_OPPORTUNITIESOPPORTUNITIES_IDA',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'veta_serviciocliente_opportunities_name',
                        ),
                        'veta_visa_veta_serviciocliente_name'     => array(
                            'type'    => 'relate',
                            'link'    => true,
                            'label'   => 'LBL_VETA_VISA_VETA_SERVICIOCLIENTE_FROM_VETA_VISA_TITLE',
                            'id'      => 'VETA_VISA_VETA_SERVICIOCLIENTEVETA_VISA_IDA',
                            'width'   => '10%',
                            'default' => true, 'name' => 'veta_visa_veta_serviciocliente_name',
                        ),
                        'assigned_user_id'                        => array(
                            'name'     => 'assigned_user_id',
                            'label'    => 'LBL_ASSIGNED_TO',
                            'type'     => 'enum',
                            'function' => array( 'name' => 'get_user_array', 'params' => array( 0 => false ) ),
                            'default'  => true,
                            'width'    => '10%',
                        ),

                        'soel_fecha_viaje'           => array( 'type' => 'datetime', 'default' => true, 'label' => 'LBL_SOEL_FECHA_VIAJE', 'width' => '10%', 'name' => 'soel_fecha_viaje', 'sortable' => false ),
                        'soel_limite_luz_verde'      => array( 'type' => 'datetime', 'default' => true, 'label' => 'LBL_SOEL_LIMITE_LUZ_VERDE', 'width' => '10%', 'name' => 'soel_limite_luz_verde', 'sortable' => false ),
                        'soel_referido'              => array( 'type' => 'varchar', 'default' => true, 'label' => 'LBL_SOEL_REFERIDO', 'width' => '10%', 'name' => 'soel_referido', 'sortable' => false ),
                        'soel_fecha_expiracion_visa' => array( 'type' => 'date', 'default' => true, 'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA', 'width' => '10%', 'name' => 'soel_fecha_expiracion_visa', 'sortable' => false ),

                        'fecha_proximo_contacto' => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_PROXIMO_CONTACTO', 'width' => '10%', 'default' => true, 'name' => 'fecha_proximo_contacto' ),
                        'fecha_ultimo_contacto'  => array( 'type' => 'datetimecombo', 'label' => 'LBL_FECHA_ULTIMO_CONTACTO', 'width' => '10%', 'default' => true, 'name' => 'fecha_ultimo_contacto' ),
                    ),
            ),
        'templateMeta' =>
            array(
                'maxColumns'      => '3',
                'maxColumnsBasic' => '4',
                'widths'          =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
            ),
    );;
?>
