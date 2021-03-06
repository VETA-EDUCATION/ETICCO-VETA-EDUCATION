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

$mod_strings = array(
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Procesar Tareas de Flujo de Trabajo',
    'LBL_OOTB_REPORTS' => 'Ejecutar Tareas Programadas de Generaci??n de Informes',
    'LBL_OOTB_IE' => 'Comprobar Bandejas de Entrada',
    'LBL_OOTB_BOUNCE' => 'Ejecutar Proceso Nocturno de Emails de Campa??a Rebotados',
    'LBL_OOTB_CAMPAIGN' => 'Ejecutar Proceso Nocturno de Campa??as de Email Masivo',
    'LBL_OOTB_PRUNE' => 'Truncar Base de datos al Inicio del Mes',
    'LBL_OOTB_TRACKER' => 'Truncar Tablas de Monitorizaci??n',
    'LBL_OOTB_SUGARFEEDS' => 'Limpiar las Tablas de SuiteCRM Feed',
    'LBL_OOTB_LUCENE_INDEX' => 'Realizar el ??ndice de Lucene',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimizar el ??ndice AOD',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Ejecutar Env??o de Emails de Recordatorios',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Limpiar Cola de Trabajos',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Extracci??n de documentos del sistema de archivos',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
    'LBL_LIST_LIST_ORDER' => 'Planificadores:',
    'LBL_LIST_NAME' => 'Planificador:',
    'LBL_LIST_RANGE' => 'Rango:',
    'LBL_LIST_STATUS' => 'Estado:',
    'LBL_LIST_TITLE' => 'Lista de Planificaci??n:',
// human readable:
    'LBL_SUN' => 'Domingo',
    'LBL_MON' => 'Lunes',
    'LBL_TUE' => 'Martes',
    'LBL_WED' => 'Mi??rcoles',
    'LBL_THU' => 'Jueves',
    'LBL_FRI' => 'Viernes',
    'LBL_SAT' => 'S??bado',
    'LBL_ALL' => 'Todos los d??as',
    'LBL_EVERY' => 'Cada ',
    'LBL_FROM' => 'Desde',
    'LBL_ON_THE' => 'En el',
    'LBL_RANGE' => 'a',
    'LBL_AND' => 'y',
    'LBL_MINUTES' => 'minutos',
    'LBL_HOUR' => 'horas',
    'LBL_HOUR_SING' => 'hora',
    'LBL_OFTEN' => 'Tan a menudo como sea posible.',
    'LBL_MIN_MARK' => 'marca por minuto',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'horas',
    'LBL_DAY_OF_MONTH' => 'fecha',
    'LBL_MONTHS' => 'me',
    'LBL_DAY_OF_WEEK' => 'd??a',
    'LBL_CRONTAB_EXAMPLES' => 'Lo arriba mostrado utiliza notaci??n est??ndar de crontab.',
// Labels
    'LBL_ALWAYS' => 'Siempre',
    'LBL_CATCH_UP' => 'Ejecutar Si Falla',
    'LBL_CATCH_UP_WARNING' => 'Desmarque si la ejecuci??n de esta tarea puede durar m??s de un momento.',
    'LBL_DATE_TIME_END' => 'Fecha y Hora de Fin',
    'LBL_DATE_TIME_START' => 'Fecha y Hora de Inicio',
    'LBL_INTERVAL' => 'Intervalo',
    'LBL_JOB' => 'Tarea',
    'LBL_JOB_URL' => 'URL de la tarea',
    'LBL_LAST_RUN' => '??ltima Ejecuci??n Exitosa',
    'LBL_MODULE_NAME' => 'Planificador SuiteCRM',
    'LBL_MODULE_TITLE' => 'Planificadores',
    'LBL_NAME' => 'Nombre de Tarea',
    'LBL_NEVER' => 'Nunca',
    'LBL_NEW_FORM_TITLE' => 'Nueva Planificaci??n',
    'LBL_PERENNIAL' => 'continuo',
    'LBL_SEARCH_FORM_TITLE' => 'B??squeda de Planificaci??n',
    'LBL_SCHEDULER' => 'Planificador:',
    'LBL_STATUS' => 'Estado',
    'LBL_TIME_FROM' => 'Activo Desde',
    'LBL_TIME_TO' => 'Activo Hasta',
    'LBL_WARN_CURL_TITLE' => 'Aviso cURL:',
    'LBL_WARN_CURL' => 'Aviso:',
    'LBL_WARN_NO_CURL' => 'Este sistema no tiene las librer??as cURL habilitadas/compiladas en el m??dulo de PHP (--with-curl=/ruta/a/libreria_curl).  Por favor, contacte con su administrador para resolver el problema.  Sin la funcionalidad que provee cURL, el Planificador no puede utilizar hilos con sus tareas.',
    'LBL_BASIC_OPTIONS' => 'Configuraci??n B??sica',
    'LBL_ADV_OPTIONS' => 'Opciones Avanzadas',
    'LBL_TOGGLE_ADV' => 'Mostrar Opciones Avanzadas',
    'LBL_TOGGLE_BASIC' => 'Mostrar Opciones B??sicas',
// Links
    'LNK_LIST_SCHEDULER' => 'Planificadores',
    'LNK_NEW_SCHEDULER' => 'Nuevo Planificador',
// Messages
    'ERR_CRON_SYNTAX' => 'Sintaxis de Cron inv??lida',
    'NTC_LIST_ORDER' => 'Establezca el orden en que esta planificaci??n aparecer?? en las listas desplegables de selecci??n de Planificador',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar el Planificador de Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Para ejecutar los planificadores de SuiteCRM, editar el archivo crontab de los usuarios del servido web con este comando: ',
    'LBL_CRON_LINUX_DESC2' => '.... y a??adir la siguiente l??nea al fichero crontab: ',
    'LBL_CRON_LINUX_DESC3' => 'Usted deber??a hacer esto una vez que la instalaci??n ha finalizado.',
    'LBL_CRON_WINDOWS_DESC' => 'Nota: Para ejecutar los planificadores de SuiteCRM, cree un archivo de proceso por lotes a ejecutar utilizando las Tareas Programadas de Windows. El archivo de proceso por lotes deber??a contener los siguientes comandos:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Registro de Tareas',
    'LBL_EXECUTE_TIME' => 'Hora de Ejecuci??n',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refrescar trabajos',
    'LBL_POLLMONITOREDINBOXES' => 'Comprobar cuentas de correo entrante',
    'LBL_PERFORMFULLFTSINDEX' => 'Sistema de ??ndice de b??squeda de texto completo',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Ejecutar Proceso Nocturno de Campa??as de Email Masivo',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Ejecutar Proceso Nocturno de Emails de Campa??a Rebotados',
    'LBL_PRUNEDATABASE' => 'Truncar Base de datos al Inicio del Mes',
    'LBL_TRIMTRACKER' => 'Truncar Tablas de Monitorizaci??n',
    'LBL_TRIMSUGARFEEDS' => 'Limpiar las Tablas de SuiteCRM Feed',
    'LBL_SENDEMAILREMINDERS' => 'Ejecutar env??o de correos recordatorios',
    'LBL_CLEANJOBQUEUE' => 'Limpiar cola de trabajos',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Extracci??n de documentos del sistema de archivos',

    'LBL_AODOPTIMISEINDEX' => 'Optimizar ??ndice de Advanced OpenDicsovery',
    'LBL_AODINDEXUNINDEXED' => 'Indexar documentos no indexados',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Ejecutar informes programados',
    'LBL_PROCESSAOW_WORKFLOW' => 'Procesar flujos de trabajo de AOW',

    'LBL_SCHEDULER_TIMES' => 'Horarios del Calendarizador',
    'LBL_CALCULAREDADPROSPECTO' => 'Calcular Edad Prospecto',
    'LBL_CALCULARANOSSINESTUDIAR' => 'Calcular A??os sin Estudiar del Prospecto y/o el Estudiante',
    'LBL_DESCARTARPROSPECTO' => 'Descartar Prospecto',
    'LBL_CALCULAREDADESTUDIANTE' => 'Calcular Edad Estudiante',
    'LBL_CALCULAREDADCONYUGE' => 'Calcular Edad Conyuge',
    'LBL_CALCULAREDADHIJOS' => 'Calcular Edad Hijos',
    'LBL_PROSPECTO_NO_CONTACTADO' => 'Alerta Prospecto no Contactado',
    'LBL_ALERTA_LOO' => 'Alerta Loo - 56 horas',
    'LBL_ESTABLECER_PERDIDA' => 'Colocar Oportunidad como Perdida despues de 60 dias sin cambios',
    'LBL_ACTUALIZAR_ESTADO_CURSOS' => 'Coloca un curso como inactivo si ya paso el tiempo de expiracion'   ,
    'LBL_ACTUALIZAR_ESTADO_REQUERIMIENTOS' => 'Actualiza el estado de los requerimientos usando la fecha de expiracion de la visa y la fecha de viaje',
    'LBL_RECALCULAR_CONSECUTIVOS' => 'Recalcula los consecutivos de los proceso de venta',
 'LBL_ACTUALIZAR_TRM' => 'Actualiza TRM'

);

global $sugar_config;
