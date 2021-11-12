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

$module_name = 'Veta_Requerimiento';
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
    'soel_home_phone_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 and TRIM(UPPER(leads.phone_home)) like  \'{0}\'',
            'db_field' => array ( 0 => 'id', ),
        ),

    'soel_mobile_phone_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 and TRIM(UPPER(leads.phone_mobile)) like  \'{0}\'',
            'db_field' => array ( 0 => 'id', ),
        ),

    /*'soel_fecha_expiracion_visa_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and leads_cstm.fecha_expiracion_visa_c > 0  \'{0} 00:00:00\' and leads_cstm.fecha_expiracion_visa_c <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),
            'is_date_field' => true,
        ),*/
    'range_soel_fecha_expiracion_visa_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and leads_cstm.fecha_expiracion_visa_c >=  \'{0} 00:00:00\' and leads_cstm.fecha_expiracion_visa_c <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),

        ),
    'start_range_soel_fecha_expiracion_visa_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
           'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and leads_cstm.fecha_expiracion_visa_c >=  \'{0} 00:00:00\'',
            'db_field' => array ( 0 => 'id', ),

        ),
    'end_range_soel_fecha_expiracion_visa_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and leads_cstm.fecha_expiracion_visa_c <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),

        ),
    'range_soel_fecha_modificacion_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 and leads.date_modified >=  \'{0} 00:00:00\' and leads.date_modified <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'start_range_soel_fecha_modificacion_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 and leads.date_modified >=  \'{0} 00:00:00\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'end_range_soel_fecha_modificacion_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 and leads.date_modified <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),
        ),

    'soel_estado_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 and TRIM(leads.status) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_fuente_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 and TRIM(leads.lead_source) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_pais_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and TRIM(leads_cstm.pais_c) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_departamento_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and TRIM(leads_cstm.departamento_c) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_ciudad_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and TRIM(leads_cstm.ciudad_c) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_visa_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 and TRIM(leads_cstm.visa_c) like  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_asignado_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN users asignado ON asignado.id = leads.assigned_user_id AND asignado.deleted = 0
                         WHERE leads.deleted = 0 and asignado.id in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_campana_lead' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN campaigns ON campaigns.id = leads.campaign_id AND campaigns.deleted = 0
                         WHERE leads.deleted = 0 and campaigns.id in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_home_phone_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 and TRIM(UPPER(contacts.phone_home)) like  \'{0}\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_mobile_phone_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 and TRIM(UPPER(contacts.phone_mobile)) like  \'{0}\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_fuente_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 and TRIM(contacts.lead_source) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_pais_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 and TRIM(contacts_cstm.pais_c) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_departamento_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 and TRIM(contacts_cstm.departamento_c) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_ciudad_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 and TRIM(contacts_cstm.ciudad_c) in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'range_soel_fecha_expiracion_visa_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 and contacts_cstm.fecha_expiracion_visa_c >=  \'{0} 00:00:00\' and contacts_cstm.fecha_expiracion_visa_c <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),

        ),
    'start_range_soel_fecha_expiracion_visa_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 and contacts_cstm.fecha_expiracion_visa_c >=  \'{0} 00:00:00\'',
            'db_field' => array ( 0 => 'id', ),

        ),
    'end_range_soel_fecha_expiracion_visa_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 and contacts_cstm.fecha_expiracion_visa_c <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_asignado_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN users asignado ON asignado.id = contacts.assigned_user_id AND asignado.deleted = 0
                         WHERE contacts.deleted = 0 and asignado.id in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'range_soel_fecha_modificacion_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 and contacts.date_modified >=  \'{0} 00:00:00\' and contacts.date_modified <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'start_range_soel_fecha_modificacion_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 and contacts.date_modified >=  \'{0} 00:00:00\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'end_range_soel_fecha_modificacion_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 and contacts.date_modified <= \'{0} 23:59:59\'',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_visa_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 and TRIM(contacts_cstm.visa_c) like  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_campana_contact' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN campaigns ON campaigns.id = contacts.campaign_id AND campaigns.deleted = 0
                         WHERE contacts.deleted = 0 and campaigns.id in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
    'soel_oficina_comercial' =>
        array (
            'query_type' => 'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN users ON users.id = veta_requerimiento.assigned_user_id 
                            WHERE users.deleted = 0 and users.address_city in  (\'{0}\')',
            'db_field' => array ( 0 => 'id', ),
        ),
);