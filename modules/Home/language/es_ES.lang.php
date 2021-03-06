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
    'LBL_MODULE_NAME' => 'Inicio',
    'LBL_NEW_FORM_TITLE' => 'Nuevo Contacto',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_LAST_NAME' => 'Apellidos:',
    'LBL_LIST_LAST_NAME' => 'Apellidos',
    'LBL_PHONE' => 'Tel??fono:',
    'LBL_EMAIL_ADDRESS' => 'Correo electr??nico:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mi Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Proceso por Etapa de Ventas',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Proceso por Etapa de Ventas',
    'LNK_NEW_CONTACT' => 'Nuevo Contacto',
    'LNK_NEW_ACCOUNT' => 'Crear una cuenta',
    'LNK_NEW_OPPORTUNITY' => 'Nueva Oportunidad',
    'LNK_NEW_LEAD' => 'Nuevo Cliente Potencial',
    'LNK_NEW_CASE' => 'Nuevo Caso',
    'LNK_NEW_NOTE' => 'Nueva Nota o Archivo Adjunto',
    'LNK_NEW_CALL' => 'Registrar Llamada',
    'LNK_NEW_EMAIL' => 'Archivar Email',
    'LNK_NEW_MEETING' => 'Programar Reuni??n',
    'LNK_NEW_TASK' => 'Nueva Tarea',
    'LNK_NEW_BUG' => 'Informar de Incidencia',
    'LBL_ADD_BUSINESSCARD' => 'Nueva Tarjeta de Visita',
    'LNK_NEW_SEND_EMAIL' => 'Redactar Email',
    'LBL_NO_ACCESS' => 'No tiene acceso a esta ??rea. Contacte con el Administrador de su sitio para obtenerlo.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Sin Resultados --',
    'LBL_NO_RESULTS' => '<h2>No se han encontrado resultados. Por favor, realice una nueva b??squeda.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Trucos para la B??squeda:</h3><ul><li>Aseg??rese que ha seleccionado las categor??as adecuadas m??s arriba.</li><li>Ampl??e sus criterios de b??squeda.</li><li>Si aun as?? no obtiene resultados, pruebe con la opci??n de b??squeda avanzada.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Agregar SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Sitio Web',
    'LBL_RSS_TITLE' => 'Fuente de Noticias',
    'LBL_CLOSE_DASHLETS' => 'Cerrar',
    'LBL_OPTIONS' => 'Opciones',
    // dashlet search fields
    'LBL_TODAY' => 'Hoy',
    'LBL_YESTERDAY' => 'Ayer',
    'LBL_TOMORROW' => 'Ma??ana',
    'LBL_NEXT_WEEK' => 'La Pr??xima Semana',
    'LBL_LAST_7_DAYS' => '??ltimos 7 D??as',
    'LBL_NEXT_7_DAYS' => 'Siguientes 7 D??as',
    'LBL_LAST_MONTH' => '??ltimo Mes',
    'LBL_NEXT_MONTH' => 'Siguiente Mes',
    'LBL_LAST_YEAR' => '??ltimo A??o',
    'LBL_NEXT_YEAR' => 'Pr??ximo A??o',
    'LBL_LAST_30_DAYS' => '??ltimos 30 D??as',
    'LBL_NEXT_30_DAYS' => 'Pr??ximos 30 d??as',
    'LBL_THIS_MONTH' => 'Este Mes',
    'LBL_THIS_YEAR' => 'Este A??o',

    'LBL_MODULES' => 'M??dulos',
    'LBL_CHARTS' => 'Gr??ficos',
    'LBL_TOOLS' => 'Herramientas',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Resultados de B??squeda',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Vistas del M??dulo',
        'Portal' => 'Portal',
        'Charts' => 'Gr??ficos',
        'Tools' => 'Herramientas',
        'Miscellaneous' => 'Varios'
    ),
    'LBL_ADDING_DASHLET' => 'Agregando SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Agregado',
    'LBL_REMOVE_DASHLET_CONFIRM' => '??Est?? seguro de que desea quitar el SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Quitando SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Quitado',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'S??lo Mis Elementos',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'T??tulo',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Mostrar Filas',

    'LBL_DASHLET_DELETE' => 'Eliminar SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Actualizar SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Editar SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Mi CRM',
    'LBL_CLOSE_SITEMAP' => 'Cerrar',

    'LBL_SEARCH' => 'Buscar',
    'LBL_CLEAR' => 'Limpiar',

    'LBL_BASIC_CHARTS' => 'Gr??ficos B??sicos',

    'LBL_DASHLET_SEARCH' => 'Buscar SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Versi??n',
    'LBL_BUILD' => 'Compilaci??n',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - proveedores de framework CE',

    'LBL_DASHLET_TITLE' => 'Mis Sitios',
    'LBL_DASHLET_OPT_TITLE' => 'T??tulo',
    'LBL_DASHLET_INCORRECT_URL' => 'Ubicaci??n de sitio web incorrecto',
    'LBL_DASHLET_OPT_URL' => 'Direcci??n de Sitio Web',
    'LBL_DASHLET_OPT_HEIGHT' => 'Altura de Dashlet (en p??xeles)',
    'LBL_DASHLET_SUITE_NEWS' => 'Noticias sobre SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Descubra SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Filtro r??pido' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icono de inicio',
    'LBL_TOUR_HOME_DESCRIPTION' => 'R??pidamente vuelve al dashboard de p??gina de inicio con un solo clic.',
    'LBL_TOUR_MODULES' => 'M??dulos',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Todos los m??dulos importantes est??n aqu??.',
    'LBL_TOUR_MORE' => 'M??s m??dulos',
    'LBL_TOUR_MORE_DESCRIPTION' => 'El resto de sus m??dulos est?? aqu??.',
    'LBL_TOUR_SEARCH' => 'B??squeda Full-Text',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'La b??squeda es ahora mucho mejor.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificaciones',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notificaciones de la aplicaci??n de SuiteCRM van aqu??.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Perfil de acceso, ajustes y cierre de sesi??n.',
    'LBL_TOUR_QUICKCREATE' => 'Creaci??n r??pida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Crear registros r??pidamente sin perder su lugar.',
    'LBL_TOUR_FOOTER' => 'P??e de p??gina expandible',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'F??cilmente expande y contrae el p??e de p??gina.',
    'LBL_TOUR_CUSTOM' => 'Aplicaciones personalizadas',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Integraciones especiales van aqu??.',
    'LBL_TOUR_BRAND' => 'Su marca',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Aqu?? va tu logo. Puedes mover el cursor encima para m??s informaci??n.',
    'LBL_TOUR_WELCOME' => 'Bienvenido a SuiteCRM',
    'LBL_TOUR_WATCH' => 'Ver novedades en SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nueva y simplificada barra de navegaci??n</li><li class="icon-ok">Nuevo pie de p??gina expandible</li><li class="icon-ok">B??squeda opotimizada</li><li class="icon-ok">Acciones de men?? actualizadas</li></ul><p>y mucho m??s</p>',
    'LBL_TOUR_VISIT' => 'Para m??s informaci??n por favor visite nuestra aplicaci??n',
    'LBL_TOUR_DONE' => '??Listo!',
    'LBL_TOUR_REFERENCE_1' => 'Siempre puedes consultar nuestra',
    'LBL_TOUR_REFERENCE_2' => 'a trav??s del enlace de "Foro de apoyo" en la pesta??a perfil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentaci??n',
    'LBL_TOUR_CALENDAR_URL_1' => '??Compartir tu calendario de SuiteCRM con aplicaciones de terceros, como Microsoft Outlook o Exchange? Si es as??, tienes una nueva direcci??n URL. Esta URL nueva y m??s segura incluye una clave personal que evitar?? la publicaci??n no autorizada de tu calendario.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Recuperar la nueva URL del calendario compartido.',
    'LBL_CONTRIBUTORS' => 'Contribuidores',
    'LBL_ABOUT_SUITE' => 'Acerca de SuiteCRM',
    'LBL_PARTNERS' => 'Socios',
    'LBL_FEATURING' => 'Los m??dulos de AOS, AOW, AOR, AOP, AOE y Replanificaci??n son de SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM de Fuentes Abiertas para el mundo',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite por Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps por Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO provisto por Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribuci??n a la versi??n 7.3 de SuiteCRM por ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Campos calculados de flujo de trabajo aportados por diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Sobre las traducciones de SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Traducci??n en colaboraci??n por la comunidad de SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Traducci??n creada usando Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM es publicado bajo licencia open source - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Todo el c??digo de SuiteCRM desarrollado y administrado por el proyecto ser?? lanzado como open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'El soporte sobre SuiteCRM est?? disponible tanto de forma gratuita como paga',

    'LBL_SUITE_PARTNERS' => 'Tenemos leales partners de SuiteCRM entusiastas del open source. Para ver nuestra lista completa de partners, vea nuestro website.',

    'LBL_SAVE_BUTTON' => 'Guardar',
    'LBL_DELETE_BUTTON' => 'Eliminar',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Guardar y Enviar Invitaciones',
    'LBL_CANCEL_BUTTON' => 'Cancelar',
    'LBL_CLOSE_BUTTON' => 'Cierre',

    'LBL_CREATE_NEW_RECORD' => 'Crear Actividad',
    'LBL_CREATE_CALL' => 'Registrar Llamada',
    'LBL_CREATE_MEETING' => 'Programar Reuni??n',

    'LBL_GENERAL_TAB' => 'Detalles',
    'LBL_PARTICIPANTS_TAB' => 'Asistentes',
    'LBL_REPEAT_TAB' => 'Repetir',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'Intervalo',
    'LBL_REPEAT_END' => 'Fin',
    'LBL_REPEAT_END_AFTER' => 'Despu??s de',
    'LBL_REPEAT_OCCURRENCES' => 'Ocurrencias',
    'LBL_REPEAT_END_BY' => 'Por',
    'LBL_REPEAT_DOW' => 'En',
    'LBL_REPEAT_UNTIL' => 'Repetir Hasta',
    'LBL_REPEAT_COUNT' => 'N??mero de ocurrencias',
    'LBL_REPEAT_LIMIT_ERROR' => 'Tu solicitud iba a crear m??s  de $limit reuniones.',

    //Events
    'LNK_EVENT' => 'Evento',
    'LNK_EVENT_VIEW' => 'Ver Evento',
    'LBL_DATE' => 'Fecha: ',
    'LBL_DURATION' => 'Duraci??n: ',
    'LBL_NAME' => 'T??tulo: ',
    'LBL_HOUR_ABBREV' => 'hora',
    'LBL_HOURS_ABBREV' => 'horas',
    'LBL_MINSS_ABBREV' => 'minutos',
    'LBL_LOCATION' => 'Lugar:',
    'LBL_STATUS' => 'Estado:',
    'LBL_DESCRIPTION' => 'Descripci??n:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Se ha producido un error al realizar la b??squeda. La sintaxis de su consulta podr??a no ser v??lida.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'No se puede encontrar el motor de b??squeda solicitado. Intente realizar la b??squeda de nuevo.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Error al conectar al servidor Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Se ha producido un error interno en la B??squeda.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Se ha producido un error desconocido al realizar la b??squeda.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contacte con un administrador si el problema persiste. M??s informaci??n disponible en los registros.'
);
