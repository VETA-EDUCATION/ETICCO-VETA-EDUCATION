<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Fvisar, Boston, MA
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
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if ( ! defined( 'sugarEntry' ) || ! sugarEntry )
{
    die( 'Not A Valid Entry Point' );
}

global $current_user;
$dateformat = $current_user->getPreference( 'datef' );
$parts      = array( 'm',
                     'd',
                     'Y'
);
$dateformat = str_replace( 'm', '%m', $dateformat );
$dateformat = str_replace( 'd', '%d', $dateformat );
$dateformat = str_replace( 'Y', '%Y', $dateformat );

$module_name = 'Veta_Visa';

$searchFields[ $module_name ] = array(
    'name'                                       => array( 'query_type' => 'default' ),
    'current_user_only'                          => array( 'query_type' => 'default',
                                                           'db_field'   => array( 'assigned_user_id' ),
                                                           'my_items'   => true,
                                                           'vname'      => 'LBL_CURRENT_USER_FILTER',
                                                           'type'       => 'bool'
    ),
    'assigned_user_id'                           => array( 'query_type' => 'default' ),

    #region date_entered
    'range_date_entered'                         => array( 'query_type'          => 'default',
                                                           'enable_range_search' => true,
                                                           'is_date_field'       => true
    ),
    'start_range_date_entered'                   => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_date_entered'                     => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    #endregion

    #region date_modified
    'range_date_modified'                        => array( 'query_type'          => 'default',
                                                           'enable_range_search' => true,
                                                           'is_date_field'       => true
    ),
    'start_range_date_modified'                  => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    'end_range_date_modified'                    => array(
        'query_type'          => 'default',
        'enable_range_search' => true,
        'is_date_field'       => true
    ),
    #endregion

    #region soel_fecha_viaje
    'range_soel_fecha_viaje'                     =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_visa.id AS ID FROM veta_visa
                             INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida 
                             INNER JOIN veta_serviciocliente ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id  AND veta_visa_veta_serviciocliente_c.deleted = 0
                             INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             WHERE veta_visa.deleted = 0 AND veta_requerimiento.fecha_viaje >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and veta_requerimiento.fecha_viaje <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    'start_range_soel_fecha_viaje'               =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_visa.id AS ID FROM veta_visa
                             INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida 
                             INNER JOIN veta_serviciocliente ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id AND veta_visa_veta_serviciocliente_c.deleted = 0
                             INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             WHERE veta_visa.deleted = 0 AND veta_requerimiento.fecha_viaje >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    'end_range_soel_fecha_viaje'                 =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_visa.id AS ID FROM veta_visa
                             INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida 
                             INNER JOIN veta_serviciocliente ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id AND veta_visa_veta_serviciocliente_c.deleted = 0
                             INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             WHERE veta_visa.deleted = 0 AND veta_requerimiento.fecha_viaje <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    #endregion

    #region soel_referido
    'soel_referido'                              =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_visa.id AS ID FROM veta_visa
                             INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida 
                             INNER JOIN veta_serviciocliente ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id  AND veta_visa_veta_serviciocliente_c.deleted = 0
                             INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0  
                            INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                            INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                            INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                            INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                            INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida 
                         WHERE veta_requerimiento.deleted = 0 AND TRIM(veta_requerimiento.referido) LIKE  (\'{0}\')',
            'db_field'   =>
                array(
                    0 => 'id',
                ),
        ),
    #endregion

    #region soel_fecha_expiracion_visa
    'range_soel_fecha_expiracion_visa'           =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_visa.id AS ID FROM veta_visa
                             INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida 
                             INNER JOIN veta_serviciocliente ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id  AND veta_visa_veta_serviciocliente_c.deleted = 0
                             INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                             INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida AND contacts.deleted = 0 
                             INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                             WHERE contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\') and contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),

        ),
    'start_range_soel_fecha_expiracion_visa'     =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_visa.id AS ID FROM veta_visa
                             INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida 
                             INNER JOIN veta_serviciocliente ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id  AND veta_visa_veta_serviciocliente_c.deleted = 0
                             INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                             INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida AND contacts.deleted = 0 
                             INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id
                             WHERE contacts_cstm.fecha_expiracion_visa_c >=  CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 00:00:00\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    'end_range_soel_fecha_expiracion_visa'       =>
        array(
            'query_type' => 'format',
            'operator'   => 'subquery',
            'subquery'   => 'SELECT veta_visa.id AS ID FROM veta_visa
                             INNER JOIN veta_visa_veta_serviciocliente_c ON veta_visa.id = veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_visa_ida 
                             INNER JOIN veta_serviciocliente ON veta_visa_veta_serviciocliente_c.veta_visa_veta_servicioclienteveta_serviciocliente_idb = veta_serviciocliente.id  AND veta_visa_veta_serviciocliente_c.deleted = 0
                             INNER JOIN veta_serviciocliente_opportunities_c ON veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesveta_serviciocliente_idb = veta_serviciocliente.id AND veta_serviciocliente_opportunities_c.deleted = 0  
                             INNER JOIN opportunities ON opportunities.id = veta_serviciocliente_opportunities_c.veta_serviciocliente_opportunitiesopportunities_ida AND opportunities.deleted = 0 
                             INNER JOIN veta_recibo_opportunities_c ON veta_recibo_opportunities_c.veta_recibo_opportunitiesopportunities_idb = opportunities.id AND veta_recibo_opportunities_c.deleted = 0 
                             INNER JOIN veta_recibo ON veta_recibo.id = veta_recibo_opportunities_c.veta_recibo_opportunitiesveta_recibo_ida
                             INNER JOIN veta_requerimiento_veta_recibo_c ON veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_recibo_idb = veta_recibo.id 
                             INNER JOIN veta_requerimiento ON veta_requerimiento.id = veta_requerimiento_veta_recibo_c.veta_requerimiento_veta_reciboveta_requerimiento_ida AND veta_requerimiento.deleted = 0 
                             INNER JOIN veta_requerimiento_contacts_c ON veta_requerimiento_contacts_c.veta_requerimiento_contactsveta_requerimiento_idb = veta_requerimiento.id AND veta_requerimiento_contacts_c.deleted = 0 
                             INNER JOIN contacts ON contacts.id = veta_requerimiento_contacts_c.veta_requerimiento_contactscontacts_ida AND contacts.deleted = 0 
                             INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id 
                             WHERE contacts_cstm.fecha_expiracion_visa_c <= CONCAT(STR_TO_DATE(\'{0}\', \'' . $dateformat . '\') , \' 23:59:59\')',
            'db_field'   => array( 0 => 'id', ),
        ),
    #endregion

    #region fecha_aplicacion
    'range_fecha_aplicacion'                     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_aplicacion'               =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_aplicacion'                 =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_pago
    'range_fecha_pago'                           =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_pago'                     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_pago'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_otorgada
    'range_fecha_otorgada'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_otorgada'                 =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_otorgada'                   =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_firma_acta
    'range_fecha_firma_acta'                     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_firma_acta'               =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_firma_acta'                 =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_examenes_medicos
    'range_fecha_examenes_medicos'               =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_examenes_medicos'         =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_examenes_medicos'           =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_avac
    'range_fecha_avac'                           =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_avac'                     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_avac'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_exp_req1
    'range_fecha_exp_req1'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_exp_req1'                 =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_exp_req1'                   =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_exp_req2
    'range_fecha_exp_req2'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_exp_req2'                 =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_exp_req2'                   =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_exp_req3
    'range_fecha_exp_req3'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_exp_req3'                 =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_exp_req3'                   =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_expiracion_requerimiento
    'range_fecha_expiracion_requerimiento'       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_expiracion_requerimiento' =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_expiracion_requerimiento'   =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_recibido
    'range_fecha_recibido'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_recibido'                 =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_recibido'                   =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_req1
    'range_fecha_req1'                           =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_req1'                     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_req1'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_req2
    'range_fecha_req2'                           =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_req2'                     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_req2'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_req_3
    'range_fecha_req3'                           =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_req3'                     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_req3'                       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_ultimo_requerimiento
    'range_fecha_ultimo_requerimiento'           =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_ultimo_requerimiento'     =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_ultimo_requerimiento'       =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    #endregion

    #region fecha_requerimiento

    'range_fecha_requerimiento'                  =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'start_range_fecha_requerimiento'            =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),
    'end_range_fecha_requerimiento'              =>
        array(
            'query_type'          => 'default',
            'enable_range_search' => true,
            'is_date_field'       => true,
        ),

    #endregion

);
