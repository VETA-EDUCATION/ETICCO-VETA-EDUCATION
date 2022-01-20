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

if ( ! defined( 'sugarEntry' ) || ! sugarEntry )
{
    die( 'Not A Valid Entry Point' );
}

global $current_user;
$dateformat = $current_user->getPreference('datef');
$parts = array('m', 'd', 'Y');
$dateformat = str_replace( 'm', '%m', $dateformat );
$dateformat = str_replace( 'd', '%d', $dateformat );
$dateformat = str_replace( 'Y', '%Y', $dateformat );

$module_name = 'Veta_Requerimiento';

$searchFields[ $module_name ] = array(
    'name'              => array( 'query_type' => 'default' ),

    'assigned_user_id'                               => array( 'query_type' => 'default' ),

    //region current_user_only
    'current_user_only' => array(
        'query_type' => 'default',
        'db_field'   => array( 'assigned_user_id' ),
        'my_items'   => true,
        'vname'      => 'LBL_CURRENT_USER_FILTER',
        'type'       => 'bool'
    ),
    //endregion

    //region soel_home_phone_lead
    'soel_home_phone_lead'                           => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND TRIM(UPPER(leads.phone_home)) LIKE  \'{0}\'',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_mobile_phone_lead
    'soel_mobile_phone_lead'                         => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND TRIM(UPPER(leads.phone_mobile)) LIKE  \'{0}\'',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_estado_lead
    'soel_estado_lead'                               => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND TRIM(leads.status) IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_fuente_lead
    'soel_fuente_lead'                               => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND TRIM(leads.lead_source) IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_pais_lead
    'soel_pais_lead'                                 => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND TRIM(leads_cstm.pais_c) IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_departamento_lead
    'soel_departamento_lead'                         => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND TRIM(leads_cstm.departamento_c) IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_ciudad_lead
    'soel_ciudad_lead'                               => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND TRIM(leads_cstm.ciudad_c) IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_ciudad_tmp
    'soel_ciudad_tmp'                               => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND TRIM(leads_cstm.ciudad_tmp_c) IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_visa_lead
    'soel_visa_lead'                                 => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND TRIM(leads_cstm.visa_c) LIKE  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_pasaporte_lead
    'soel_pasaporte_lead'                                 => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND TRIM(leads_cstm.pasaporte_c) LIKE  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_asignado_lead
    'soel_asignado_lead'                             => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN users asignado ON asignado.id = leads.assigned_user_id AND asignado.deleted = 0
                         WHERE leads.deleted = 0 AND asignado.id IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_campana_lead
    'soel_campana_lead'                              => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN campaigns ON campaigns.id = leads.campaign_id AND campaigns.deleted = 0
                         WHERE leads.deleted = 0 AND campaigns.id IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_convertido_lead
    'soel_convertido_lead'                             => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND leads.converted IN  (\'{0}\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_home_phone_contact
    'soel_home_phone_contact'                        =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 AND TRIM(UPPER(contacts.phone_home)) LIKE  \'{0}\'',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_mobile_phone_contact
    'soel_mobile_phone_contact'                      =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 AND TRIM(UPPER(contacts.phone_mobile)) LIKE  \'{0}\'',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_fuente_contact
    'soel_fuente_contact'                            =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 AND TRIM(contacts.lead_source) IN  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_pais_contact
    'soel_pais_contact'                              =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 AND TRIM(contacts_cstm.pais_c) IN  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_departamento_contact
    'soel_departamento_contact'                      =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 AND TRIM(contacts_cstm.departamento_c) IN  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_ciudad_contact
    'soel_ciudad_contact'                            =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 AND TRIM(contacts_cstm.ciudad_c) IN  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_asignado_contact
    'soel_asignado_contact'                          =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN users asignado ON asignado.id = contacts.assigned_user_id AND asignado.deleted = 0
                         WHERE contacts.deleted = 0 AND asignado.id IN  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_visa_contact
    'soel_visa_contact'                              =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 AND TRIM(contacts_cstm.visa_c) LIKE  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_campana_contact
    'soel_campana_contact'                           =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN campaigns ON campaigns.id = contacts.campaign_id AND campaigns.deleted = 0
                         WHERE contacts.deleted = 0 AND campaigns.id IN  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_oficina_comercial
    'soel_oficina_comercial'                         =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN users ON users.id = veta_requerimiento.assigned_user_id 
                            WHERE users.deleted = 0 AND users.address_city IN  (\'{0}\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region date_entered
    'range_date_entered'                             => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'start_range_date_entered'                       => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_date_entered'                         => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    //endregion

    //region date_modified
    'range_date_modified'                            => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'start_range_date_modified'                      => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_date_modified'                        => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    //endregion

    //region fecha_viaje
    'range_fecha_viaje'                            => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'start_range_fecha_viaje'                      => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_fecha_viaje'                        => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    //endregion

    //region fecha_proximo_contacto
    'range_fecha_proximo_contacto'                            => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'start_range_fecha_proximo_contacto'                      => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_fecha_proximo_contacto'                        => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    //endregion

    //region fecha_ultimo_contacto
    'range_fecha_ultimo_contacto'                            => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'start_range_fecha_ultimo_contacto'                      => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_fecha_ultimo_contacto'                        => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    //endregion

    //region fecha_primer_presupuesto
    'range_fecha_primer_presupuesto'                            => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'start_range_fecha_primer_presupuesto'                      => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_fecha_primer_presupuesto'                        => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    //endregion

    //region soel_fecha_expiracion_visa_lead
    'range_soel_fecha_expiracion_visa_lead'          => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND leads_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') AND leads_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
        'db_field'   => array( 0 => 'id', ),

    ),
    'start_range_soel_fecha_expiracion_visa_lead'    => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND leads_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
        'db_field'   => array( 0 => 'id', ),

    ),
    'end_range_soel_fecha_expiracion_visa_lead'      => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                            INNER JOIN leads_cstm ON leads_cstm.id_c = leads.id
                         WHERE leads.deleted = 0 AND leads_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
        'db_field'   => array( 0 => 'id', ),

    ),
    //endregion

    //region soel_fecha_modificacion_lead
    'range_soel_fecha_modificacion_lead'             => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND leads.date_modified >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') AND leads.date_modified <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    'start_range_soel_fecha_modificacion_lead'       => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND leads.date_modified >= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    'end_range_soel_fecha_modificacion_lead'         => array(
        'query_type' => 'format',
        'operator'   => 'subquery',
        'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_leads_c ON veta_requerimiento_leads_c.veta_requerimiento_leadsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_leads_c.deleted = 0 
                            INNER JOIN leads ON leads.id = veta_requerimiento_leads_c.veta_requerimiento_leadsleads_ida
                         WHERE leads.deleted = 0 AND leads.date_modified <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
        'db_field'   => array( 0 => 'id', ),
    ),
    //endregion

    //region soel_fecha_expiracion_visa_contact
    'range_soel_fecha_expiracion_visa_contact'       =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 AND contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') AND contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),

        ),
    'start_range_soel_fecha_expiracion_visa_contact' =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 AND contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
            'db_field'   => array( 0 => 'id', ),

        ),
    'end_range_soel_fecha_expiracion_visa_contact'   =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                            INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                         WHERE contacts.deleted = 0 AND contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion

    //region soel_fecha_modificacion_contact
    'range_soel_fecha_modificacion_contact'          =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 AND contacts.date_modified >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') AND contacts.date_modified <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    'start_range_soel_fecha_modificacion_contact'    =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 AND contacts.date_modified >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    'end_range_soel_fecha_modificacion_contact'      =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_requerimiento.id AS ID FROM veta_requerimiento
                            INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                            INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida
                         WHERE contacts.deleted = 0 AND contacts.date_modified <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    //endregion
);