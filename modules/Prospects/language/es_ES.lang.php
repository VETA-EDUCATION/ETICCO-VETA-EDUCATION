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
    'LBL_MODULE_NAME' => 'P??blico Objetivo',
    'LBL_MODULE_ID' => 'P??blico Objetivo',
    'LBL_INVITEE' => 'Informa Directamente',
    'LBL_MODULE_TITLE' => 'P??blico Objetivo: Inicio',
    'LBL_SEARCH_FORM_TITLE' => 'B??squeda de P??blico Objetivo',
    'LBL_LIST_FORM_TITLE' => 'Lista de P??blico Objetivo',
    'LBL_NEW_FORM_TITLE' => 'Nuevo P??blico Objetivo',
    'LBL_BUSINESSCARD' => 'Tarjeta de Visita',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_LAST_NAME' => 'Apellidos',
    'LBL_LIST_TITLE' => 'Puesto de trabajo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Tel??fono',
    'LBL_LIST_FIRST_NAME' => 'Nombre',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ASSIGNED_TO_ID' => 'Asignado a:',
    'LBL_CAMPAIGN_ID' => 'ID Campa??a',
    'LBL_EXISTING_ACCOUNT' => 'Usada una cuenta existente',
    'LBL_CREATED_ACCOUNT' => 'Creada una nueva cuenta',
    'LBL_CREATED_CALL' => 'Nueva llamada creada',
    'LBL_CREATED_MEETING' => 'Nueva reuni??n creada',
    'LBL_ADDMORE_BUSINESSCARD' => 'A??adir otra tarjeta de visita',
    'LBL_ADD_BUSINESSCARD' => 'Introducir Tarjeta de Visita',
    'LBL_NAME' => 'Nombre:',
    'LBL_PROSPECT_INFORMATION' => 'Visi??n Global', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MORE_INFORMATION' => 'M??s Informaci??n',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_OFFICE_PHONE' => 'Tel. Oficina:',
    'LBL_ANY_PHONE' => 'Tel. Cualquiera:',
    'LBL_PHONE' => 'Tel??fono:',
    'LBL_LAST_NAME' => 'Apellidos:',
    'LBL_MOBILE_PHONE' => 'M??vil:',
    'LBL_HOME_PHONE' => 'Casa:',
    'LBL_OTHER_PHONE' => 'Tel. Alternativo:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Calle Direcci??n Principal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad Direcci??n Principal:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pa??s Direcci??n Principal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Provincia/Estado Direcci??n Principal:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'CP Direcci??n Principal:',
    'LBL_ALT_ADDRESS_STREET' => 'Calle Direcci??n Alternativa:',
    'LBL_ALT_ADDRESS_CITY' => 'Ciudad Direcci??n Alternativa:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Pa??s Direcci??n Alternativa:',
    'LBL_ALT_ADDRESS_STATE' => 'Provincia/Estado Direcci??n Alternativa:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'CP Direcci??n Alternativa:',
    'LBL_TITLE' => 'Puesto de trabajo:',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_BIRTHDATE' => 'Fecha de nacimiento:',
    'LBL_EMAIL_ADDRESS' => 'Correo electr??nico:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email alternativo:',
    'LBL_ANY_EMAIL' => 'Cualquier Correo:',
    'LBL_ASSISTANT' => 'Asistente:',
    'LBL_ASSISTANT_PHONE' => 'Tel. Asistente:',
    'LBL_DO_NOT_CALL' => 'No Llamar:',
    'LBL_EMAIL_OPT_OUT' => 'Rehusar Email:',
    'LBL_PRIMARY_ADDRESS' => 'Direcci??n Principal:',
    'LBL_ALTERNATE_ADDRESS' => 'Direcci??n Alternativa:',
    'LBL_ANY_ADDRESS' => 'Direcci??n Alternativa:',
    'LBL_CITY' => 'Ciudad:',
    'LBL_STATE' => 'Estado o regi??n:', //For address fields
    'LBL_POSTAL_CODE' => 'CP:',
    'LBL_COUNTRY' => 'Pa??s:',
    'LBL_ADDRESS_INFORMATION' => 'Informaci??n de Direcci??n',
    'LBL_DESCRIPTION' => 'Descripci??n:',
    'LBL_OPP_NAME' => 'Nombre de la oportunidad:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Crear un nuevo contacto autom??ticamente importando una vCard de su sistema de ficheros.',
    'LBL_DUPLICATE' => 'Posible P??blico Objetivo Duplicado',
    'MSG_SHOW_DUPLICATES' => 'El registro para el prospecto que va a crear podr??a ser un duplicado de otro registro de prospecto existente. Los registros de prospectos con nombres y/o direcciones de correo similares se listan a continuaci??n.<br>Haga clic en Guardar para continuar con la creaci??n de este prospecto, o en Cancelar para volver al m??dulo sin crear el prospecto.',
    'MSG_DUPLICATE' => 'El registro para el prospecto que va a crear podr??a ser un duplicado de otro registro de prospecto existente. Los registros de prospectos con nombres y/o direcciones de correo similares se listan a continuaci??n.<br>Haga clic en Guardar para continuar con la creaci??n de este prospecto, o en Cancelar para volver al m??dulo sin crear el prospecto.',
    'LNK_IMPORT_VCARD' => 'Crear desde vCard',
    'LNK_NEW_ACCOUNT' => 'Crear una cuenta',
    'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
    'LNK_NEW_CASE' => 'Crear Caso',
    'LNK_NEW_NOTE' => 'Crear Nota or Adjunto',
    'LNK_NEW_CALL' => 'Registrar Llamada',
    'LNK_NEW_EMAIL' => 'Archivar Email',
    'LNK_NEW_MEETING' => 'Planificar Reuni??n',
    'LNK_NEW_TASK' => 'Crear Tarea',
    'LNK_NEW_APPOINTMENT' => 'Crear Cita',
    'LNK_IMPORT_PROSPECTS' => 'Importar Prospectos',
    'NTC_DELETE_CONFIRMATION' => '??Est?? seguro de que desea eliminar este registro?',
    'NTC_REMOVE_CONFIRMATION' => '??Est?? seguro de que desea quitar este contacto del caso?',
    'ERR_DELETE_RECORD' => 'Debe especificar un n??mero de registro para eliminar el contacto.',
    'LBL_SALUTATION' => 'Saludo',
    'LBL_CREATED_OPPORTUNITY' => 'Nueva oportunidad creada',
    'LNK_SELECT_ACCOUNT' => "Seleccionar Cuenta",
    'LNK_NEW_PROSPECT' => 'Crear P??blico Objetivo',
    'LNK_PROSPECT_LIST' => 'Ver P??blico Objetivo',
    'LNK_NEW_CAMPAIGN' => 'Crear Campa??a',
    'LNK_CAMPAIGN_LIST' => 'Campa??as',
    'LNK_NEW_PROSPECT_LIST' => 'Crear Lista de P??blico Objetivo',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de P??blico Objetivo',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccione P??blico Objetivo Marcado',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccione P??blico Objetivo Marcado',
    'LBL_INVALID_EMAIL' => 'Email No V??lido:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'P??blico Objetivo',
    'LBL_PROSPECT_LIST' => 'P??blico Objetivo',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convertir P??blico Objetivo',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertir P??blico Objetivo',
    'LNK_NEW_CONTACT' => 'Nuevo Contacto',
    'LBL_CREATED_CONTACT' => "Nuevo contacto creado",
    'LBL_CAMPAIGNS' => 'Campa??as',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Registro de Campa??as',
    'LBL_TRACKER_KEY' => 'Clave de Seguimiento',
    'LBL_LEAD_ID' => 'Id Cliente Potencial',
    'LBL_CONVERTED_LEAD' => 'Cliente Potencial Convertido',
    'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nombre de Cuenta:',
    'LBL_CREATED_USER' => 'Usuario Creado',
    'LBL_MODIFIED_USER' => 'Usuario Modificado',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Eventos',
);
