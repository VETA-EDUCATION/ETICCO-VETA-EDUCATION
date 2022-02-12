<?php
$module_name                 = 'Veta_Requerimiento';
$searchdefs [ $module_name ] =
    array(
        'layout'       =>
            array(
                'basic_search'    =>
                    array(
                        //region name
                        'name'                             => array(
                            'name'    => 'name',
                            'default' => true,
                            'width'   => '10%'
                        ),
                        //endregion

                        //region estado
                        'estado'                           => array(
                            'type'    => 'enum',
                            'default' => true,
                            'studio'  => 'visible',
                            'label'   => 'LBL_ESTADO',
                            'width'   => '10%',
                            'name'    => 'estado'
                        ),
                        //endregion

                        //region fuente
                        'fuente'                           => array(
                            'type'    => 'enum',
                            'studio'  => 'visible',
                            'label'   => 'LBL_FUENTE',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'fuente'
                        ),
                        //endregion

                        //region campana
                        'campana'                          => array(
                            'type'    => 'relate',
                            'studio'  => 'visible',
                            'label'   => 'LBL_CAMPANA',
                            'id'      => 'CAMPAIGN_ID_C',
                            'link'    => true,
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'campana'
                        ),
                        //endregion

                        //region veta_requerimiento_contacts_name
                        'veta_requerimiento_contacts_name' =>
                            array(
                                'type'    => 'relate',
                                'link'    => true,
                                'label'   => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
                                'id'      => 'VETA_REQUERIMIENTO_CONTACTSCONTACTS_IDA',
                                'width'   => '10%',
                                'default' => true,
                                'name'    => 'veta_requerimiento_contacts_name',
                            ),
                        //endregion

                        //region veta_requerimiento_leads_name
                        'veta_requerimiento_leads_name'    =>
                            array(
                                'type'    => 'relate',
                                'link'    => true,
                                'label'   => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
                                'id'      => 'VETA_REQUERIMIENTO_LEADSLEADS_IDA',
                                'width'   => '10%',
                                'default' => true,
                                'name'    => 'veta_requerimiento_leads_name',
                            ),
                        //endregion

                        //region assigned_user_id
                        'assigned_user_id'                 =>
                            array(
                                'name'     => 'assigned_user_id',
                                'label'    => 'LBL_ASSIGNED_TO',
                                'type'     => 'enum',
                                'function' =>
                                    array(
                                        'name'   => 'get_user_array',
                                        'params' =>
                                            array(
                                                0 => false,
                                            ),
                                    ),
                                'width'    => '10%',
                                'default'  => true,
                            ),
                        //endregion
                    ),
                'advanced_search' =>
                    array(
                        //region name
                        'name'                               => array(
                            'name'    => 'name',
                            'default' => true,
                            'width'   => '10%'
                        ),
                        //endregion

                        //region created_by
                        'created_by'                         => array(
                            'type'    => 'assigned_user_name',
                            'label'   => 'LBL_CREATED',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'created_by'
                        ),
                        //endregion

                        //region fuente
                        'fuente'                             => array(
                            'type'    => 'enum',
                            'studio'  => 'visible',
                            'label'   => 'LBL_FUENTE',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'fuente'
                        ),
                        //endregion

                        //region campana
                        'campana'                            => array(
                            'type'    => 'relate',
                            'studio'  => 'visible',
                            'label'   => 'LBL_CAMPANA',
                            'link'    => true,
                            'width'   => '10%',
                            'default' => true,
                            'id'      => 'CAMPAIGN_ID_C',
                            'name'    => 'campana',
                        ),
                        //endregion

                        //region visto_bueno_comercial
                        'visto_bueno_comercial'              =>
                            array(
                                'type'    => 'bool',
                                'default' => true,
                                'label'   => 'LBL_VISTO_BUENO_COMERCIAL',
                                'width'   => '10%',
                                'name'    => 'visto_bueno_comercial',
                            ),
                        //endregion

                        //region visto_bueno_visas
                        'visto_bueno_visas'                  =>
                            array(
                                'type'    => 'bool',
                                'default' => true,
                                'label'   => 'LBL_VISTO_BUENO_VISAS',
                                'width'   => '10%',
                                'name'    => 'visto_bueno_visas',
                            ),
                        //endregion

                        //region estado
                        'estado'                             =>
                            array(
                                'type'    => 'enum',
                                'default' => true,
                                'studio'  => 'visible',
                                'label'   => 'LBL_ESTADO',
                                'width'   => '10%',
                                'name'    => 'estado',
                            ),
                        //endregion

                        //region referido
                        'referido'                           =>
                            array(
                                'type'    => 'varchar',
                                'label'   => 'LBL_REFERIDO',
                                'width'   => '10%',
                                'default' => true,
                                'name'    => 'referido',
                            ),
                        //endregion

                        //region veta_requerimiento_leads_name
                        'veta_requerimiento_leads_name'      =>
                            array(
                                'type'    => 'relate',
                                'link'    => true,
                                'label'   => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
                                'width'   => '10%',
                                'default' => true,
                                'id'      => 'VETA_REQUERIMIENTO_LEADSLEADS_IDA',
                                'name'    => 'veta_requerimiento_leads_name',
                            ),
                        //endregion

                        //region veta_requerimiento_contacts_name
                        'veta_requerimiento_contacts_name'   =>
                            array(
                                'type'    => 'relate',
                                'link'    => true,
                                'label'   => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
                                'width'   => '10%',
                                'default' => true,
                                'id'      => 'VETA_REQUERIMIENTO_CONTACTSCONTACTS_IDA',
                                'name'    => 'veta_requerimiento_contacts_name',
                            ),
                        //endregion

                        //region assigned_user_id
                        'assigned_user_id'                   =>
                            array(
                                'name'     => 'assigned_user_id',
                                'label'    => 'LBL_ASSIGNED_TO',
                                'type'     => 'enum',
                                'function' =>
                                    array(
                                        'name'   => 'get_user_array',
                                        'params' =>
                                            array(
                                                0 => false,
                                            ),
                                    ),
                                'default'  => true,
                                'width'    => '10%',
                            ),
                        //endregion

                        //region soel_home_phone_lead
                        'soel_home_phone_lead'               =>
                            array(
                                'type'     => 'varchar',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_HOME_PHONE_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_home_phone_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_mobile_phone_lead
                        'soel_mobile_phone_lead'             =>
                            array(
                                'type'     => 'varchar',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_MOBILE_PHONE_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_mobile_phone_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_estado_lead
                        'soel_estado_lead'                   =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_ESTADO_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_estado_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_fuente_lead
                        'soel_fuente_lead'                   =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_FUENTE_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_fuente_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_pais_lead
                        'soel_pais_lead'                     =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_PAIS_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_pais_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_departamento_lead
                        'soel_departamento_lead'             =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_DEPARTAMENTO_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_departamento_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_ciudad_lead
                        'soel_ciudad_lead'                   =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_CIUDAD_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_ciudad_lead',
                                'sortable' => false,
                            ),
                        //endregion

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

                        //region soel_visa_lead
                        'soel_visa_lead'                     =>
                            array(
                                'type'     => 'varchar',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_VISA_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_visa_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_pasaporte_lead
                        'soel_pasaporte_lead'                     =>
                            array(
                                'type'     => 'varchar',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_PASAPORTE_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_pasaporte_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_asignado_lead
                        'soel_asignado_lead'                 =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_ASIGNADO_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_asignado_lead',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getAsignadoLeads'
                                ),
                            ),
                        //endregion

                        //region soel_campana_lead
                        'soel_campana_lead'                  =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_CAMPANA_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_campana_lead',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getCampanaLeads'
                                ),
                            ),
                        //endregion

                        //region soel_convertido_lead
                        'soel_convertido_lead'                 =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_CONVERTIDO_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_convertido_lead',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getYesNoOptions'
                                ),
                            ),
                        //endregion

                        //region soel_home_phone_contact
                        'soel_home_phone_contact'            =>
                            array(
                                'type'     => 'varchar',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_HOME_PHONE_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_home_phone_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_mobile_phone_contact
                        'soel_mobile_phone_contact'          =>
                            array(
                                'type'     => 'varchar',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_MOBILE_PHONE_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_mobile_phone_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_fuente_contact
                        'soel_fuente_contact'                =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_FUENTE_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_fuente_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_pais_contact
                        'soel_pais_contact'                  =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_PAIS_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_pais_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_departamento_contact
                        'soel_departamento_contact'          =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_DEPARTAMENTO_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_departamento_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_ciudad_contact
                        'soel_ciudad_contact'                =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_CIUDAD_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_ciudad_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_asignado_contact
                        'soel_asignado_contact'              =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_ASIGNADO_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_asignado_contact',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getAsignadoLeads'
                                ),
                            ),
                        //endregion

                        //region soel_visa_contact
                        'soel_visa_contact'                  =>
                            array(
                                'type'     => 'varchar',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_VISA_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_visa_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_campana_contact
                        'soel_campana_contact'               =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_CAMPANA_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_campana_contact',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getCampanaLeads'
                                ),
                            ),
                        //endregion

                        //region soel_oficina_comercial
                        'soel_oficina_comercial'             =>
                            array(
                                'type'     => 'enum',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_OFICINA_COMERCIAL',
                                'width'    => '10%',
                                'name'     => 'soel_oficina_comercial',
                                'sortable' => false,
                                'function' => array(
                                    'name' => 'getOficinasComercial'
                                ),
                            ),
                        //endregion

                        //region date_entered
                        'date_entered'                       => array(
                            'type'    => 'datetime',
                            'label'   => 'LBL_DATE_ENTERED',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'date_entered'
                        ),
                        //endregion

                        //region soel_fecha_modificacion_lead
                        'soel_fecha_modificacion_lead'       =>
                            array(
                                'type'     => 'datetime',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_FECHA_MODIFICACION_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_fecha_modificacion_lead',
                                'sortable' => false
                            ),
                        //endregion

                        //region soel_fecha_modificacion_contact
                        'soel_fecha_modificacion_contact'    =>
                            array(
                                'type'     => 'datetime',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_FECHA_MODIFICACION_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_fecha_modificacion_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region fecha_viaje
                        'fecha_viaje'                        => array(
                            'type'    => 'date',
                            'label'   => 'LBL_FECHA_VIAJE',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'fecha_viaje'
                        ),
                        //endregion

                        //region fecha_viaje txt
                        'fecha_viaje_txt'                        => array(
                            'label'   => 'LBL_FECHA_VIAJE_TXT',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'fecha_viaje_txt'
                        ),
                        //endregion

                        //region fecha_proximo_contacto
                        'fecha_proximo_contacto'             =>
                            array(
                                'type'    => 'date',
                                'label'   => 'LBL_FECHA_PROXIMO_CONTACTO',
                                'width'   => '10%',
                                'default' => true,
                                'name'    => 'fecha_proximo_contacto',
                            ),
                        //endregion

                        //region fecha_ultimo_contacto
                        'fecha_ultimo_contacto'              =>
                            array(
                                'type'    => 'date',
                                'label'   => 'LBL_FECHA_ULTIMO_CONTACTO',
                                'width'   => '10%',
                                'default' => true,
                                'name'    => 'fecha_ultimo_contacto',
                            ),
                        //endregion

                        //region fecha_primer_presupuesto
                        'fecha_primer_presupuesto'           =>
                            array(
                                'type'    => 'date',
                                'label'   => 'LBL_FECHA_PRIMER_PRESUPUESTO',
                                'width'   => '10%',
                                'default' => true,
                                'name'    => 'fecha_primer_presupuesto',
                            ),
                        //endregion

                        //region soel_fecha_expiracion_visa_lead
                        'soel_fecha_expiracion_visa_lead'    =>
                            array(
                                'type'     => 'datetime',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_FECHA_EXPIRACION_VISA_LEAD',
                                'width'    => '10%',
                                'name'     => 'soel_fecha_expiracion_visa_lead',
                                'sortable' => false,
                            ),
                        //endregion

                        //region soel_fecha_expiracion_visa_contact
                        'soel_fecha_expiracion_visa_contact' =>
                            array(
                                'type'     => 'datetime',
                                'default'  => true,
                                'label'    => 'LBL_SOEL_FECHA_EXPIRACION_VISA_CONTACT',
                                'width'    => '10%',
                                'name'     => 'soel_fecha_expiracion_visa_contact',
                                'sortable' => false,
                            ),
                        //endregion

                        //region localizacion
                        'fuente'                             => array(
                            'type'    => 'multienum',
                            'studio'  => 'visible',
                            'label'   => 'LBL_LOCALIZACION',
                            'width'   => '10%',
                            'default' => true,
                            'name'    => 'localizacion'
                        ),
                        //endregion
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
