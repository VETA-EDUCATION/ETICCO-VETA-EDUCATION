<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Id de usuario asignado',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Fecha de Creación',
    'LBL_DATE_MODIFIED' => 'Fecha de Modificación',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado Por Name',
    'LBL_CREATED' => 'Creado Por',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Título',
    'LBL_CREATED_USER' => 'Creado por el Usuario',
    'LBL_MODIFIED_USER' => 'Modificado por el Usuario',
    'ERR_DELETE_RECORD' => 'Debe especificar un registro para borrarlo de la cuenta.',
    'LBL_ACCOUNT_NAME' => 'Título',
    'LBL_ACCOUNT' => 'Compañía:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_ADDRESS_INFORMATION' => 'Información de Dirección',
    'LBL_ANNUAL_REVENUE' => 'Ingreso Anual:',
    'LBL_ANY_ADDRESS' => 'Cualquier Dirección:',
    'LBL_ANY_EMAIL' => 'Cualquier Correo:',
    'LBL_ANY_PHONE' => 'Cualquier Teléfono:',
    'LBL_RATING' => 'Clasificación',
    'LBL_ASSIGNED_USER' => 'Usuario',
    'LBL_BILLING_ADDRESS_CITY' => 'Ciudad de Facturación:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'País de Facturación:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Código Postal de Facturación:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado de Facturación:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Calle de Facturación 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Calle de Facturación 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Calle de Facturación 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Calle de Facturación:',
    'LBL_BILLING_ADDRESS' => 'Dirección de Facturación:',
    'LBL_ACCOUNT_INFORMATION' => 'Visión Global',
    'LBL_CITY' => 'Ciudad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_COUNTRY' => 'País:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_DUPLICATE' => 'Posible cuenta duplicada',
    'LBL_EMAIL' => 'Correo:',
    'LBL_EMPLOYEES' => 'Empleados:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industria:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre de Cuenta',
    'LBL_LIST_CITY' => 'Ciudad',
    'LBL_LIST_EMAIL_ADDRESS' => 'Dirección de Email',
    'LBL_LIST_PHONE' => 'Teléfono',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Miembro de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Miembro de Organizaciones',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Otro Email:',
    'LBL_OTHER_PHONE' => 'Otro Teléfono:',
    'LBL_OWNERSHIP' => 'Propiedad:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID de cuenta Matriz',
    'LBL_PHONE_ALT' => 'Teléfono Alternativo:',
    'LBL_PHONE_FAX' => 'Teléfono de Fax:',
    'LBL_PHONE_OFFICE' => 'Teléfono de Oficina:',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_POSTAL_CODE' => 'Código Postal:',
    'LBL_SAVE_ACCOUNT' => 'Guardar Cuenta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad de Envío:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de Envío:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Código Postal de Envío:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estado de Envío:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Calle de Envío 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Calle de Envío 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Calle de Envío 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Calle de Envío:',
    'LBL_SHIPPING_ADDRESS' => 'Calle de Envío:',
    'LBL_STATE' => 'Estado o región:', //For address fields
    'LBL_TICKER_SYMBOL' => 'Símbolo Grueso:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Sitio Web:',
    'LNK_ACCOUNT_LIST' => 'Cuentas',
    'LNK_NEW_ACCOUNT' => 'Crear una cuenta',
    'MSG_DUPLICATE' => 'Crear esta cuenta puede potencialmente crear un duplicado. Usted puede seleccionar una cuenta de la lista de abajo o puede dar click en Guardar para continuar creando una nueva cuenta con la información previamente ingresada.',
    'MSG_SHOW_DUPLICATES' => 'Crear esta cuenta puede potencialmente crear un duplicado. Usted puede dar click en Guardar para continuar creando una nueva cuenta con la información previamente ingresada o usted puede dar click en Cancelar.',
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro que quiere eliminar este registro?',
    'LBL_LIST_FORM_TITLE' => 'Lista de Cotizaciones',
    'LBL_MODULE_NAME' => 'Presupuestos',
    'LBL_MODULE_TITLE' => 'Cotizaciones: Inicio',
    'LBL_HOMEPAGE_TITLE' => 'Mis Cotizaciones',
    'LNK_NEW_RECORD' => 'Crear Cotización',
    'LNK_LIST' => 'Ver Cotizaciones',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar Cotizaciones',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Historial',
    'LBL_NEW_FORM_TITLE' => 'Nueva Cotización',
    'LBL_TERMS_C' => 'Terminos',
    'LBL_APPROVAL_ISSUE' => 'Incidencias de Aprobación',
    'LBL_APPROVAL_STATUS' => 'Estatus de Aprobación',
    'LBL_BILLING_ACCOUNT' => 'Cuenta',
    'LBL_BILLING_CONTACT' => 'Contacto',
    'LBL_EXPIRATION' => 'Válida Hasta',
    'LBL_QUOTE_NUMBER' => 'Número de Cotización',
    'LBL_OPPORTUNITY' => 'Oportunidad',
    'LBL_TEMPLATE_DDOWN_C' => 'Formatos de Cotización',
    'LBL_STAGE' => 'Etapa de Cotización',
    'LBL_TERM' => 'Términos de Pago',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Descuento',
    'LBL_TAX_AMOUNT' => 'Impuesto',
    'LBL_SHIPPING_AMOUNT' => 'Envío',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Título',
    'LBL_EMAIL_ADDRESSES' => 'Direcciones de Email',
    'LBL_LINE_ITEMS' => 'Items de Línea',
    'LBL_GRAND_TOTAL' => 'Gran Total',
    'LBL_INVOICE_STATUS' => 'Estatus de la Factura',
    'LBL_PRODUCT_QUANITY' => 'Cantidad',
    'LBL_PRODUCT_NAME' => 'Producto',
    'LBL_PRODUCT_NUMBER' => 'Número', // PR 3296
    'LBL_PART_NUMBER' => 'Número de Parte',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descripción',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Descuento',
    'LBL_UNIT_PRICE' => 'Unidad',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Iva', // VAT
    'LBL_VAT_AMT' => 'Cantidad de Iva', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Agregar Línea de Producto',
    'LBL_SERVICE_NAME' => 'Servicio',
    'LBL_SERVICE_NUMBER' => 'Número', // PR 3296
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Precio',
    'LBL_SERVICE_DISCOUNT' => 'Descuento',
    'LBL_ADD_SERVICE_LINE' => 'Agregar Línea de Servicio',
    'LBL_REMOVE_PRODUCT_LINE' => 'Quitar',
    'LBL_CONVERT_TO_INVOICE' => 'Convertir a Factura',
    'LBL_PRINT_AS_PDF' => 'Imprimir como PDF',
    'LBL_EMAIL_QUOTE' => 'Enviar Cotización por Email',
    'LBL_CREATE_CONTRACT' => 'Crear Contrato',
    'LBL_LIST_NUM' => 'No.',
    'LBL_PDF_NAME' => 'Cotización',
    'LBL_EMAIL_NAME' => 'Cotización Para',
    'LBL_QUOTE_DATE' => 'Fecha de Cotización',
    'LBL_NO_TEMPLATE' => 'ERROR\nPor favor seleccione un formato editando la Cotización y seleccionando un formato de Cotización\nSi usted no ha creado un formato de Cotización, vaya al módulo de Formatos PDF y cree uno',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Impuestos',//pre shipping
    'LBL_EMAIL_PDF' => 'Enviar PDF por Email',
    'LBL_ADD_GROUP' => 'Agregar Grupo',
    'LBL_DELETE_GROUP' => 'Eliminar Grupo',
    'LBL_GROUP_NAME' => 'Nombre del Grupo',
    'LBL_GROUP_DESCRIPTION' => 'Descripción del grupo', // PR 3296
    'LBL_GROUP_TOTAL' => 'Total de Grupo',
    'LBL_SHIPPING_TAX' => 'Impuesto de Valor Agregado de Envío',
    'LBL_SHIPPING_TAX_AMT' => 'Impuesto de Envío',
    'LBL_IMPORT_LINE_ITEMS' => 'Importar Items de Línea',
    'LBL_CREATE_OPPORTUNITY' => 'Crear Oportunidad',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (moneda predeterminada)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Descuento (moneda predeterminada)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Impuestos (moneda predeterminada)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Envío (moneda predeterminada)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (moneda predeterminada)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Impuesto de envío (moneda predeterminada)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grupo Total (moneda predeterminada)',
    'LBL_QUOTE_TO' => 'Cotización Para',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + impuesto (moneda predeterminada)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Cotizaciones: Contratos',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Cotizaciones: facturas',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupos de Items de Línea',
    'LBL_AOS_PRODUCT_QUOTES' => 'Cotizaciones de productos',
    'LBL_AOS_QUOTES_PROJECT' => 'Cotizaciones: Projecto',
);