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
$relationships = array (
  'veta_coe_veta_aplicacion' => 
  array (
    'rhs_label' => 'Aplicacion',
    'lhs_label' => 'COES',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'Veta_COE',
    'rhs_module' => 'Veta_Aplicacion',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'veta_coe_veta_aplicacion',
  ),
  'veta_coe_opportunities' => 
  array (
    'rhs_label' => 'Oportunidades',
    'lhs_label' => 'COES',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'Veta_COE',
    'rhs_module' => 'Opportunities',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'veta_coe_opportunities',
  ),
  'veta_coe_cases' => 
  array (
    'rhs_label' => 'Casos',
    'lhs_label' => 'COE',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Veta_COE',
    'rhs_module' => 'Cases',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'veta_coe_cases',
  ),
  'veta_coe_activities' => 
  array (
    'rhs_label' => 'Actividades',
    'lhs_label' => 'COE',
    'rhs_subpanel' => 'Por Defecto',
    'lhs_module' => 'Veta_COE',
    'rhs_module' => 'Activities',
    'relationship_type' => 'one-to-many',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'veta_coe_activities',
  ),
  'veta_coe_veta_liquidacion' => 
  array (
    'rhs_label' => 'Liquidacion',
    'lhs_label' => 'COE',
    'lhs_subpanel' => 'default',
    'lhs_module' => 'Veta_COE',
    'rhs_module' => 'Veta_Liquidacion',
    'relationship_type' => 'many-to-one',
    'readonly' => false,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
    'relationship_name' => 'veta_coe_veta_liquidacion',
  ),
);