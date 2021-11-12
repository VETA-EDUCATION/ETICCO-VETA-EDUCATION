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

$dictionary['Veta_Recibo'] = array(
    'table' => 'veta_recibo',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => false,
    'full_text_search' => 
    array (
      'boost' => 3,
    ),
    'required' => true,
    'importable' => 'required',
    'duplicate_merge' => 'disabled',
    'merge_filter' => 'disabled',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'size' => '20',
  ),
  'pais' => 
  array (
    'required' => true,
    'name' => 'pais',
    'vname' => 'LBL_PAIS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'Colombia',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'pais_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'departamento' => 
  array (
    'required' => true,
    'name' => 'departamento',
    'vname' => 'LBL_DEPARTAMENTO',
    'type' => 'dynamicenum',
    'massupdate' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'document_status_dom',
    'studio' => 'visible',
    'dbType' => 'enum',
    'parentenum' => 'pais',
  ),
  'ciudad' => 
  array (
    'required' => true,
    'name' => 'ciudad',
    'vname' => 'LBL_CIUDAD',
    'type' => 'dynamicenum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ciudades_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'parentenum' => 'departamento',
  ),
  'primer_pago' => 
  array (
    'required' => true,
    'name' => 'primer_pago',
    'vname' => 'LBL_PRIMER_PAGO',
    'type' => 'currency',
    'massupdate' => 0,
    'default' => 0.0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
  ),
  'currency_id' => 
  array (
    'required' => false,
    'name' => 'currency_id',
    'vname' => 'LBL_CURRENCY',
    'type' => 'currency_id',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 36,
    'size' => '20',
    'dbType' => 'id',
    'studio' => 'visible',
    'function' => 
    array (
      'name' => 'getCurrencyDropDown',
      'returns' => 'html',
    ),
  ),
  'subtotal' => 
  array (
    'required' => true,
    'name' => 'subtotal',
    'vname' => 'LBL_SUBTOTAL',
    'type' => 'currency',
    'massupdate' => 0,
    'default' => 0.0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
  ),
  'gran_total' => 
  array (
    'required' => true,
    'name' => 'gran_total',
    'vname' => 'LBL_GRAN_TOTAL',
    'type' => 'currency',
    'massupdate' => 0,
    'default' => 0.0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
  ),
  'pendiente_por_pagar' => 
  array (
    'required' => true,
    'name' => 'pendiente_por_pagar',
    'vname' => 'LBL_PENDIENTE_POR_PAGAR',
    'type' => 'currency',
    'massupdate' => 0,
    'default' => 0.0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
  ),
  'pagado' => 
  array (
    'required' => true,
    'name' => 'pagado',
    'vname' => 'LBL_PAGADO',
    'type' => 'currency',
    'massupdate' => 0,
    'default' => 0.0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
  ),
  'estado' => 
  array (
    'required' => true,
    'name' => 'estado',
    'vname' => 'LBL_ESTADO',
    'type' => 'enum',
    'massupdate' => '1',
    'default' => 'Nuevo',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => '',
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'estado_recibo_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('Veta_Recibo', 'Veta_Recibo', array('basic','assignable','security_groups'));