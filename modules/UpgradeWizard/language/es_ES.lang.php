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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'No se ha podido determinar el Grupo',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'No se ha podido determinar el Propietario',
    'ERR_UW_CONFIG_WRITE' => 'Error al actualizar config.php con la informaci??n de la nueva versi??n.',
    'ERR_UW_CONFIG' => 'Por favor, habilite los permisos de escritura para su archivo config.php, y recargue esta p??gina.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Directorio no escribible/editable',
    'ERR_UW_FILE_NOT_COPIED' => 'Archivo no copiado',
    'ERR_UW_FILE_NOT_DELETED' => 'Problema al quitar el paquete',
    'ERR_UW_FILE_NOT_READABLE' => 'El archivo no ha podido ser le??do.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'El archivo no ha podido ser movido o escrito/editado',
    'ERR_UW_FLAVOR_2' => 'Edici??n de la Actualizaci??n:',
    'ERR_UW_FLAVOR' => 'Edici??n del Sistema SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log no ha podido ser creado/escrito.  Por favor, corrija los permisos en su directorio de SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload est?? establecido a un valor mayor que 1.  Por favor, cambie esto en su archivo php.ini y reinicie su servidor web.',
    'ERR_UW_NO_FILE_UPLOADED' => '??Por favor, especifique un archivo e int??ntelo de nuevo!',
    'ERR_UW_NO_FILES' => 'Ha ocurrido un error, no se han encontrado archivos para comprobar.',
    'ERR_UW_NO_MANIFEST' => 'El archivo zip no contiene un archivo manifest.php.  No se puede continuar.',
    'ERR_UW_NO_VIEW' => 'La vista especificada no es v??lida.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Subida no v??lida.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'No ha podido crearse el directorio temporal. Compruebe los permisos de ficheros.',
    'ERR_UW_ONLY_PATCHES' => 'S??lo puede subir parches en esta p??gina.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Se han encontrado errores durante la comprobaci??n previa',
    'ERR_UW_UPLOAD_ERR' => 'Ha ocurrido un error en la subida del archivo, por favor, ??int??ntelo de nuevo!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Versi??n del Sistema SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'Versi??n de PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'Versi??n del Sistema SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Esta p??gina no es para ejecutar',
    'LBL_BUTTON_BACK' => '< Atr??s',
    'LBL_BUTTON_CANCEL' => 'Cancelar',
    'LBL_BUTTON_DELETE' => 'Eliminar Paquete',
    'LBL_BUTTON_DONE' => 'Hecho',
    'LBL_BUTTON_EXIT' => 'Salir',
    'LBL_BUTTON_NEXT' => 'Siguiente>',
    'LBL_BUTTON_RECHECK' => 'Comprobar de nuevo',
    'LBL_BUTTON_RESTART' => 'Reiniciar',

    'LBL_UPLOAD_UPGRADE' => 'Subir un Paquete de Actualizaci??n',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Copia de seguridad',
    'LBL_UW_BACKUP_FILES_EXIST' => 'La copia de seguridad de los archivos de esta actualizaci??n pueden encontrarse en',
    'LBL_UW_BACKUP' => 'Copia de seguridad',
    'LBL_UW_CANCEL_DESC' => 'La actualizaci??n ha sido cancelada. Los archivos temporales copiados y los archivos de actualizaci??n subidos han sido eliminados.',
    'LBL_UW_CHECK_ALL' => 'Comprobar Todo',
    'LBL_UW_CHECKLIST' => 'Pasos de la Actualizaci??n',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Copias de seguridad de archivos sobrescritos est??n en el siguiente directorio: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Combinar manualmente los siguientes archivos: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Proceso de Actualizaci??n: Combinar Manualmente Archivos',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Por favor, utilice cualquier el m??todo diff que le sea m??s familiar para combinar estos archivos.  Hasta que no haya completado este proceso, su instalaci??n de SuiteCRM estar?? en un estado incierto, y la actualizaci??n incompleta.',
    'LBL_UW_COMPLETE' => 'Completado',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Todos los Requerimientos del Sistema han sido Satisfechos',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Configuraci??n de PHP: Paso por Referencia en Tiempo de LLamada',
    'LBL_UW_COMPLIANCE_CURL' => 'M??dulo cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'M??dulo IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'M??dulo MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Par??metro mbstring.func_overload de MBStrings',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Configuraci??n de PHP: L??mite de Memoria',
    'LBL_UW_COMPLIANCE_STREAM' => 'Configuraci??n PHP: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Versi??n minima de Base de Datos',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Ruta de php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versi??n M??nima de PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Configuraci??n de PHP: Modo Seguro',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Configuraci??n Detectada',
    'LBL_UW_COMPLIANCE_XML' => 'An??lisis XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Soporte Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Versi??n PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Archivos Copiados con ??xito',

    'LBL_UW_DB_CHOICE1' => 'El Asistente de Actualizaciones ejecutar?? el SQL',
    'LBL_UW_DB_CHOICE2' => 'Consultas de SQL Lanzadas Manualmente',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privilegios de Base de datos',
    'LBL_UW_DB_METHOD' => 'M??todo de Actualizaci??n en Base de Datos',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Todos los Privilegios Disponibles',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Privilegio Necesario',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Los siguientes paquetes de actualizaci??n han sido instalados:',
    'LBL_UW_END_LOGOUT_PRE' => 'La actualizaci??n se ha completado.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Haga clic en Hecho para salir del Asistente de Actualizaciones.',
    'LBL_UW_END_LOGOUT' => 'Si tiene previsto aplicar cualquier otro paquete de actualizaci??n utilizando el Asistente de Actualizaciones, cierre antes la sesi??n e in??ciela de nuevo.',

    'LBL_UW_FILE_DELETED' => ' ha sido eliminado.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupo',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Permisos de Archivo',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Todos los Archivos son Escribibles</b>',
    'LBL_UW_FILE_OWNER' => 'Propietario',
    'LBL_UW_FILE_PERMS' => 'Permisos',
    'LBL_UW_FILE_UPLOADED' => ' ha sido subido',
    'LBL_UW_FILE' => 'Nombre de Archivo',
    'LBL_UW_FILES_QUEUED' => 'Los siguientes paquetes de actualizaci??n est??n listos para ser instalados:',
    'LBL_UW_FILES_REMOVED' => 'Los siguientes archivos se eliminar??n del sistema: <br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Haga clic en Siguiente para subir los paquetes de actualizaci??n.</b>',
    'LBL_UW_FROZEN' => 'Suba un paquete antes de continuar.',
    'LBL_UW_HIDE_DETAILS' => 'Ocultar Detalles',
    'LBL_UW_IN_PROGRESS' => 'En Progreso',
    'LBL_UW_INCLUDING' => 'Incluyendo',
    'LBL_UW_INCOMPLETE' => 'Incompleto',
    'LBL_UW_MANUAL_MERGE' => 'Combinaci??n de Archivos',
    'LBL_UW_MODULE_READY' => 'El m??dulo est?? listo para ser instalado. Pulsa en Proceder para realizar la instalaci??n.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'No se han detectado Actualizaciones registradas.',
    'LBL_UW_NONE' => 'Ninguno',
    'LBL_UW_OVERWRITE_DESC' => 'Todos los archivos cambiados ser??n sobrescritos, incluyendo cualquier personalizaci??n al c??digo fuente y cambios las plantillas que haya podido realizar. ??Est?? seguro de que desea proceder?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => '??Crear Tarea para Combinaci??n Manual?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Enviarse a si mismo un Email Recordatorio para la Combinaci??n Manual?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Los siguientes archivos han sido modificados.  Desmarque los elementos que requieren una combinaci??n manual. <i>Los cambios de dise??o detectados son desmarcados autom??ticamente; marque los que deber??an ser sobrescritos.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'No se Requiere Combinaci??n Manual de Archivos.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'No es necesario.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Archivos Auto-preservados:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Todos los tests de inspecci??n previa han sido satisfactorios.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Haga clic en Siguiente para copiar los archivos actualizados al sistema.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Nota: </b>El resto del proceso de actualizaci??n es obligatorio, y si pulsar Siguiente tendr?? que completar el proceso. Si no desea continuar, haga clic en el bot??n Cancelar.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Cambiar Todos los Archivos',

    'LBL_UW_REBUILD_TITLE' => 'Reconstruir Resultado',
    'LBL_UW_SCHEMA_CHANGE' => 'Cambios en el Esquema',

    'LBL_UW_SHOW_COMPLIANCE' => 'Mostrar Configuraci??n Detectada',
    'LBL_UW_SHOW_DB_PERMS' => 'Mostrar Permisos de Base de datos que Faltan',
    'LBL_UW_SHOW_DETAILS' => 'Mostrar Detalles',
    'LBL_UW_SHOW_DIFFS' => 'Mostrar Archivos que Requieren Combinanci??n Manual',
    'LBL_UW_SHOW_NW_FILES' => 'Mostrar Archivos con Permisos Incorrectos',
    'LBL_UW_SHOW_SCHEMA' => 'Mostrar Script de Cambios al Esquema',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Mostrar Consultas Err??neas',
    'LBL_UW_SHOW' => 'Mostrar',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Archivos Omitidos',
    'LBL_UW_SQL_RUN' => 'Comprobar cuando se haya ejecutado el SQL manualmente',
    'LBL_UW_START_DESC' => 'Este asistente le ayudar?? a actualizar esta instancia de SuiteCRM.',
    'LBL_UW_START_DESC2' => 'Nota: Le recomendamos que cree una copia de la instancia de SuiteCRM que se utiliza en producci??n y pruebe el paquete de actualizaci??n antes de implementar la nueva versi??n. Si ha cambiado el archivo "composer.json", ejecute despu??s de finalizado el proceso de actualizaci??n:<br/><br/><pre>composer update</pre>', // Keep the <pre>composer update</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Haga clic en Siguiente para realizar una comprobaci??n de su sistema y asegurar que est?? listo para la actualizaci??n. Las comprobaciones incluyen permisos de archivos, privilegios de base de datos, y configuraci??n del servidor.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'El nuevo Asistente de Actualizaciones continuar?? con el proceso de instalaci??n. Por favor, continue con su actualizaci??n.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bienvenido al nuevo Asistente de Actualizaciones',

    'LBL_UW_TITLE_CANCEL' => 'Cancelar',
    'LBL_UW_TITLE_COMMIT' => 'Realizar Actualizaci??n',
    'LBL_UW_TITLE_END' => 'Informe',
    'LBL_UW_TITLE_PREFLIGHT' => 'Comprobaciones Previas',
    'LBL_UW_TITLE_START' => 'Bienvenido',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Comprobaci??n del Sistema',
    'LBL_UW_TITLE_UPLOAD' => 'Subir Paquete',
    'LBL_UW_TITLE' => 'Asistente de Actualizaciones',
    'LBL_UW_UNINSTALL' => 'Desinstalar',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Aceptar Licencia',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Convertir Licencia',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Inicio en progreso',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Comprobaci??n del Sistema en Progreso',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Comprobaci??n de Licencia en progreso',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Comprobaciones Previas en Progreso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Copia de Archivos en Proceso',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Realizaci??n de la Actualizaci??n en Progreso',
    'LBL_UW_COMMIT_DESC' => 'Pulse Siguiente para ejecutar "scripts" o comandos de actualizaci??n.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Scripts de Actualizaci??n en Progreso',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Resumen de la Actualizaci??n en Progreso',
    'LBL_UPGRADE_IN_PROGRESS' => 'en progreso',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Tiempo transcurrido',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Cancelaci??n de Actualizaci??n y Limpieza en Progreso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'La actualizaci??n puede durar un rato',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Comprobaciones de Subida en Progreso',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Subiendo Paquete de Actualizaci??n',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'El Asistente de Actualizaciones Eliminar?? el antiguo esquema 4.5.1',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Eliminaci??n Manual del Esquema Post-instalaci??n',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'M??todo de Eliminaci??n de Antiguo Esquema',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Mostrar el Antiguo Esquema que ser??a eliminado',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Consultas Saltadas',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Se requiere la versi??n de PHP 5 o superior.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Su versi??n de PHP no est?? soportada por SuiteCRM.  Necesitar?? instalar una versi??n que sea compatible con la aplicaci??n SuiteCRM.  Por favor, consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para informaci??n sobre las Versiones de PHP soportadas. Su versi??n es la ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'El modo de compatibilidad hacia atr??s de PHP est?? habilitado. Establezca zend.ze1_compatibility_mode a Off antes de continuar',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Acci??n',
    'LBL_ML_CANCEL' => 'Cancelar',
    'LBL_ML_COMMIT' => 'Proceder',
    'LBL_ML_DESCRIPTION' => 'Descripci??n',
    'LBL_ML_INSTALLED' => 'Fecha de Instalaci??n',
    'LBL_ML_NAME' => 'Nombre',
    'LBL_ML_PUBLISHED' => 'Fecha de Publicaci??n',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Desinstalable',
    'LBL_ML_VERSION' => 'Versi??n',
    'LBL_ML_INSTALL' => 'Instalar',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Su versi??n actual de PHP es: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'La version php recomendada es ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' o superior', // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Asistente de Actualizaciones',
    'LBL_UPLOAD_SUCCESS' => 'Paquete de actualizaci??n subido con ??xito. Haga clic en Siguiente para realizar una comprobaci??n final.',
    'LBL_UW_TITLE_LAYOUTS' => 'Confirmar Dise??o',
    'LBL_LAYOUT_MODULE_TITLE' => 'Dise??os',
    'LBL_LAYOUT_MERGE_DESC' => 'Hay disponibles campos nuevos que se han a??adido como parte de esta actualizaci??n y que pueden ser autom??ticamente a??adidos a sus dise??os de m??dulo actuales. Para saber m??s sobre los nuevos campos, consulte las Notas de Lanzamiento de esta versi??n a la que se est?? actualizando. <br /><br />Si no desea a??adir los nuevos campos, por favor desmarque la casilla del m??dulo, y sus dise??os personalizados se mantendr??n sin cambios. Los campos estar??n disponibles en el Estudio tras la actualizaci??n.',
    'LBL_LAYOUT_MERGE_TITLE' => 'Haga clic en Siguiente para confirmar los cambios y finalizar la actualizaci??n.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Haga clic en Siguiente para completar la actualizaci??n.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmar Dise??os',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultados de la Confirmaci??n de Dise??os',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Los siguientes dise??os se han combinado con ??xito:',
    'LBL_SELECT_FILE' => 'Seleccionar Archivo:',
    'ERROR_VERSION_INCOMPATIBLE' => 'El archivo subido no es compatible con esta versi??n de SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'El archivo subido no es compatible con esta versi??n de PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'El archivo subido no es compatible con esta versi??n de SuiteCRM:',
    'LBL_LANGPACKS' => 'Paquetes de Lenguaje' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Cargador de M??dulos' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Actualizaciones de Parche' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Flujo de trabajo' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Actualizaci??n:' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Procesando' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Version Compatible no est?? definido en archivo de manifiesto',
    'LBL_UPGRD_CSTM_CHK' => 'El proceso de Upgrade actualizar?? algunos archivos pero esos archivos tambi??n existen en la carpeta custom. Por favor revise los cambios antes de continuar:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'El archivo subido excede el l??mite definido por la directiva upload_max_filesize en php.ini.',
        2 => 'El archivo subido excede el l??mite definido por la directiva MAX_FILE_SIZE especificada en el formulario HTML.',
        3 => 'El archivo ha sido s??lo parcialmente subido.',
        4 => 'No se ha subido ning??n archivo.',
        5 => 'Error desconocido.',
        6 => 'Falta una carpeta temporal.',
        7 => 'Error al escribir el archivo.',
        8 => 'El archivo subido ha sido bloqueado por su extensi??n.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Advertencia: ??no se ha establecido caducidad de la contrase??a!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Por favor actualice su configuraci??n aqu??',
);
