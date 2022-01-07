<?php
// created: 2022-01-04 19:31:04

global $timedate, $current_user;
$dateformat = $current_user->getPreference('datef');
$parts = array('m', 'd', 'Y');
$dateformat = str_replace('m', '%m', $dateformat);
$dateformat = str_replace('d', '%d', $dateformat);
$dateformat = str_replace('Y', '%Y', $dateformat);

$searchFields['Veta_Recibo'] = array (
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
    'query_type' => 'format',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_veta_abono_fechainsert' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery'=>'select vr.id from veta_recibo vr 
                    inner join veta_abono_veta_recibo_c vavrc on vr.id = vavrc.veta_abono_veta_reciboveta_recibo_ida and vavrc.deleted = 0
                    inner join veta_abono va on vavrc.veta_abono_veta_reciboveta_abono_idb = va.id
                    and va.date_entered >= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and va.date_entered <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
    'db_field' => array ( 0 => 'id', ),
  ),
  'start_range_veta_abono_fechainsert' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery'=>'select vr.id from veta_recibo vr 
                    inner join veta_abono_veta_recibo_c vavrc on vr.id = vavrc.veta_abono_veta_reciboveta_recibo_ida 
                    inner join veta_abono va on vavrc.veta_abono_veta_reciboveta_abono_idb = va.id
                    and va.date_entered >= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
    'db_field' => array ( 0 => 'id', ),
  ),
  'end_range_veta_abono_fechainsert' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery'=>'select vr.id from veta_recibo vr 
                    inner join veta_abono_veta_recibo_c vavrc on vr.id = vavrc.veta_abono_veta_reciboveta_recibo_ida 
                    inner join veta_abono va on vavrc.veta_abono_veta_reciboveta_abono_idb = va.id
                    and va.date_entered <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
    'db_field' => array ( 0 => 'id', ),
  ),
);