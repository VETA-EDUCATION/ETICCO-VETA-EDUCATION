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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avanzado',
    'DEFAULT_CURRENCY_ISO4217' => 'C??digo de moneda ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nombre de Moneda',
    'DEFAULT_CURRENCY_SYMBOL' => 'S??mbolo de moneda',
    'DEFAULT_DATE_FORMAT' => 'Formato de fecha predeterminado',
    'DEFAULT_DECIMAL_SEP' => 'S??mbolo decimal',
    'DEFAULT_LANGUAGE' => 'Idioma predeterminado',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interfaz de Usuario',
    'DEFAULT_THEME' => 'Tema predeterminado',
    'DEFAULT_TIME_FORMAT' => 'Formato de hora predeterminado',
    'DISPLAY_RESPONSE_TIME' => 'Mostrar los tiempos de respuesta del servidor',
    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Permitir a los usuarios ocultar pesta??as',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configuraci??n del Sistema',
    'LBL_LOGVIEW' => 'Ver registro',
    'LBL_MAIL_SMTPAUTH_REQ' => '??Usar Autenticaci??n SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Contrase??a SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Puerto SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Nombre de Usuario SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificaci??n de Servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Elija su proveedor de Email:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Contrase??a de Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID de Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Contrase??a de Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Direcci??n de Email de Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Contrase??a de Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Nombre de usuario de Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Puerto de Servidor Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir a los usuarios usar esta cuenta para correo saliente:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Cuando esta opci??n est?? seleccionada, todos los usuarios podr??n enviar correos usando la misma cuenta de correo saliente para el env??o de notificaciones del sistema y alertas.  Si la opci??n no est?? seleccionada, los usuarios pueden usar el servidor de correo saliente tras proporcionar la informaci??n de su propia cuenta.',
    'LBL_MAILMERGE' => 'Combinar Correspondencia',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo minimo de actualizaci??n del Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este es el valor m??nimo que uno puede elegir para la actualizaci??n autom??tica de los dashlets. Ajustar a &#39;No&#39; desactiva que se actualicen autom??ticamente los dashlets.',
    'LBL_MODULE_FAVICON' => 'Mostrar el icono del m??dulo como un favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Si est?? visitando un m??dulo con icono, utiliza el icono del m??dulo como favicon, en lugar del favicon del tema, en la pesta??a del navegador.',
    'LBL_MODULE_NAME' => 'Configuraci??n del Sistema',
    'LBL_MODULE_ID' => 'Configurador',
    'LBL_MODULE_TITLE' => 'Interfaz de Usuario',
    'LBL_NOTIFY_FROMADDRESS' => 'Direcci??n del Remitente:',
    'LBL_NOTIFY_SUBJECT' => 'Asunto de correo:',
    'LBL_PROXY_AUTH' => '??Autenticaci??n?',
    'LBL_PROXY_HOST' => 'Servidor Proxy',
    'LBL_PROXY_ON_DESC' => 'Configura la direcci??n del servidor proxy y la configuraci??n de la autenticaci??n',
    'LBL_PROXY_ON' => '??Utilizar servidor proxy?',
    'LBL_PROXY_PASSWORD' => 'Contrase??a',
    'LBL_PROXY_PORT' => 'Puerto',
    'LBL_PROXY_TITLE' => 'Configuraci??n del Proxy',
    'LBL_PROXY_USERNAME' => 'Nombre de Usuario',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restaurar',
    'LBL_SYSTEM_SETTINGS' => 'Configuraci??n del Sistema',
    'LBL_SKYPEOUT_ON_DESC' => 'Permite a los usuarios hacer clic en los n??meros de tel??fono para realizar llamadas utilizando SkypeOut&reg;. Los n??meros deben de estar formateados adecuadamente para utilizar esta funcionalidad. El n??mero debe tener el formato: "+"  "C??digo Pa??s" "N??mero", como +34 965 555 555.',
    'LBL_SKYPEOUT_ON' => 'Habilitar Click para llamar',
    'LBL_SKYPEOUT_TITLE' => 'Click para llamar',
    'LBL_USE_REAL_NAMES' => 'Show Nombre Completo',
    'LBL_USE_REAL_NAMES_DESC' => 'Mostrar el nombre completo de los usuarios en lugar de sus Nombres de Usuario en los campos de asignaci??n.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Desactivar la acci??n de convertir clientes potenciales para clientes potenciales convertidos.',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un cliente potencial se ha convertido ya, lo que permite esta opci??n, eliminar la acci??n principal de conversi??n.',
    'LBL_ENABLE_ACTION_MENU' => 'Mostrar acciones dentro de los men??s',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Seleccione para mostrar la Vista de Detalle y el subpanel de acciones dentro de un men?? desplegable. Si no se selecciona, las acciones se mostrar??n como botones independientes.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Activar edici??n r??pida en el listado',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Elige para activar la edici??n r??pida en los campos de la lista. Si no hay campos seleccionados, ser?? desactivado en el listado.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Activar edici??n r??pida en la vista detallada',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Elige para activar la edici??n r??pida en los campos de la vista detallada. Si no hay campos seleccionados, ser?? desactivado en la vista detallada.',
    'LBL_HIDE_SUBPANELS' => 'Subpaneles colapsados',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Elementos por p??gina para listas',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Elementos por p??gina para subpaneles',
    'LOG_MEMORY_USAGE' => 'Registrar utilizaci??n de memoria',
    'LOG_SLOW_QUERIES' => 'Registrar consultas lentas',
    'CURRENT_LOGO' => 'Logo Actual:',
    'CURRENT_LOGO_HELP' => 'Este logo se muestra en la esquina superior izquierda de la aplicaci??n SuiteCRM.',
    'NEW_LOGO' => 'Seleccionar Logo:',
    'NEW_LOGO_HELP' => 'El formato del archivo de imagen puede ser tanto .png como .jpg. La altura m??xima es 170px, y la anchura m??xima es 450px. Cualquier imagen cargada que se sobrepase en alguna de las medidas ser?? modificada al tama??o indicado, seg??n la medida que exceda.',
    'NEW_LOGO_HELP_NO_SPACE' => 'El formato del archivo de imagen puede ser tanto .png como .jpg. La altura m??xima es 170px, y la anchura m??xima es 450px. Cualquier imagen cargada que se sobrepase en alguna de las medidas ser?? modificada al tama??o indicado, seg??n la medida que exceda.',
    'SLOW_QUERY_TIME_MSEC' => 'Tiempo umbral para consultas lentas (ms)',
    'STACK_TRACE_ERRORS' => 'Mostrar traza de la pila de errores',
    'UPLOAD_MAX_SIZE' => 'Tama??o m??ximo para subida de archivos',
    'VERIFY_CLIENT_IP' => 'Validar direcci??n IP del usuario',
    'LOCK_HOMEPAGE' => 'No permitir el dise??o personalizado de la P??gina de Inicio',
    'LOCK_SUBPANELS' => 'No permitir el dise??o personalizado de subpaneles',
    'MAX_DASHLETS' => 'M??ximo n??mero de SuiteCRM Dashlets en la P??gina de Inicio',
    'SYSTEM_NAME' => 'Nombre del Sistema:',
    'SYSTEM_NAME_WIZARD' => 'Nombre:',
    'SYSTEM_NAME_HELP' => '??ste es el nombre mostrado en la barra de t??tulo de su navegador.',
    'LBL_LDAP_TITLE' => 'Soporte de Autenticaci??n LDAP',
    'LBL_LDAP_ENABLE' => 'Habilitar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Servidor:',
    'LBL_LDAP_SERVER_PORT' => 'N??mero de Puerto:',
    'LBL_LDAP_ADMIN_USER' => 'Nombre de Usuario:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Usado para buscar el usuario de LDAP. Podr??a ser necesario escribir el nombre completo del dominio.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Contrase??a:',
    'LBL_LDAP_AUTHENTICATION' => 'Autenticaci??n:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Conecta al servidor LDAP usando credenciales especificas. Si no se proporcionan, la conexi??n sera an??nima.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Crear Usuarios Autom??ticamente:',
    'LBL_LDAP_USER_DN' => 'DN de Usuario:',
    'LBL_LDAP_GROUP_DN' => 'DN de Grupo:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Ejemplo: <em>ou=grupos,dc=ejemplo,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtro de Usuarios:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Pertenencia a Grupos:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Los usuarios deben de ser miembros de un grupo espec??fico',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Atributo de Usuario:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'El identificador ??nico de una persona que ser?? utilizado para comprobar si son miembros del grupo. Ejemplo: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'El atributo del Grupo ser?? utilizado como filtro sobre el Atributo de Usuario. Ejemplo: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Atributo de Grupo:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Cualquier par??metro de filtrado adicional a aplicar a la hora de autenticar usuarios. Por ejemplo:\nis_SuiteCRM_user=1 o (is_SuiteCRM_user=1)(is_sales=1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atributo de Inicio de Sesi??n:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atributo de Conexi??n (Bind):',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Para ejemplos de uso de autentificaci??n usando LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Para ejemplos de busquedas de usuarios usando LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Ejemplo: ldap.example.com o ldaps://ldap.example.com cuando se usa SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Ejemplo: 389 o 636 cuando se usa SSL',
    'LBL_LDAP_GROUP_NAME' => 'Nombre del Grupo:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Ejemplo: cn=SuiteCRM',
    'LBL_LDAP_USER_DN_DESC' => 'Ejemplo: ou=gente,dc=ejemplo,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Si un usuario autenticado no existe, se crear?? uno en SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Clave de Encriptaci??n:',
    'DEVELOPER_MODE' => 'Modo Desarrollador',

    'SHOW_DOWNLOADS_TAB' => 'Visualizar la pesta??a de descargas',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Cuando es seleccionada, la pesta??a de descarga aparecer?? en la configuraci??n de Usuario y proporcionar?? acceso a los usuarios a los plug-ins de SuiteCRM y otros archivos disponibles',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para la autenticaci??n SOAP al usar LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'La extensi??n php_mcrypt debe estar habilitada en su archivo php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'La extensi??n openssl debe habilitarse en el archivo php.ini.',
    'LBL_ALL' => 'Todo',
    'LBL_MARK_POINT' => 'Marcar Punto',
    'LBL_NEXT_' => 'Siguiente>>',
    'LBL_REFRESH_FROM_MARK' => 'Actualizar Desde Marca',
    'LBL_SEARCH' => 'Buscar:',
    'LBL_REG_EXP' => 'Exp. Reg.:',
    'LBL_IGNORE_SELF' => 'Ignorar Datos Propios:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcando Desde Donde Iniciar la Traza',
    'LBL_DISPLAYING_LOG' => 'Mostrando Traza',
    'LBL_YOUR_PROCESS_ID' => 'Su ID de proceso',
    'LBL_YOUR_IP_ADDRESS' => 'Su Direcci??n IP es',
    'LBL_IT_WILL_BE_IGNORED' => 'Ser?? ignorado',
    'LBL_LOG_NOT_CHANGED' => 'La traza no ha cambiado',
    'LBL_ALERT_JPG_IMAGE' => 'El formato de archivo de la imagen debe ser JPEG.  Suba un nuevo archivo cuya extensi??n sea .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'El formato de archivo de la imagen debe ser JPEG o PNG.  Suba un nuevo archivo cuya extensi??n sea .jpg o .png.',
    'LBL_ALERT_SIZE_RATIO' => 'La relaci??n de aspecto de la imagen deber??a estar entre 1:1 y 10:1.  La imagen ser?? redimensionada.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error al subir la imagen.',
    'LBL_LOGGER' => 'Configuraci??n de Traza',
    'LBL_LOGGER_FILENAME' => 'Nombre de Archivo de Traza',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensi??n',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Tama??o m??ximo de traza',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Formato de fecha por defecto',
    'LBL_LOGGER_LOG_LEVEL' => 'Nivel de Traza',
    'LBL_LEAD_CONV_OPTION' => 'Opciones de conversi??n del cliente potencial',
    'LEAD_CONV_OPT_HELP' => "<b>Copiar</b> - Crea y se relaciona con copias de todas las actividades del cliente potencial para los nuevos registros que se han seleccionado por el usuario durante la conversi??n. Las copias se crean para cada uno de los registros seleccionados .<br><br><b>Mover</b> - Mueve todas las actividades del cliente potencial al nuevo registro que ha seleccionado el usuario durante la conversi??n.<br><br><b>No hacer nada</b> - No se hace nada con las actividades del cliente potencial durante la conversi??n. Las actividades continuaran vinculadas solo al cliente potencial.",
    'LBL_CONFIG_AJAX' => 'Configurar la interfaz de usuario AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Activar o desactivar el uso de la interfaz de usuario AJAX para m??dulos espec??ficos',
    'LBL_LOGGER_MAX_LOGS' => 'N??mero m??ximo de trazas (antes de rotaci??n)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Agregar tras el nombre de archivo',
    'LBL_VCAL_PERIOD' => 'Per??odo de Tiempo para Actualizaciones vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importaci??n - N??mero m??ximo de registros:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar cu??ntas filas se permiten dentro de los archivos a importar.<br>Si el n??mero de filas en un archivo de importaci??n supera este n??mero, el usuario recibir?? una alerta.<br>Si no se introduce un valor se tendra un n??mero ilimitado de filas.',
    'vCAL_HELP' => 'Utilice esta opci??n para determinar el n??mero de meses de antelaci??n sobre la fecha actual con la que se publica la informaci??n relativa al estado de Disponible/Ocupado sobre llamadas y reuniones.<BR>Para desactivar la publicaci??n del estado Disponible/Ocupado, introduzca "0".  El m??nimo es 1 mes; el m??ximo 12 meses.',
    'LBL_PDFMODULE_NAME' => 'Configuraci??n PDF',
    'SUITEPDF_BASIC_SETTINGS' => 'Propiedades del Documento',
    'SUITEPDF_ADVANCED_SETTINGS' => 'Configuraci??n Avanzada',
    'SUITEPDF_LOGO_SETTINGS' => 'Im??genes',

    'PDF_AUTHOR' => 'Autor',
    'PDF_AUTHOR_INFO' => 'El Autor aparece en las propiedades del documento.',

    'PDF_HEADER_LOGO' => 'Para Documentos PDF de Cotizaciones',
    'PDF_HEADER_LOGO_INFO' => 'Esta imagen aparece en la cabecera por defecto de los documentos PDF de cotizaciones.',

    'PDF_NEW_HEADER_LOGO' => 'Seleccione una nueva Imagen para las cotizaciones',
    'PDF_NEW_HEADER_LOGO_INFO' => 'El formato de archivo puede ser .jpg o .png. (S??lo .jpg para EZPDF)<BR>El tama??o recomendado es 867x60 px.',

    'PDF_SMALL_HEADER_LOGO' => 'Para Documentos PDF de Informes',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Esta imagen aparece en la Cabecera por defecto de los Documentos PDF de Informes.<br> Esta imagen tambi??n aparece en la esquina superior izquierda de la aplicaci??n SuiteCRM.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Seleccione una nueva imagen para informes',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'El formato de archivo puede ser .jpg o .png. (S??lo .jpg para EZPDF)<BR>El tama??o recomendado es 212x40 px.',

    'PDF_FILENAME' => 'Nombre de Archivo Por Defecto',
    'PDF_FILENAME_INFO' => 'Nombre de archivo por defecto para los archivos PDF generados',

    'PDF_TITLE' => 'T??tulo',
    'PDF_TITLE_INFO' => 'El t??tulo aparece en las propiedades del documento.',

    'PDF_SUBJECT' => 'Asunto',
    'PDF_SUBJECT_INFO' => 'El Asunto aparece en las propiedades del documento.',

    'PDF_KEYWORDS' => 'Palabra(s) clave',
    'PDF_KEYWORDS_INFO' => 'Asociar Palabras clave con el documento, generalmente en la forma "palabra1 palabra2..."',

    'PDF_COMPRESSION' => 'Compresi??n',
    'PDF_COMPRESSION_INFO' => 'Activa o desactiva la compresi??n de p??gina. <br>Cuando ha sido activada, la represnetaci??n interna de cada p??gina se comprime, llevando a niveles de ratios de compresi??n de aprox. 2 para el documento resultante.',

    'PDF_JPEG_QUALITY' => 'Calidad JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Establece la calidad de compresi??n JPEG por defecto (1-100)',

    'PDF_PDF_VERSION' => 'Versi??n PDF',
    'PDF_PDF_VERSION_INFO' => 'Establece la versi??n de PDF (consulte la referencia PDF para valores v??lidos).',

    'PDF_PROTECTION' => 'Protecci??n de Documento',
    'PDF_PROTECTION_INFO' => 'Establece la protecci??n de documento<br>- copiar: copiar texto e im??genes al portapapeles<br>- imprimir: imprimir el documento<br>- modificar: modificar el documento (excepto las anotaciones y formularios)<br>- anot.-forms.: a??adir anotaciones y formularios<br>Nota: la protecci??n ante la modificaci??n es para gente que posee el producto Acrobat completo.',

    'PDF_USER_PASSWORD' => 'Contrase??a de Usuario',
    'PDF_USER_PASSWORD_INFO' => 'Si no establece ninguna contrase??a, el documento se abrir?? como de costumbre. <br>Si establece una contrase??a de usuario, el visor PDF se la solicitar?? antes de mostrar el documento. <br>Si la contrase??a maestra es diferente de la de usuario podr?? utilizarla para obtener acceso completo.',

    'PDF_OWNER_PASSWORD' => 'Contrase??a de Propietario',
    'PDF_OWNER_PASSWORD_INFO' => 'Si no establece ninguna contrase??a, el documento se abrir?? como de costumbre. <br>Si establece una contrase??a de usuario, el visor PDF se la solicitar?? antes de mostrar el documento. <br>Si la contrase??a maestra es diferente de la de usuario podr?? utilizarla para obtener acceso completo.',

    'PDF_ACL_ACCESS' => 'Control de Acceso',
    'PDF_ACL_ACCESS_INFO' => 'Control de Acceso por defecto para la generaci??n del PDF.',

    'K_CELL_HEIGHT_RATIO' => 'Ratio de Altura de la Celda',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Si la altura de una celda es menor que (Altura de la Fuente x Ratio de Altura de la Celda), entonces se utilizar?? (Altura de la Fuente x Ratio de Altura de la Celda) como la altura de la celda.<br>(Altura de la Fuente x Ratio de Altura de la Celda) tambi??n se utiliza como la altura de la celda cuando no hay ninguna altura definida.',

    'K_SMALL_RATIO' => 'Coeficiente para Fuentes Peque??as',
    'K_SMALL_RATIO_INFO' => 'Coeficiente de Reducci??n para fuentes peque??as.',

    'PDF_IMAGE_SCALE_RATIO' => 'Ratio de escalado de imagen',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ratio utilizado para escalar las im??genes',

    'PDF_UNIT' => 'Unidad',
    'PDF_UNIT_INFO' => 'unidad de medida del documento',
    'PDF_GD_WARNING' => 'No ha instalado la librer??a GD para PHP. Sin la librer??a GD, s??lo se mostrar??n los logos JPEG en los documentos PDF.',
    'ERR_EZPDF_DISABLE' => 'Aviso : La clase EZPDF ha sido deshabilitada en la tabla de configuraci??n y est?? establecida como la clase para PDF. Por favor, "Guarde" este formulario para establecer TCPDF como la Clase PDF y vuelva en un estado estable.',
    'LBL_IMG_RESIZED' => "(redimensionado para ser mostrado)",


    'LBL_FONTMANAGER_BUTTON' => 'Administrador de Fuentes PDF',
    'LBL_FONTMANAGER_TITLE' => 'Administrador de Fuentes PDF',
    'LBL_FONT_BOLD' => 'Negrita',
    'LBL_FONT_ITALIC' => 'Cursiva',
    'LBL_FONT_BOLDITALIC' => 'Negrita/Cursiva',
    'LBL_FONT_REGULAR' => 'Normal',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'N??cleo',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Tipo 1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Nombre',
    'LBL_FONT_LIST_FILENAME' => 'Nombre de archivo',
    'LBL_FONT_LIST_TYPE' => 'Tipo',
    'LBL_FONT_LIST_STYLE' => 'Estilo',
    'LBL_FONT_LIST_STYLE_INFO' => 'Estilo de la fuente',
    'LBL_FONT_LIST_ENC' => 'Codificaci??n',
    'LBL_FONT_LIST_EMBEDDED' => 'Incrustado',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Marque esta opci??n para incrustar la fuente en el archivo PDF',
    'LBL_FONT_LIST_CIDINFO' => 'Informaci??n CID',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Para ejemplos y m??s ayuda: www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Tama??o de Fuente (KB)',
    'LBL_ADD_FONT' => 'A??adir una fuente',
    'LBL_BACK' => 'Atr??s',
    'LBL_REMOVE' => 'Quitar',
    'LBL_JS_CONFIRM_DELETE_FONT' => '??Est?? seguro de que desea eliminar esta fuente?',

    'LBL_ADDFONT_TITLE' => 'A??adir una Fuente PDF',
    'LBL_PDF_ENCODING_TABLE' => 'Tabla de Codificaci??n',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Nombre de la tabla de codificaci??n.<br>Esta opci??n es ignorada en Unicode TrueType, Unicode OpenType y fuentes con s??mbolos.<br>La codificaci??n define la asociaci??n entre un c??digo (de 0 a 255) y un car??cter contenido en la fuente.<br>Los primeros 128 son fijos y se corresponden con ASCII.',
    'LBL_PDF_FONT_FILE' => 'Archivo de Fuente',
    'LBL_PDF_FONT_FILE_INFO' => 'archivo .ttf o .otf o .pfb',
    'LBL_PDF_METRIC_FILE' => 'Archivo de M??trica',
    'LBL_PDF_METRIC_FILE_INFO' => 'archivo .afm o .ufm',
    'LBL_ADD_FONT_BUTTON' => 'A??adir',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Este archivo no tiene una extensi??n de archivo adecuada.',

    'ERR_MISSING_CIDINFO' => 'El campo Informaci??n CID Information no puede estar vac??o.',
    'LBL_ADDFONTRESULT_TITLE' => 'Resultado del proceso de adici??n de fuente',
    'LBL_STATUS_FONT_SUCCESS' => '??XITO : La fuente ha sido a??adida a SuiteCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERROR : La fuente no ha sido a??adida. Mire en el siguiente registro.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Error durante la subida del archivo de fuente o de m??tricas.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Tus escenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No se han configurado escenarios',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Elige cu??les escenarios son los indicados para tu instalaci??n. Estas opciones pueden ser cambias despu??s de la instalaci??n.',

    'LBL_WIZARD_TITLE' => 'Asistente de Administraci??n',
    'LBL_WIZARD_WELCOME_TAB' => 'Bienvenido',
    'LBL_WIZARD_WELCOME_TITLE' => '??Bienvenido a SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Haga clic en <b>Siguiente</b> para establecer una imagen de marca, localizar y configurar SuiteCRM ahora. Si desea configurar SuiteCRM m??s tarde, haga clic en <b>Saltar</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Siguiente >',
    'LBL_WIZARD_BACK_BUTTON' => '< Anterior',
    'LBL_WIZARD_SKIP_BUTTON' => 'Saltar',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TITLE' => 'La configuraci??n b??sica del sistema ha sido completada',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Imagen de marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Proporcione el nombre y logo de su organizaci??n para establecer la imagen de su marca en SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique c??mo desea que los datos sean mostrados en SuiteCRM, bas??ndose en su ubicaci??n geogr??fica. La configuraci??n que proporcione aqu?? ser?? la utiliza por defecto. Los usuarios podr??n establecer sus propias preferencias.',
    'LBL_WIZARD_SMTP_DESC' => 'Proporcione la cuenta de correo que se utilizar?? para enviar correos, como las notificaciones de asignaci??n y las contrase??as de nuevos usuarios. Los usuarios recibir??n correos de SuiteCRM, como si hubieran sido enviados desde la cuenta de correo especificada.',
    'LBL_LOADING' => 'Cargando ...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bienvenido' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logotipo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Muestra los emails de contactos relacionados en el subpanel History para m??dulos',

    // Google auth PR 6146
    'LBL_GOOGLE_AUTH_TITLE' => 'Autenticaci??n de Google',
    'LBL_GOOGLE_AUTH_JSON' => 'Archivo JSON',
    'LBL_GOOGLE_AUTH_JSON_HELP' => 'Cargar el archivo JSON descargado desde consola de los desarrolladores de Google.',

);