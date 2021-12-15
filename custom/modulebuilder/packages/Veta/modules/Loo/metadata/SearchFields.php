<?php
// created: 2020-10-27 18:29:50

global $current_user;
$dateformat = $current_user->getPreference('datef');
$parts = array('m', 'd', 'Y');
$dateformat = str_replace( 'm', '%m', $dateformat );
$dateformat = str_replace( 'd', '%d', $dateformat );
$dateformat = str_replace( 'Y', '%Y', $dateformat );

$searchFields['Veta_Loo'] = array (
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
          'query_type' => 'format',
          'operator' => 'subquery',
          'subquery' => 'SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             WHERE veta_loo.deleted = 0 AND veta_requerimiento.fecha_viaje >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and veta_requerimiento.fecha_viaje <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
          'db_field' => array ( 0 => 'id', ),
      ),
  'start_range_soel_fecha_viaje' =>
      array (
          'query_type' => 'format',
          'operator' => 'subquery',
          'subquery' => 'SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             WHERE veta_loo.deleted = 0 AND veta_requerimiento.fecha_viaje >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
          'db_field' => array ( 0 => 'id', ),
      ),
  'end_range_soel_fecha_viaje' =>
      array (
          'query_type' => 'format',
          'operator' => 'subquery',
          'subquery' => 'SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             WHERE veta_loo.deleted = 0 AND veta_requerimiento.fecha_viaje <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
          'db_field' => array ( 0 => 'id', ),
      ),
  'range_soel_fecha_expiracion_visa' =>
      array (
          'query_type' => 'format',
          'operator' => 'subquery',
          'subquery' => 'SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0   
                             INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = opportunities.id AND leads_opportunities_1_c.deleted = 0 
                             INNER JOIN leads ON leads.id = leads_opportunities_1_c.leads_opportunities_1leads_ida AND leads.deleted = 0 
                             INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                             WHERE leads_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and leads_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')
                             UNION 
                             SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                             INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = opportunities.id AND contacts_opportunities_1_c.deleted = 0 
                             INNER JOIN contacts ON contacts.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida AND contacts.deleted = 0 
                             INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                             WHERE contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
          'db_field' => array ( 0 => 'id', ),

      ),
  'start_range_soel_fecha_expiracion_visa' =>
      array (
          'query_type' => 'format',
          'operator' => 'subquery',
          'subquery' => 'SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                             INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = opportunities.id AND leads_opportunities_1_c.deleted = 0 
                             INNER JOIN leads ON leads.id = leads_opportunities_1_c.leads_opportunities_1leads_ida AND leads.deleted = 0 
                             INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                             WHERE leads_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') 
                             UNION 
                             SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                             INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = opportunities.id AND contacts_opportunities_1_c.deleted = 0 
                             INNER JOIN contacts ON contacts.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida AND contacts.deleted = 0 
                             INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                             WHERE contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
          'db_field' => array ( 0 => 'id', ),
      ),
  'end_range_soel_fecha_expiracion_visa' =>
      array (
          'query_type' => 'format',
          'operator' => 'subquery',
          'subquery' => 'SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0  
                             INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN leads_opportunities_1_c ON leads_opportunities_1_c.leads_opportunities_1opportunities_idb = opportunities.id AND leads_opportunities_1_c.deleted = 0 
                             INNER JOIN leads ON leads.id = leads_opportunities_1_c.leads_opportunities_1leads_ida AND leads.deleted = 0 
                             INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                             WHERE leads_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')
                             UNION 
                             SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
                             INNER JOIN veta_aplicacion_opportunities_c ON veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesveta_aplicacion_idb = veta_aplicacion.id AND veta_aplicacion_opportunities_c.deleted = 0 
                             INNER join opportunities ON opportunities.id = veta_aplicacion_opportunities_c.veta_aplicacion_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN contacts_opportunities_1_c ON contacts_opportunities_1_c.contacts_opportunities_1opportunities_idb = opportunities.id AND contacts_opportunities_1_c.deleted = 0 
                             INNER JOIN contacts ON contacts.id = contacts_opportunities_1_c.contacts_opportunities_1contacts_ida AND contacts.deleted = 0 
                             INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                             WHERE contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
          'db_field' => array ( 0 => 'id', ),
      ),

  'soel_referido' =>
      array (
          'query_type' => 'format',
          'operator' => 'subquery',
          'subquery' => 'SELECT veta_loo.id AS ID FROM veta_loo
                             INNER JOIN veta_loo_veta_aplicacion_c ON veta_loo.id = veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_loo_idb 
                             INNER JOIN veta_aplicacion ON veta_loo_veta_aplicacion_c.veta_loo_veta_aplicacionveta_aplicacion_ida = veta_aplicacion.id  AND veta_loo_veta_aplicacion_c.deleted = 0
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
);