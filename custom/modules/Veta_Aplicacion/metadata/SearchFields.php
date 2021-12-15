<?php
// created: 2021-08-31 18:50:49
$searchFields['Veta_Aplicacion'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'soel_referido' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT veta_aplicacion.id AS ID FROM veta_aplicacion 
                            INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                            INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                            INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                            INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                            INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                            INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                         WHERE veta_requerimiento.deleted = 0 and TRIM(veta_requerimiento.referido) like  (\'{0}\')',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'soel_colegio' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT veta_aplicacion.id AS ID FROM veta_aplicacion 
                            INNER JOIN veta_aplicacion_cstm ON veta_aplicacion_cstm.id_c = veta_aplicacion.id 
                            INNER JOIN veta_curso ON veta_curso.id = veta_aplicacion_cstm.veta_curso_id_c AND veta_curso.deleted = 0
                            INNER JOIN veta_college ON veta_college.id = veta_curso.veta_college_id_c AND veta_college.deleted = 0
                         WHERE TRIM(veta_college.name) like  (\'{0}\')',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_soel_fecha_viaje' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_soel_fecha_viaje' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_soel_fecha_viaje' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_soel_fecha_expiracion_visa' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_soel_fecha_expiracion_visa' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_soel_fecha_expiracion_visa' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_soel_fecha_cierre' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_soel_fecha_cierre' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_soel_fecha_cierre' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_fecha_inicio' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_fecha_inicio' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_fecha_inicio' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_fecha_admisiones' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_fecha_admisiones' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_fecha_admisiones' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_fecha_recepcion_1' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_fecha_recepcion_1' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_fecha_recepcion_1' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_fecha_recepcion_2' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_fecha_recepcion_2' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_fecha_recepcion_2' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_fecha_envio' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_fecha_envio' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_fecha_envio' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'soel_oficina_comercial' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT veta_aplicacion.id AS ID 
                            FROM veta_aplicacion 
                                INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                                INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                                INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                                INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                                INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                                INNER JOIN users ON users.id = veta_requerimiento.assigned_user_id 
                            WHERE users.deleted = 0 AND users.address_city IN  (\'{0}\')',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'soel_comercial_requerimiento' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT veta_aplicacion.id AS ID 
                            FROM veta_aplicacion 
                                INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                                INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                                INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                                INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                                INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                                INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                                INNER JOIN users ON users.id = veta_requerimiento.assigned_user_id 
                            WHERE users.deleted = 0 AND users.id IN  (\'{0}\')',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'soel_estado_loo' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT veta_aplicacion.id AS ID 
            FROM veta_loo
                INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb = veta_loo.id AND veta_loo_veta_aplicacion_c.deleted = 0
                INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion.deleted = 0
            WHERE veta_loo.estado_loo IN  (\'{0}\')',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'soel_estado_coe' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT veta_aplicacion.id AS ID 
            FROM veta_coe
                INNER JOIN veta_coe_veta_aplicacion_c ON veta_coe_veta_aplicacion_c.veta_coe_veta_aplicacionveta_coe_idb = veta_coe.id AND veta_coe_veta_aplicacion_c.deleted = 0
                INNER JOIN veta_aplicacion ON veta_aplicacion.id = veta_coe_veta_aplicacion_c.veta_coe_veta_aplicacionveta_aplicacion_ida AND veta_aplicacion.deleted = 0
            WHERE veta_coe.estado IN  (\'{0}\')',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'range_fecha_expiracion_visa' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_fecha_expiracion_visa' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_fecha_expiracion_visa' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
);