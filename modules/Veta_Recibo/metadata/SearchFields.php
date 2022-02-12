<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'Veta_Recibo';

global $timedate, $current_user;
$dateformat = $current_user->getPreference('datef');
$parts = array('m', 'd', 'Y');
$dateformat = str_replace('m', '%m', $dateformat);
$dateformat = str_replace('d', '%d', $dateformat);
$dateformat = str_replace('Y', '%Y', $dateformat);

$searchFields[$module_name] = array(
    'name' => array('query_type' => 'default'),
    'current_user_only' => array(
        'query_type' => 'default',
        'db_field' => array('assigned_user_id'),
        'my_items' => true,
        'vname' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool'
    ),
    'assigned_user_id' => array('query_type' => 'default'),

    //Range Search Support
    'range_date_entered' => array('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
    'start_range_date_entered' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
    'end_range_date_entered' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
    'range_date_modified' => array('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
    'start_range_date_modified' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
    'end_range_date_modified' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
    //Range Search Support

    #region soel_ciudad_tmp
    'soel_ciudad_tmp' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_recibo.id AS ID FROM veta_recibo
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                             INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0
                             INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida AND leads.deleted = 0 
                             INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id 
                            WHERE leads_cstm.ciudad_tmp_c IN  (\'{0}\')',
            'db_field' => array(0 => 'id',),
        ),
    #endregion

    #region soel_localizacion
    'soel_localizacion' =>
        array(
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => "SELECT veta_recibo.id AS ID FROM veta_recibo
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida   
                         WHERE veta_requerimiento.deleted = 0 and REPLACE(veta_requerimiento.localizacion, '^' , '\'' ) = " . '"\'{0}\'"',
            'db_field' =>
                array(
                    0 => 'id',
                ),
        ),
    #endregion
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
                    inner join veta_abono_veta_recibo_c vavrc on vr.id = vavrc.veta_abono_veta_reciboveta_recibo_ida and vavrc.deleted = 0
                    inner join veta_abono va on vavrc.veta_abono_veta_reciboveta_abono_idb = va.id
                    and va.date_entered >= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
    'db_field' => array ( 0 => 'id', ),
  ),
  'end_range_veta_abono_fechainsert' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery'=>'select vr.id from veta_recibo vr 
                    inner join veta_abono_veta_recibo_c vavrc on vr.id = vavrc.veta_abono_veta_reciboveta_recibo_ida and vavrc.deleted = 0
                    inner join veta_abono va on vavrc.veta_abono_veta_reciboveta_abono_idb = va.id
                    and va.date_entered <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
    'db_field' => array ( 0 => 'id', ),
  ),
);
