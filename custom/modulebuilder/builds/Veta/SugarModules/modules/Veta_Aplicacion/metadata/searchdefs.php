<?php
$module_name = 'Veta_Aplicacion';
$searchdefs [$module_name] =
    array(
        'layout' =>
            array(
                'basic_search' =>
                    array(
                        'name' =>
                            array(
                                'name' => 'name',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'estudiante' =>
                            array(
                                'type' => 'relate',
                                'studio' => 'visible',
                                'label' => 'LBL_ESTUDIANTE',
                                'id' => 'CONTACT_ID_C',
                                'link' => true,
                                'width' => '10%',
                                'default' => true,
                                'name' => 'estudiante',
                            ),
                        'prospecto' =>
                            array(
                                'type' => 'relate',
                                'studio' => 'visible',
                                'label' => 'LBL_PROSPECTO',
                                'id' => 'LEAD_ID_C',
                                'link' => true,
                                'width' => '10%',
                                'default' => true,
                                'name' => 'prospecto',
                            ),
                    ),
                'advanced_search' =>
                    array(
                        'name' =>
                            array(
                                'name' => 'name',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'estudiante' =>
                            array(
                                'type' => 'relate',
                                'studio' => 'visible',
                                'label' => 'LBL_ESTUDIANTE',
                                'link' => true,
                                'width' => '10%',
                                'default' => true,
                                'id' => 'CONTACT_ID_C',
                                'name' => 'estudiante',
                            ),
                        'prospecto' =>
                            array(
                                'type' => 'relate',
                                'studio' => 'visible',
                                'label' => 'LBL_PROSPECTO',
                                'link' => true,
                                'width' => '10%',
                                'default' => true,
                                'id' => 'LEAD_ID_C',
                                'name' => 'prospecto',
                            ),
                        'soel_colegio' =>
                            array(
                                'type' => 'varchar',
                                'default' => true,
                                'label' => 'LBL_SOEL_COLEGIO',
                                'width' => '10%',
                                'name' => 'soel_colegio',
                                'sortable' => false,
                            ),
                        'curso' =>
                            array(
                                'type' => 'varchar',
                                'label' => 'LBL_CURSO',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'curso',
                            ),
                        'jornada' =>
                            array(
                                'type' => 'varchar',
                                'label' => 'LBL_JORNADA',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'jornada',
                            ),
                        'duracion' =>
                            array(
                                'type' => 'varchar',
                                'label' => 'LBL_DURACION',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'duracion',
                            ),
                        'intensidad' =>
                            array(
                                'type' => 'varchar',
                                'label' => 'LBL_INTENSIDAD',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'intensidad',
                            ),
                        'campus' =>
                            array(
                                'type' => 'varchar',
                                'label' => 'LBL_CAMPUS',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'campus',
                            ),
                        'tipo_curso' =>
                            array(
                                'type' => 'enum',
                                'studio' => 'visible',
                                'label' => 'LBL_TIPO_CURSO',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'tipo_curso',
                            ),
                        'ciudad' =>
                            array(
                                'type' => 'dynamicenum',
                                'studio' => 'visible',
                                'label' => 'LBL_CIUDAD',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'ciudad',
                            ),
                        'estado_aplicacion' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_ESTADO_APLICACION',
                                'width' => '10%',
                                'name' => 'estado_aplicacion',
                            ),
                        'date_entered' =>
                            array(
                                'type' => 'datetime',
                                'label' => 'LBL_DATE_ENTERED',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'date_entered',
                            ),
                        'fecha_inicio' =>
                            array(
                                'type' => 'datetimecombo',
                                'label' => 'LBL_FECHA_INICIO',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'fecha_inicio',
                            ),
                        'fecha_admisiones' =>
                            array(
                                'type' => 'datetimecombo',
                                'label' => 'LBL_FECHA_ADMISIONES',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'fecha_admisiones',
                            ),
                        'fecha_recepcion_1' =>
                            array(
                                'type' => 'datetimecombo',
                                'label' => 'LBL_FECHA_RECEPCION_1',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'fecha_recepcion_1',
                            ),
                        'fecha_recepcion_2' =>
                            array(
                                'type' => 'datetimecombo',
                                'label' => 'LBL_FECHA_RECEPCION_2',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'fecha_recepcion_2',
                            ),
                        'fecha_envio' =>
                            array(
                                'type' => 'datetimecombo',
                                'label' => 'LBL_FECHA_ENVIO',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'fecha_envio',
                            ),
                        'soel_referido' =>
                            array(
                                'type' => 'varchar',
                                'default' => true,
                                'label' => 'LBL_SOEL_REFERIDO',
                                'width' => '10%',
                                'name' => 'soel_referido',
                                'sortable' => false,
                            ),
                        'soel_fecha_viaje' =>
                            array(
                                'type' => 'datetime',
                                'default' => true,
                                'label' => 'LBL_SOEL_FECHA_VIAJE',
                                'width' => '10%',
                                'name' => 'soel_fecha_viaje',
                                'sortable' => false,
                            ),
                        'soel_fecha_expiracion_visa' =>
                            array(
                                'type' => 'datetime',
                                'default' => true,
                                'label' => 'LBL_SOEL_FECHA_EXPIRACION_VISA',
                                'width' => '10%',
                                'name' => 'soel_fecha_expiracion_visa',
                                'sortable' => false,
                            ),
                        'soel_fecha_cierre' =>
                            array(
                                'type' => 'datetime',
                                'default' => true,
                                'label' => 'LBL_SOEL_FECHA_CIERRE',
                                'width' => '10%',
                                'name' => 'soel_fecha_cierre',
                                'sortable' => false,
                            ),
                        'veta_aplicacion_opportunities_name' =>
                            array(
                                'type' => 'relate',
                                'link' => true,
                                'label' => 'LBL_VETA_APLICACION_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
                                'id' => 'VETA_APLICACION_OPPORTUNITIESOPPORTUNITIES_IDA',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'veta_aplicacion_opportunities_name',
                            ),
                        'assigned_user_id' =>
                            array(
                                'name' => 'assigned_user_id',
                                'label' => 'LBL_ASSIGNED_TO',
                                'type' => 'enum',
                                'function' =>
                                    array(
                                        'name' => 'get_user_array',
                                        'params' =>
                                            array(
                                                0 => false,
                                            ),
                                    ),
                                'default' => true,
                                'width' => '10%',
                            ),
                        'soel_oficina_comercial' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'label' => 'LBL_SOEL_OFICINA_COMERCIAL',
                                'width' => '10%',
                                'name' => 'soel_oficina_comercial',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getOficinasComercial'
                                ),
                            ),
                        'soel_comercial_requerimiento'                 =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_COMERCIAL_REQUERIMIENTO',
                                'width'    => '10%',
                                'name'     => 'soel_comercial_requerimiento',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getAsignadoLeads'
                                ),
                            ),
                        'soel_estado_loo' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'label' => 'LBL_SOEL_ESTADO_LOO',
                                'width' => '10%',
                                'name' => 'soel_estado_loo',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getEstadosLoo'
                                ),
                            ),
                        'soel_estado_coe' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'label' => 'LBL_SOEL_ESTADO_COE',
                                'width' => '10%',
                                'name' => 'soel_estado_coe',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getEstadosCOE'
                                ),
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
                    ),
            ),
        'templateMeta' =>
            array(
                'maxColumns' => '3',
                'maxColumnsBasic' => '4',
                'widths' =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
            ),
    );
?>
