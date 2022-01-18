<?php

global $timedate, $current_user;
$dateformat = $current_user->getPreference('datef');
$parts = array('m', 'd', 'Y');
$dateformat = str_replace('m', '%m', $dateformat);
$dateformat = str_replace('d', '%d', $dateformat);
$dateformat = str_replace('Y', '%Y', $dateformat);


// created: 2020-10-25 14:36:06
$searchFields['Opportunities'] = array(
    'name' =>
        array(
            'query_type' => 'default',
        ),
    'account_name' =>
        array(
            'query_type' => 'default',
            'db_field' =>
                array(
                    0 => 'accounts.name',
                ),
        ),
    'amount' =>
        array(
            'query_type' => 'default',
        ),
    'next_step' =>
        array(
            'query_type' => 'default',
        ),
    'probability' =>
        array(
            'query_type' => 'default',
        ),
    'lead_source' =>
        array(
            'query_type' => 'default',
            'operator' => '=',
            'options' => 'lead_source_dom',
            'template_var' => 'LEAD_SOURCE_OPTIONS',
        ),
    'opportunity_type' =>
        array(
            'query_type' => 'default',
            'operator' => '=',
            'options' => 'opportunity_type_dom',
            'template_var' => 'TYPE_OPTIONS',
        ),
    'sales_stage' =>
        array(
            'query_type' => 'default',
            'operator' => '=',
            'options' => 'sales_stage_dom',
            'template_var' => 'SALES_STAGE_OPTIONS',
            'options_add_blank' => true,
        ),
    'current_user_only' =>
        array(
            'query_type' => 'default',
            'db_field' =>
                array(
                    0 => 'assigned_user_id',
                ),
            'my_items' => true,
            'vname' => 'LBL_CURRENT_USER_FILTER',
            'type' => 'bool',
        ),
    'assigned_user_id' =>
        array(
            'query_type' => 'default',
        ),
    'soel_visto_bueno_comercial' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT id FROM 
            (
            SELECT
            venta.id,
            IFNULL(prospecto_cstm.ok_comercial_c, IFNULL(convertido_cstm.ok_comercial_c,0) ) as visto_bueno_comercial,
            IFNULL(prospecto_cstm.ok_visas_c, IFNULL(convertido_cstm.ok_visas_c,0) ) as visto_bueno_visas
            FROM opportunities venta 
            LEFT JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = venta.id AND contacts_opportunities_1_c.deleted = 0
            LEFT JOIN contacts estudiante ON estudiante.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida 
            LEFT JOIN contacts_cstm estudiante_cstm ON estudiante_cstm.id_c = estudiante.id
            LEFT JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = venta.id AND leads_opportunities_1_c.deleted = 0
            LEFT JOIN leads prospecto ON prospecto.id = leads_opportunities_1_c.leads_opportunities_1leads_ida 
            LEFT JOIN leads_cstm prospecto_cstm ON prospecto_cstm.id_c = prospecto.id
            LEFT JOIN leads convertido ON convertido.contact_id = estudiante.id
            LEFT JOIN leads_cstm convertido_cstm on convertido_cstm.id_c = convertido.id
            WHERE venta.deleted = 0) AS t 
            WHERE  visto_bueno_comercial =  \'{0}\'',
            'db_field' =>
                array(
                    0 => 'id',
                ),
        ),
    'soel_visto_bueno_visas' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT id FROM 
            (
            SELECT
            venta.id,
            IFNULL(prospecto_cstm.ok_comercial_c, IFNULL(convertido_cstm.ok_comercial_c,0) ) as visto_bueno_comercial,
            IFNULL(prospecto_cstm.ok_visas_c, IFNULL(convertido_cstm.ok_visas_c,0) ) as visto_bueno_visas
            FROM opportunities venta 
            LEFT JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = venta.id AND contacts_opportunities_1_c.deleted = 0
            LEFT JOIN contacts estudiante ON estudiante.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida 
            LEFT JOIN contacts_cstm estudiante_cstm ON estudiante_cstm.id_c = estudiante.id
            LEFT JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = venta.id AND leads_opportunities_1_c.deleted = 0
            LEFT JOIN leads prospecto ON prospecto.id = leads_opportunities_1_c.leads_opportunities_1leads_ida 
            LEFT JOIN leads_cstm prospecto_cstm ON prospecto_cstm.id_c = prospecto.id
            LEFT JOIN leads convertido ON convertido.contact_id = estudiante.id
            LEFT JOIN leads_cstm convertido_cstm on convertido_cstm.id_c = convertido.id
            WHERE venta.deleted = 0) AS t 
            WHERE  visto_bueno_visas =  \'{0}\'',
            'db_field' =>
                array(
                    0 => 'id',
                ),
        ),
    'soel_referido' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id AS ID FROM opportunities
                            INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                            INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                            INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                            INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                         WHERE veta_requerimiento.deleted = 0 and TRIM(veta_requerimiento.referido) like  (\'{0}\')',
            'db_field' =>
                array(
                    0 => 'id',
                ),
        ),
    'open_only' =>
        array(
            'query_type' => 'default',
            'db_field' =>
                array(
                    0 => 'sales_stage',
                ),
            'operator' => 'not in',
            'closed_values' =>
                array(
                    0 => 'Closed Won',
                    1 => 'Closed Lost',
                ),
            'type' => 'bool',
        ),
    'favorites_only' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'checked_only' => true,
            'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = \'Opportunities\'
			                        and favorites.assigned_user_id = \'{1}\'',
            'db_field' =>
                array(
                    0 => 'id',
                ),
        ),
    'range_date_entered' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_date_entered' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_date_entered' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_date_modified' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_date_modified' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_date_modified' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_date_closed' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_date_closed' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_date_closed' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_amount' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
        ),
    'start_range_amount' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
        ),
    'end_range_amount' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
        ),
    'description' =>
        array(
            'query_type' => 'default',
        ),
    'range_fecha_ultimo_contacto_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_ultimo_contacto_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_ultimo_contacto_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_proximo_contacto_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_proximo_contacto_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_proximo_contacto_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_cierre_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_cierre_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_cierre_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_expiracion_visa_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_expiracion_visa_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_expiracion_visa_new' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_expiracion_visa_new_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_expiracion_visa_new_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_expiracion_visa_new_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_ultimo_contacto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_ultimo_contacto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_ultimo_contacto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_proximo_contacto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_proximo_contacto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_proximo_contacto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_cierre' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_cierre' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_cierre' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_expiracion_visa' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_expiracion_visa' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_expiracion_visa' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_cierre_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_cierre_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_cierre_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_expiracion_visa_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_expiracion_visa_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_expiracion_visa_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_ultimo_contacto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_ultimo_contacto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_ultimo_contacto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_proximo_contacto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_proximo_contacto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_proximo_contacto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_presupuesto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_presupuesto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_presupuesto' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_fecha_presupuesto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_fecha_presupuesto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_fecha_presupuesto_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'soel_oficina' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id FROM opportunities 
                    INNER JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = opportunities.id AND leads_opportunities_1_c.deleted = 0
                    INNER JOIN leads ON leads.id = leads_opportunities_1_c.leads_opportunities_1leads_ida AND leads.deleted = 0
                    INNER JOIN users ON users.id = leads.assigned_user_id 
                    WHERE users.address_city IN (\'{0}\')
                    UNION ALL
                    SELECT opportunities.id FROM opportunities 
                    INNER JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = opportunities.id AND contacts_opportunities_1_c.deleted = 0
                    INNER JOIN contacts ON contacts.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida AND contacts.deleted = 0
                    INNER JOIN users ON users.id = contacts.assigned_user_id 
                    WHERE users.address_city IN ( \'{0}\' )',
            'db_field' =>
                array(
                    0 => 'id',
                ),
        ),

    #region soel_asignado_aplicacion
    'soel_asignado_aplicacion' => array(
        'query_type' => 'format',
        'operator' => 'subquery',
        'subquery' => 'SELECT opportunities.id AS ID 
                            FROM opportunities 
                                INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida = opportunities.id AND veta_aplicacion_opportunities_c.deleted = 0 
                                INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb AND veta_aplicacion.deleted = 0 
                                INNER JOIN users ON users.id = veta_aplicacion.assigned_user_id AND users.deleted = 0 
                            WHERE users.id IN  (\'{0}\')',
        'db_field' => array(0 => 'id',),
    ),
    #endregion

    #region soel_asignado_servicio_cliente
    'soel_asignado_servicio_cliente' => array(
        'query_type' => 'format',
        'operator' => 'subquery',
        'subquery' => 'SELECT opportunities.id AS ID 
                            FROM opportunities 
                                INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida = opportunities.id AND veta_serviciocliente_opportunities_c.deleted = 0 
                                INNER JOIN veta_serviciocliente ON veta_serviciocliente.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb AND veta_serviciocliente.deleted = 0 
                                INNER JOIN users ON users.id = veta_serviciocliente.assigned_user_id AND users.deleted = 0 
                            WHERE users.id IN  (\'{0}\')',
        'db_field' => array(0 => 'id',),
    ),
    #endregion

    #region soel_asignado_visas
    'soel_asignado_visas' => array(
        'query_type' => 'format',
        'operator' => 'subquery',
        'subquery' => 'SELECT opportunities.id AS ID 
                            FROM opportunities 
                                INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida = opportunities.id AND veta_serviciocliente_opportunities_c.deleted = 0 
                                INNER JOIN veta_serviciocliente ON veta_serviciocliente.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb AND veta_serviciocliente.deleted = 0
                                INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id AND veta_visa_veta_serviciocliente_c.deleted = 0
                                INNER JOIN veta_visa ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida  AND veta_visa.deleted = 0
                                INNER JOIN users ON users.id = veta_visa.assigned_user_id AND users.deleted = 0 
                            WHERE users.id IN  (\'{0}\')',
        'db_field' => array(0 => 'id',),
    ),
    #endregion

    'range_soel_fecha_viaje' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id AS ID FROM opportunities
                            INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                            INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                            INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                            INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                         WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.fecha_viaje >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and veta_requerimiento.fecha_viaje <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field' => array(0 => 'id',),

        ),
    'start_range_soel_fecha_viaje' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id AS ID FROM opportunities
                            INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                            INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                            INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                            INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                         WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.fecha_viaje >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
            'db_field' => array(0 => 'id',),

        ),
    'end_range_soel_fecha_viaje' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id AS ID FROM opportunities
                            INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                            INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                            INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                            INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                         WHERE veta_requerimiento.deleted = 0 AND veta_requerimiento.fecha_viaje <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field' => array(0 => 'id',),
        ),

    'range_soel_fecha_expiracion_visa' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id AS ID 
                            FROM opportunities
                            INNER JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = opportunities.id AND leads_opportunities_1_c.deleted = 0 
                            INNER JOIN leads ON leads.id = leads_opportunities_1_c.leads_opportunities_1leads_ida AND leads.deleted = 0 
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                            WHERE leads_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and leads_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')
                            /*UNION 
                            SELECT opportunities.id AS ID 
                            FROM opportunities
                            INNER JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = opportunities.id AND contacts_opportunities_1_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida AND contacts.deleted = 0 
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                            WHERE contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')*/',
            'db_field' => array(0 => 'id',),

        ),
    'start_range_soel_fecha_expiracion_visa' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id AS ID 
                            FROM opportunities
                            INNER JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = opportunities.id AND leads_opportunities_1_c.deleted = 0 
                            INNER JOIN leads ON leads.id = leads_opportunities_1_c.leads_opportunities_1leads_ida AND leads.deleted = 0 
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                            WHERE leads_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') 
                            /*UNION 
                            SELECT opportunities.id AS ID 
                            FROM opportunities
                            INNER JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = opportunities.id AND contacts_opportunities_1_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida AND contacts.deleted = 0 
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                            WHERE contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')*/',
            'db_field' => array(0 => 'id',),
        ),
    'end_range_soel_fecha_expiracion_visa' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT opportunities.id AS ID 
                            FROM opportunities
                            INNER JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = opportunities.id AND leads_opportunities_1_c.deleted = 0 
                            INNER JOIN leads ON leads.id = leads_opportunities_1_c.leads_opportunities_1leads_ida AND leads.deleted = 0 
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                            WHERE leads_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')
                            /*UNION 
                            SELECT opportunities.id AS ID 
                            FROM opportunities
                            INNER JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = opportunities.id AND contacts_opportunities_1_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida AND contacts.deleted = 0 
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                            WHERE contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')*/',
            'db_field' => array(0 => 'id',),
        ),

    'range_limite_luz_verde' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_limite_luz_verde' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_limite_luz_verde' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'range_limite_luz_verde_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'start_range_limite_luz_verde_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),
    'end_range_limite_luz_verde_c' =>
        array(
            'query_type' => 'default',
            'enable_range_search' => true,
            'is_date_field' => true,
        ),

);