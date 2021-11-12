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
    'LBL_ALL_MODULES' => 'Todos',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Id de usuario asignado',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Fecha de Creación',
    'LBL_DATE_MODIFIED' => 'Fecha de Modificación',
    'LBL_MODIFIED' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado por Nombre',
    'LBL_CREATED' => 'Creado por',
    'LBL_DESCRIPTION' => 'Descripción',
    'LBL_DELETED' => 'Borrado',
    'LBL_NONINHERITABLE' => 'No heredable',
    'LBL_LIST_NONINHERITABLE' => 'No heredable',
    'LBL_NAME' => 'Nombre',
    'LBL_CREATED_USER' => 'Creado por el Usuario',
    'LBL_MODIFIED_USER' => 'Modificado por el Usuario',
    'LBL_LIST_FORM_TITLE' => 'Grupos de Seguridad',
    'LBL_MODULE_NAME' => 'Gestión de Seguridad',
    'LBL_MODULE_TITLE' => 'Gestión de Seguridad',
    'LNK_NEW_RECORD' => 'Crea un Grupo de Seguridad',
    'LNK_LIST' => 'Ver Lista',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar en Administración de Suite de Seguridad',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Gestión de Seguridad',
    'LBL_USERS' => 'Usuarios',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Roles',
    'LBL_ROLES' => 'Roles',

    'LBL_CONFIGURE_SETTINGS' => 'Configurar',
    'LBL_ADDITIVE' => 'Privilegios agregados',
    'LBL_ADDITIVE_DESC' => "El Usuario tiene los mayores privilegios de todos los roles y grupos asignados a el.",
    'LBL_STRICT_RIGHTS' => 'Privilegios terminante',
    'LBL_STRICT_RIGHTS_DESC' => "Si un usuario es un miembro de varios grupos solamente las derechas respectivas del grupo asignado al registro en curso se utilizan.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Precedencia del Rol de Usuario',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Si cualquier rol es asignado al usuario directamente, este tendra precedencia sobre cualquier rol de grupo.',
    'LBL_INHERIT_TITLE' => 'Reglas de herencia de Grupo',
    'LBL_INHERIT_CREATOR' => 'Hereda del Usuario que lo creo',
    'LBL_INHERIT_CREATOR_DESC' => 'El registro heredará todos los Grupos asignados a el usuario que lo creó.',
    'LBL_INHERIT_PARENT' => 'Hereda del registro padre',
    'LBL_INHERIT_PARENT_DESC' => 'Ej: Si un caso es creado por un contacto, el caso heredará el/los Grupo(s) asociados con el contacto.',
    'LBL_USER_POPUP' => 'Ventana de Nuevo Usuario de Grupo',
    'LBL_USER_POPUP_DESC' => 'Cuando se crea un nuevo Usuario, muestra una ventana de SecurityGroups para asignar el usuario a Grupo(s).',
    'LBL_INHERIT_ASSIGNED' => 'Heredar de Usuario asignado',
    'LBL_INHERIT_ASSIGNED_DESC' => 'El regisro heredará todos los grupos de el usuario asignado a el registro. Otros grupos asignados a el registro no serán removidos.',
    'LBL_POPUP_SELECT' => 'Utilice Creador Seleccionar grupo',
    'LBL_POPUP_SELECT_DESC' => 'Cuando un registro se crea por un usuario en más de un grupo muestran un panel de selección de grupos en la pantalla de creación. De lo contrario heredar ese grupo.',
    'LBL_FILTER_USER_LIST' => 'Lista de usuario del filtro',
    'LBL_FILTER_USER_LIST_DESC' => "Los usuarios No-admin pueden asignar solamente a los usuarios en los mismos grupo(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Grupo por defecto para nuevos registros',
    'LBL_ADD_BUTTON_LABEL' => 'Agregar',
    'LBL_REMOVE_BUTTON_LABEL' => 'Quitar',
    'LBL_GROUP' => 'Grupo:',
    'LBL_MODULE' => 'Modulo:',

    'LBL_MASS_ASSIGN' => 'Grupos de Seguridad: Asignación Masiva',
    'LBL_ASSIGN' => 'Asignar',
    'LBL_REMOVE' => 'Quitar',
    'LBL_ASSIGN_CONFIRM' => 'Está seguro que quiere agregar este Grupo de ',
    'LBL_REMOVE_CONFIRM' => 'Está seguro que quiere remover este Grupo de ',
    'LBL_CONFIRM_END' => ' registro(s) seleccionado(s)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'GrupoDeSeguridad/Usuario',
    'LBL_USER_NAME' => 'Nombre de Usuario',
    'LBL_SECURITYGROUP_NAME' => 'Nombre de Grupo de Seguridad',
    'LBL_HOMEPAGE_TITLE' => 'Mensajes del Grupo',
    'LBL_TITLE' => 'Titulo',
    'LBL_ROWS' => 'Filas',
    'LBL_POST' => 'Enviar',
    'LBL_SELECT_GROUP_ERROR' => 'Por favor seleccione un Grupo y vuelva a intentarlo.',

    'LBL_GROUP_SELECT' => 'Seleccionar los grupos deben tener acceso a este registro',
    'LBL_ERROR_DUPLICATE' => 'Debido a un posible duplicado detectado por SuiteCRM usted tendrá que agregar manualmente los grupos de seguridad de su registro recién creado.',

    'LBL_INBOUND_EMAIL' => 'Cuenta de correo electrónico entrante',
    'LBL_INBOUND_EMAIL_DESC' => 'Sólo permitir el acceso a una cuenta de correo electrónico si el usuario pertenece a un grupo que se asigna a la cuenta de correo.',
    'LBL_PRIMARY_GROUP' => 'Grupo Principal',
    'LBL_CHECKMARK' => 'Marca de Verificación',

);
