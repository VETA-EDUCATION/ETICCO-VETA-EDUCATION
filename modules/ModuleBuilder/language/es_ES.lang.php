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
    'LBL_LOADING' => 'Cargando ...' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ocultar Opciones' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Proporcionar un <b>Nombre</b> para el paquete. El nombre que introduzca debe ser alfanum??rico y sin espacios. (Ejemplo: HR_Management)<br/><br/>Puede proporcionar <b>Autor</b> y <b>Descripci??n</b> como informaci??n para el paquete.<br/><br/> Haga clic en <b>Guardar</b> para crear el paquete.',
            'modify' => 'Las propiedades y posibles acciones para el <b>paquete</b> aparecer?? aqu??. <br/><br/> Puede modificar el <b>nombre</b>, <b>Autor</b> y <b>Descripci??n</b> del paquete, as?? como ver y personalizar todos los m??dulos contenidos en el paquete. <br/><br/> Haga clic en  <b>nuevo m??dulo</b> para crear un m??dulo para el paquete.<br/><br/> Si el paquete contiene al menos un m??dulo, usted puede <b>publicar</b> y <b>desplegar</b> el paquete, as?? como <b>exportar</b> las personalizaciones realizadas en el paquete.',
            'name' => 'Este es el <b>nombre</b> del paquete actual. <br/><br/> El nombre que introduzca debe ser alfanum??ricos, comenzar con una letra y sin espacios. (Ejemplo: HR_Management)',
            'author' => 'Este es el <b> Autor </b> que se muestra durante la instalaci??n como el nombre de la entidad que cre?? el paquete. <br/><br/> El autor podr??a ser un individuo o una empresa.',
            'description' => 'Esta es la <b>Descripci??n</b> del paquete que es mostrada durante la instalaci??n.',
            'publishbtn' => 'Haga clic en <b>Publicar</b> para guardar todos los datos introducidos y crear un archivo .zip que es una versi??n instalable del paquete.<br/><br/> Use el <b>Cargador de M??dulos</b> para cargar el archivo .zip e instalar el paquete.',
            'deploybtn' => 'Haga clic en <b> desplegar </b> para guardar todos los datos introducidos y para instalar el paquete, incluyendo todos los m??dulos, en la instancia actual.',
            'duplicatebtn' => 'Haga clic en <b> duplicar </b> para copiar el contenido del paquete en un paquete nuevo y para mostrar el nuevo paquete. <br/> <br/> Para el nuevo paquete, un nuevo nombre es generado autom??ticamente a??adiendo un n??mero al final del nombre del paquete utilizado para duplicarlo. Puede cambiar el nombre del nuevo paquete mediante la introducci??n de un <b>nombre</b> nuevo y despu??s haciendo clic en <b>Guardar</b>.',
            'exportbtn' => 'Haga clic en <b>Exportar</b> para crear un archivo .zip que contiene las personalizaciones realizadas en el paquete. <br/><br/> El archivo generado no es una versi??n instalable del paquete. <br/><br/> Use el <b >Cargador de m??dulos</b> para importar el archivo .zip y tener el paquete, incluidas las personalizaciones, aparecen en el Generador de m??dulos.',
            'deletebtn' => 'Haga Click en <b>Borrar</b> para suprimir este paquete y todos los archivos relacionados con el mismo.',
            'savebtn' => 'Haga clic en <b>Guardar</b> para guardar todos los datos relacionados con el paquete.',
            'existing_module' => 'Haga clic en el icono del <b>m??dulo</b> para editar las propiedades y personalizar los campos, las relaciones y dise??os asociados con el m??dulo.',
            'new_module' => 'Haga clic en <b> nuevo m??dulo </b> para crear un nuevo m??dulo para este paquete.',
            'key' => 'Estas 5 letras, <b> clave </b> alfanum??ricas se usa como prefijo para todos los directorios, los nombres de clases y las tablas de base de datos para todos los m??dulos en el paquete actual. <br><br> La clave se utiliza en un esfuerzo para lograr la singularidad de los nombres de las tablas.',
            'readme' => 'Haga clic para a??adir <b> L??ame </b> de texto para este paquete. <br><br> El l??ame estar?? disponible en el momento de la instalaci??n.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Proporcionar un <b>nombre</b> para el m??dulo. La <b>etiqueta</b> que le proporcione aparecer?? en la pesta??a de navegaci??n. <br/><br/> Elija si desea ver una pesta??a de navegaci??n para el m??dulo para eso seleccione la casilla de <b> Pesta??a de navegaci??n </b>. <br/><br/> Revise la casilla de <b>equipo de seguridad</b> para tener un campo de selecci??n del equipo dentro de los registros del m??dulo. <br/><br/> A continuaci??n, seleccione el tipo de m??dulo que desea crear. <br/><br/> Seleccione un tipo de plantilla. Cada plantilla contiene un conjunto espec??fico de los campos, as?? como los dise??os pre-definidos, para usar como base de su m??dulo. <br/><br/> Haga clic en <b>Guardar </b> para crear el m??dulo.',
            'modify' => 'Puedes modificar las propiedades del m??dulo y adaptar los <b>Campos</b>, <b>Relaciones</b> y <b>Vistas</b> relacionadas con el m??dulo.',
            'importable' => 'Compruebe la casilla de <b> Importables </b> la cual permitir?? la importaci??n de datos sobre este m??dulo. <br><br> Un enlace de Asistente de importaci??n aparecer?? en el panel de accesos directos en el m??dulo. El Asistente de importaci??n facilita la importaci??n de datos de fuentes externas en el m??dulo personalizado.',
            'team_security' => 'Compruebe la casilla de <b> equipo de seguridad </b> que permitir?? la seguridad por equipo para este m??dulo. <br/><br/> Si el equipo de seguridad est?? activado, el campo de selecci??n del equipo aparecer?? dentro de los registros en el m??dulo',
            'reportable' => 'Al marcar esta casilla permitir?? que ha este m??dulo se le puedan realizar reportes.',
            'assignable' => 'Al marcar esta casilla permitir?? asignar a un usuario seleccionado un registro del m??dulo.',
            'has_tab' => 'Comprobaci??n de <b> Pesta??a de Navegaci??n </b> proporcionar?? una pesta??a de navegaci??n para el m??dulo.',
            'acl' => 'Al marcar esta casilla permitir?? a los controles de acceso en este m??dulo, incluyendo la seguridad sobre el terreno.',
            'studio' => 'Al marcar esta casilla permitir?? a los administradores personalizar este m??dulo dentro de Studio.',
            'audit' => 'Marcando esta casilla Habilitar la auditor??a de este m??dulo. Los cambios en ciertos campos se registrar??n de modo que los administradores pueden revisar el historial de cambios.',
            'viewfieldsbtn' => 'Haga clic en <b> Ver Campos </b> para ver los campos asociados con el m??dulo y para crear y editar los campos personalizados.',
            'viewrelsbtn' => 'Haga clic en <b> Ver Relaciones </b> para ver las relaciones asociadas con este m??dulo y crear nuevas relaciones.',
            'viewlayoutsbtn' => 'Haga clic en <b> Ver Dise??os </b> para ver los dise??os para el m??dulo y para personalizar la organizaci??n de campo dentro de los dise??os.',
            'duplicatebtn' => 'Haga clic en <b> duplicados </b> para copiar las propiedades del m??dulo en un nuevo m??dulo y para mostrar el nuevo m??dulo. <br/><br/> Para el nuevo m??dulo, un nuevo nombre se genera autom??ticamente a??adiendo un n??mero al final del nombre del m??dulo utilizado para crearlo.',
            'deletebtn' => 'Haga Click en <b>Eliminar</b> para eliminar este m??dulo.',
            'name' => 'Este es el <b>Nombre</b> del m??dulo actual.<br/><br/> El nombre debe ser alfanum??rico y debe comenzar con una letra y no contener espacios. (Ejemplo: HR_Management)',
            'label' => 'Esta es la <b>Etiqueta</b> que aparecer?? en la pesta??a de navegaci??n para el m??dulo. ',
            'savebtn' => 'Haga Click en <b>Guardar</b> para guardar toda la informaci??n relacionada con el modulo.',
            'type_basic' => 'La plantilla <b> b??sica </b> cuenta con campos b??sicos, como el nombre, Asignado a, Equipo, Fecha de creaci??n y los campos de Descripci??n.',
            'type_company' => 'El tipo de plantilla de la <b>Empresa</b> dispone de campos espec??ficos a la organizaci??n, como por ejemplo Nombre de la Empresa, Sector, Direcci??n Fiscal. <br /><br />Utilice esta plantilla para crear m??dulos que son similares a los m??dulos est??ndares de Cuentas.',
            'type_issue' => 'El tipo de plantilla de <b>Problemas</b> disponde de campos espec??ficos a incidencias y casos internos, como por ejemplo, N??mero, Estado, Prioridad, Descripci??n. <br /><br />Utilice esta plantilla para crear m??dulos que son similares a los m??dulos est??ndares de Incidencias y Seguimiento de Casos Internos.',
            'type_person' => 'El tipo de plantilla de <b>Persona</b> disponde de campos espec??ficos al contacto, como por ejemplo, Greeting, T??tulo, Nombre, Direcci??n, N??mero de Tel??fono.  <br /><br />Utilice esta plantilla para crear m??dulos que son similares a los m??dulos est??ndares de Contactos y Potenciales.',
            'type_sale' => 'El tipo de plantilla de <b>Venta</b> dispone de campos espec??ficos a las oportunidades, como por ejemplo, Origen del Potencial, Fase, Cantidad, y Probabilidad.<br /><br />Utilice esta plantilla para crear m??dulos que son similares a los m??dulos est??ndares de las Oportunidades.',
            'type_file' => 'El tipo de plantilla de <b>Archivo<b> dispone de campos espec??ficos de Documentos, como por ejemplo, Nombre del Archivo, tipo de Documento, y Fecha de Publicaci??n. <br /><br />Utilice esta plantilla para crear m??dulos que son similares a los m??dules est??ndares de Documentos.',

        ),
        'dropdowns' => array(
            'default' => 'Todos los Menus desplegables de la aplicaci??n, se listan aqu??. <br> <br> Para realizar cambios para un men?? desplegable, haga clic en el nombre del men?? desplegable. <br><br> Realice los cambios en el <b>Editor de menus desplegables</b> en el formulario de la parte derecha del panel, y haga clic en <b>Guardar</b>. Realice los cambios que sean necesarios, y luego haga clic en "Guardar </b>. <br><br> Para crear un nuevo men?? desplegable, haga clic en <b>A??adir menu desplegable </b>. Introduzca las propiedades de la lista desplegable situada formulario en el <b>Editor de menus desplegables</b> y haga clic en <b>Guardar</b>.',
            'editdropdown' => 'Las listas desplegables pueden ser utilizadas para campos desplegables est??ndar o personalizados de cualquier m??dulo.<br><br>Proporcione un <b>Nombre</b> para la lista desplegable.<br><br>Si ha instalado otros paquetes de idioma en la aplicaci??n, podr?? seleccionar el <b>Idioma</b> a utilizar para los elementos de la lista.<br><br>En el campo <b>Nombre del Elemento</b>, proporcione un nombre para la opci??n en la lista desplegable.  Este nombre no aparecer?? en la lista visible por los usuarios.<br><br>En el campo <b>Etiqueta de Visualizaci??n</b>, proporcione una etiqueta que ser?? visible por los usuarios.<br><br>Tras proporcionar el nombre del elemento y la etiqueta de visualizaci??n, haga click en <b>Agregar</b> para a??adir el elemento a la lista desplegable.<br><br>Para cambiar el orden de los elementos en la lista, arrastre elementos y su??ltelos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualizaci??n de un elemento, haga click en el icono <b>Editar</b> e introduzca una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga click en el icono <b>Eliminar</b>.<br><br>Para deshacer un cambio realizado a una etiqueta de visualizaci??n, haga click en <b>Deshacer</b>.  Para rehacer un cambio que ha sido previamente deshecho, haga click en <b>Rehacer</b>.<br><br>Haga click en <b>guardar</b> para guardar la lista desplegable.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Todos los campos que pueden ser mostrados en el <b>Subpanel</b> aparecen aqu??.<br><br>La columna <b>Por omisi??n</b> contiene los campos que son mostrados en el Subpanel.<br/><br/>La columna <b>Disponibles</b> contiene los campos que un usuario puede seleccionar en la B??squeda para crear una vista de Lista personalizada. <br/><br/>La columna <b>Ocultos</b> contiene los campos que pueden ser agregados a las columnas Por omisi??n o Disponibles.'
        ,
            'savebtn' => 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que est??n aplicados en el m??dulo.',
            'historyBtn' => 'Haga click en <b>Ver historial</b> para ver y restaurar del historial, un dise??o previamente guardado.',
            'historyDefault' => 'Haga click en <b>Restaurar vista por omisi??n</b> para restaurar el dise??o original de una vista.',
            'Hidden' => '<b>Oculto</b> los campos no aparecer??n en el subpanel.',
            'Default' => '<b>Por defecto</b> los campos aparecen en el subpanel.',

        ),
        'listViewEditor' => array(
            'modify' => 'la columna <b>por defecto</b> contiene los campos que se muestran en una vista de lista por defecto. <br/><br/> la columna <b> Disponible</b> contiene los campos que el usuario puede elegir para crear Una lista personalizada. <br/><br/> La columna <b>Ocultos</b>contiene los campos que usted como administrador puede agregar por defecto o columnas disponibles para que los usuarios las vean.'
        ,
            'savebtn' => 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que est??n aplicados en el m??dulo.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Haga clic en <b>Restaurar por defecto</b> para restablecer una vista a su trazado original. <br><br><b>Restaurar por defecto</b> s??lo restaura la ubicaci??n del campo en el dise??o original. Para cambiar las etiquetas de campo, haga clic en el icono de edici??n junto a cada campo.',
            'Hidden' => 'Oculta campos que actualmente no estan disponibles para verlos por los usuarios en la lista de vistas.',
            'Available' => 'Activa campos que no se muestran por defecto, pero se pueden agregar a la lista de vistas para los usuarios.',
            'Default' => 'Por defecto se muestran los campos a los usuarios que no han creado lista personalizada.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Aqu?? aparecen todos los campos que se pueden mostrar en el <b>ListView</b>. <br><br>La columna <b>por defecto</b> contiene los campos que se muestran en el ListView por defecto. <br/> <br/> La columna <b>oculta</b> contiene campos que pueden agregarse por defecto o a la columna disponible.'
        ,
            'savebtn' => 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que est??n aplicados en el m??dulo.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Haga clic en <b>Restaurar por defecto</b> para restablecer una vista a su trazado original. <br><br><b>Restaurar por defecto</b> s??lo restaura la ubicaci??n del campo en el dise??o original. Para cambiar las etiquetas de campo, haga clic en el icono de edici??n junto a cada campo.',
            'Hidden' => 'Oculta campos que actualmente no estan disponibles para verlos por los usuarios en la lista de vistas.',
            'Default' => 'Por defecto se muestran los campos a los usuarios que no han creado lista personalizada.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Todos los campos que pueden ser mostrados en el formulario de <b>Filtro</b> aparecen aqu??.<br><br>La columna <b>por defecto</b> contiene los campos que ser??n mostrados en el Formulario de B??squeda. <br/><br/>La columna <b>Ocultos</b> contiene los campos disponibles para ti para que sean agregados al Formulario de B??squeda.'
        ,
            'savebtn' => 'Al hacer clic en <b>Guardar y Utilizar</b> para guardar todos los cambios y hacerlos activos',
            'Hidden' => 'Los campos oculto son campos que no se muestra en la vista de b??squeda.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Clic en <b>Restablecer</b>para reestablecer una vista a su layout original.<br><br><b>Restablecer</b> s??lo restaura el campo dentro de su lugar original en el layout. Para editar campos, da clic en "Editar" enseguida del icono "Siguiente" en cada campo.',
            'Default' => 'Los campos por defecto se mostrar??n en la vista de b??squeda.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'El ??rea de <b>Dise??o</b> contiene los campos que actualmente est??n siendo mostrados en la <b>vista de detalle</b>.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del dise??o que pueden ser agregados al mismo.<br><br>Cambie el dise??o arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Dise??o</b> as?? como dentro del mismo dise??o.<br><br>Para quitar un campo del dise??o, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasar?? a estar disponible en la Caja de Herramientas para ser agregado nuevamente.',
            'defaultquickcreate' => 'El ??rea de <b>Dise??o</b> contiene los campos que actualmente est??n siendo mostrados en el formulario de <b>Creaci??n R??pida</b>.<br><br>El formulario de Creaci??n R??pida aparece en los subpaneles de un m??dulo cuando el bot??n Crear es pulsado.<br/><br/>La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b> y los campos y elementos del dise??o que pueden ser agregados al mismo.<br><br>Cambie el dise??o arrastrando y soltando elementos y campos entre la <b>Caja de Herramientas</b> y el <b>Dise??o</b> as?? como dentro del mismo dise??o.<br><br>Para quitar un campo del dise??o, arrastre el campo a la <b>Papelera de Reciclaje</b>. El campo pasar?? a estar disponible en la Caja de Herramientas para ser agregado nuevamente.',
            //this default will be used for edit view
            'default' => 'Realice los cambios en la capa mostrada puede arrastrar y soltar elementos  y campos entre las dos areas en esta pagina. <br/><br/> La columna de la izquierda, llamada <b>caja de Herramientas</b>, contiene herramientas ??tiles, elementos y campos para modificar el dise??o. <br/><br/> El ??rea a mano derecha, llamada <b>Dise??o Actual</b> o <b>Vista previa del dise??o</b>, contiene el modulo de dise??o <br/><br/>Si el ??rea de dise??o es llamada <b>Dise??o Actual</b> Entonces usted esta trabajando en una copia de el dise??o que es actualmente mostrado en el modulo. <br/><br/>Si el ??rea de dise??o es llamada <b>Vista previa del dise??o</b> Entonces usted esta trabajando en una copia creada anteriormente Haga click en <b>Guardar</b> Nota: Si otro usuario utiliza una copia diferente de el dise??o, la que puede ver en esta ??rea tal vez no coincida con la versi??n actual.',
            'saveBtn' => 'Haga Click en <b>Guardar</b> para preservar los cambios que haga en el dise??o. Si no despliega los cambios antes de salir de estudio, los cambios no se mostrar??n en el m??dulo. Cuando vuelva a estudio para modificar el dise??o, se muestra el dise??o con los cambios preservados. el dise??o no se mostrara en el mostrara en el modulo hasta que haga click en <b>Guardar y Utilizar</b>.',
            'historyBtn' => 'Da clic en <b>Ver historial</b> para ver y restaurar plantillas previamente guardadas.<br><br><b>Restaurar</b> dentro de <b>Historial</b> restaura el primer campo creado dentro de plantillas previamente guardadas. Para cambiar etiquetas de campos, da clic en Editar enseguida de cada campo.',
            'historyDefault' => 'Haga clic en <b>Restaurar por defecto</b> para restablecer una vista a su trazado original. <br><br><b>Restaurar por defecto</b> s??lo restaura la ubicaci??n del campo en el dise??o original. Para cambiar las etiquetas de campo, haga clic en el icono de edici??n junto a cada campo.',
            'publishBtn' => 'Haga clic en <b>Guardar y Utilizar</b> para implementar el dise??o. <br><br>despu??s de implementar, el dise??o sera inmediatamente mostrado en el m??dulo.',
            'toolbox' => 'La <b>Caja de Herramientas</b> contiene una variedad de herramientas ??tiles para la edici??n de dise??os, incluyendo la Papelera, dise??o adicional de elementos y el conjunto de campos disponibles. <br/><br/>Cualquiera de los elementos y de los campos se pueden arrastrar y soltar en el dise??o, y cualquier dise??o de los elementos y campos se pueden arrastrar y soltar en la papelera. <br/><br/>Arrastrando una nueva fila o  un nuevo panel de elementos a el dise??o sera  agregado en el dise??o donde este es quitado. <br/><br/>Un campo de relleno crea espacio en blanco en el dise??o en que se haya colocado. <br/><br/> Arrastre y suelte cualquiera de los campos disponibles a un campo en un panel de intercambio de los dos.',
            'panels' => 'Esta ??rea muestra como su dise??o se publicara dentro de el modulo cuando esta se use.<br/><br/>Puede posicionar campos, columnas y paneles arrastrando y solt??ndolos en la posici??n deseada. <br/><br/>Quite elementos arrastrando y solt??ndolos en la  papelera de la caja de herramientas, o agregar nuevos elementos y campos arrastrando y soltando de la caja de herramientas en la posici??n deseada en el dise??o.',
            'delete' => 'Arrastre y suelte cualquier elemento aqui para remover de el dise??o',
            'property' => 'Edite la etiqueta mostrada para este campo. <br/>El <b>Orden de Tabulaci??n</b> controla en qu?? orden la tecla tabulador cambiar?? el foco entre los distintos campos.',
        ),
        'fieldsEditor' => array(
            'default' => 'Todos los campos que estan disponibles para el modulo actual estan listados aqui. <br><br> Los campos estandar que incluye el modulo por defecto aparecen en el area <b>Por defecto</b>. <br><br> Los campos personalizados que fueron creados para el modulo aparecen en el area <b>Personalizados</b>.<br><br>Para Editar los campos, haga click en el <b>Nombre de el Campo</b>.  Realize los cambios con el formulario de <b>Propiedades</b> de el panel de la derecha, y haga click en <b>Guardar</b>. <br><br>Mientras visualiza las propiedades de los campos, puede crear rapidamente un nuevo campo con propiedades similares haga click en <b>Clone</b>.Realice los campos que sean necesarios, y luego haga click en <b>Guardar</b> <br><br>Para crear un campo nuevo, haga click en <b>Agregar Campo</b>. Intrusca las propiedades para el campo en el formulario de <b>Propiedades</b>, y haga click en <b>Guardar</b>. El Campo nuevo aparecer??  en el area <b>Personalizado</b>.<br><br> Para Cambiar las etiquetas de cualquiera de los campos, haga click en <b>Editar Etiqutas</b>.',
            'mbDefault' => 'Los <b>Campos</b> disponibles para un m??dulo se listan aqu?? por Nombre de Campo.<br><br>Para personalizar la etiqueta del campo, haga click en el nombre del campo.<br><br>Para crear un nuevo campo, haga click en <b>Agregar Campo</b>. La etiqueta y el resto de propiedades del nuevo campo pueden ser editadas tras su creaci??n haciendo click en el Nombre de Campo.<br><br>Tras la implantaci??n del m??dulo, los nuevos campos creados con el Constructor de m??dulos ser??n tratados en el Estudio como campos est??ndar del m??dulo.',
            'addField' => 'Seleccione un <b>Tipo de Dato</b> para el nuevo campo. El tipo que seleccione determinar?? que valores pueden introducirse en el campo. Por ejemplo, s??lo se podr??n introducir n??meros enteros en campos que son del tipo Entero.<br><br> Asigne al campo un <b>Nombre</b>.  El nombre debe ser alfanum??rico y no contener espacios. El car??cter gui??n_bajo tambi??n es v??lido.<br><br> La <b>Etiqueta de Visualizaci??n</b> es la etiqueta que aparecer?? para los campos en los dise??os de m??dulos.  La <b>Etiqueta del Sistema</b> se utiliza para hacer referencia al campo en el c??digo.<br><br> Seg??n el tipo de datos seleccionado para el campo, algunas o todas las siguientes propiedades podr??n ser establecidas en el mismo:<br><br> El <b>Texto de Ayuda</b> aparece temporalmente cuando el usuario mantiene el cursor sobre el campo y puede ser utilizado para indicar al usuario el tipo de entrada deseada.<br><br> El <b>Texto de Comentario</b> s??lo se ve en el Estudio y/o Constructor de m??dulos, y puede ser utilizado para describir el campo a los administradores.<br><br> El <b>Valor por omisi??n</b> que aparecer?? en el campo.  Los usuarios podr??n introducir un nuevo valor en el campo o dejar el predeterminado.<br><br> Seleccione la opci??n de <b>Actualizaci??n Masiva</b> para poder utilizar la caracter??stica de Actualizaci??n Masiva en el campo.<br><br>El valor del <b>Tama??o M??ximo</b> determina el m??ximo n??mero de caracteres que pueden ser introducidos en el campo.<br><br> Seleccione la opci??n <b>Campo Requerido</b> para que el campo sea obligatorio, es decir, debe  suministrarse un valor para este campo para poder guardar un registro que lo contenga.<br><br> Seleccione la opci??n <b>Informable</b> para permitir que el campo sea utilizado en filtros y para mostrar datos en Informes.<br><br> Seleccione la opci??n <b>Auditar</b> para posibilitar el seguimiento de los cambios de los valores del campo en el Registro de Cambios.<br><br>Seleccione una de las opciones en el campo <b>Importable</b> para permitir, prohibir o requerir que el campo sea importado mediante el Asistente de Importaci??n.<br><br>Seleccione una opci??n en el campo <b>Combinar Duplicados</b> para habilitar o no las caracter??sticas de Combinar Duplicados y B??squeda de Duplicados.<br><br>Para ciertos tipos de datos se podr??n establecer propiedades adicionales.',
            'editField' => 'Las propiedades del campo pueden ser personalizadas.<br><br>Haga click en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.',
            'mbeditField' => 'La <b>Etiqueta de Visualizaci??n</b> de un campo de Sugar puede ser personalizada. El resto de propiedades del campo no pueden ser personalizadas.<br><br>Haga click en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.<br><br>Para quitar un campo de modo que no aparezca en el m??dulo, quite el campo de los <b>Dise??os</b> correspondientes.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exporte las personalizaciones hechas con estudio mediante la creancion de paquetes que pude cargar en otra instancia de SuiteCRM atravez de el <b>Modulo de Carga</b>.<br><br>Primero, provea un <b>Nombre del paquete</b>. Puede Proveer informaci??n del <b>Autor</b> y <b>Descripci??n</b> tambi??n para el paquete.<br><br>Seleccione el modulo(s) que contiene las personalizaciones  que usted desea exportar. Solo los m??dulos que contienen personalizaciones aparecer??n para su selecci??n. <br><br>a Continuaci??n, haga click en <b>Exportar</b> para crear un archivo .zip para el paquete que contiene las personalizaciones.',
            'exportCustomBtn' => 'Haga click en <b>Exportar</b> para crear un archivo .zip contenedor de las personaliaciones de el paquete que puede exportar.',
            'name' => 'Este es el <b>Nombre</b> de el paquete. Este nombre se mostrara durante la instalacion.',
            'author' => 'Este es el <b>Autor</b>Que se muestra durante la instalaci??n como el nombre de la entidad que cre?? el paquete. El autor puede ser tanto una persona o una empresa.',
            'description' => 'Esta es la  <b>Descripci??n</b> que se muestra durante la instalaci??n.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenido al area de <b>Herramientas para desarrolladores</b>. <br/><br/>Utilice las herramientas dentro de esta area de creaci??n y gesti??n est??ndar y personalizacion de m??dulos y campos.',
            'studioBtn' => 'Utilice <b>Estudio</b> para personalizar los m??dulos instalados.',
            'mbBtn' => 'Use el <b>Contructor de m??dulos</b> para crear nuevos m??dulos.',
            'sugarPortalBtn' => 'Utilice <b>Editor del portal SuiteCRM</b> para administrar y personalizar el portal de SuiteCRM.',
            'dropDownEditorBtn' => 'Utilice el <b>Editor desplegable </b> para a??adir y editar desplegables globales para la aplicaci??n .',
            'appBtn' => 'Utilice el modo de aplicaci??n para personalizar las propiedades incluidas en el programa, por ejemplo, c??mo muchos de los informes TPS que se muestran en la p??gina de inicio',
            'backBtn' => 'Volver a la etapa anterior.',
            'studioHelp' => 'Use el <b>Studio</b> para personalizar los m??dulos instalados.',
            'moduleBtn' => 'Haga clic para editar este m??dulo.',
            'moduleHelp' => 'Los componentes del m??dulo que puede personalizar aparecen aqu??.<br><br>Haga click en un icono para seleccionar el componente a editar.',
            'fieldsBtn' => 'Crear y personalizar los <b>Campos</b> que almacenan la informaci??n en el m??dulo.',
            'labelsBtn' => 'Editar las <b> etiquetas </ b> para mostrar los valores de este m??dulo.',
            'relationshipsBtn' => 'Agregar nuevas <b>Relaciones</b> del m??dulo o ver las existentes.',
            'layoutsBtn' => 'Personalizar los <b>Dise??os</b> del m??dulo.  Los dise??os son las diferentes vistas del m??dulo que contienen campos.<br><br>Puede establecer que campos aparecen y como son organizados en cada dise??o.',
            'subpanelBtn' => 'Determinar qu?? informaci??n es mostrada en los <b>Subpanels</b> para este m??dulo.',
            'portalBtn' => 'Personalizar los <b>Dise??os</b> del m??dulo que aparecen en el <b>portal SuiteCRM</b>.',
            'layoutsHelp' => 'Los <b>Dise??os</b> de un m??dulo que pueden ser personalizados aparecen aqu??.<br><br>Los dise??os muestran los campos y sus datos.<br><br>Haga click en un icono para seleccionar el dise??o a editar.',
            'subpanelHelp' => 'Los <b>Subpaneles</b> de un m??dulo que pueden ser personalizados aparecen aqu??.<br><br>Haga click en un icono para seleccionar el m??dulo a editar.',
            'newPackage' => 'Haga Click en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
            'exportBtn' => 'Haga clic en <b> Exportar personalizaciones </b> para crear un paquete que contiene las personalizaciones realizadas en el Estudio de los m??dulos espec??ficos.',
            'mbHelp' => 'Use <b>M??dulo Builder</b> para crear paquetes que contienen m??dulos personalizados basado en Estandares u objetos personalizados.',
            'viewBtnEditView' => 'Modifica el dise??o del modulo <b>Editar Vista</b>.',
            'viewBtnDetailView' => 'Modifica el dise??o del modulo <b>Detalles Vista</b>.',
            'viewBtnDashlet' => 'Personalizar el <b>SuiteCRM Dashlet</b> del m??dulo, incluyendo la vista de Lista y la B??squeda del SuiteCRM Dashlet.<br><br>El SuiteCRM Dashlet estar?? disponible para ser a??adido a las p??ginas del m??dulo Inicio.',
            'viewBtnListView' => 'Modifica el dise??o del modulo <b>Listar Vista</b>.',
            'searchBtn' => 'Modifica el dise??o del modulo <b>B??squeda</b>.',
            'viewBtnQuickCreate' => 'Modifica el dise??o del modulo <b>Creaci??n R??pida</b>.',
            'addLayoutHelp' => "Para crear un dise??o personalizado para un grupo de seguridad, seleccione el grupo de seguridad apropiado y la disposici??n a copiar desde un punto de partida.",
            'searchHelp' => 'Los formularios de <b>B??squeda</b> que pueden ser personalizados aparecen aqu??. <br><br>Los formularios de B??squeda contienen campos para filtrar registros.<br><br>Haga click en un icono para seleccionar el dise??o de b??squeda a editar.',
            'dashletHelp' => 'Los dise??os de <b>SuiteCRM Dashlet</b> que pueden ser personalizados aparecen aqu??.<br><br>El SuiteCRM Dashlet estar?? disponible para ser a??adido a las p??ginas del m??dulo Inicio.',
            'DashletListViewBtn' => 'La <b>vista de Lista de SuiteCRM Dashlet</b> muestra los registros bas??ndose en los f??ltros de b??squeda del SuiteCRM Dashlet.',
            'DashletSearchViewBtn' => 'La <b>B??squeda de SuiteCRM Dashlet</b> filtra los registros de la vista de lista de SuiteCRM Dashlet.',
            'popupHelp' => 'Los dise??os de <b>Ventanas Emergentes</b> que pueden ser personalizados aparecen aqui.<br>',
            'PopupListViewBtn' => 'Las <b>Listas Emergentes</b> muestran registros basados en las B??squedas emergentes.',
            'PopupSearchViewBtn' => 'La <b>B??squeda Emergente</b> muestra registros de las Listas Emergentes.',
            'BasicSearchBtn' => 'Modifique el formulario de <b>Filtro R??pido</b> que aparece en la pesta??a de Filtro R??pido en el ??rea para el Filtrado en el modulo.',
            'AdvancedSearchBtn' => 'Modifique el formulario de <b>Filtro Avanzado</b> que aparece en la pesta??a de B??squeda Avanzada en el ??rea de B??squeda en el modulo.',
            'portalHelp' => 'Administre y personalice el <b>Portal SuiteCRM</b>.',
            'SPUploadCSS' => 'Suba una <b>Hoja de estilos</b> para el Portal SuiteCRM.',
            'SPSync' => '<b>Sync</b> Personalizaciones para un instancia del el Portal SuiteCRM.',
            'Layouts' => 'Modifique los <b>Dise??os</b> de los m??dulos para el Portal SuiteCRM.',
            'portalLayoutHelp' => 'Los m??dulos dentro de el Portal SuiteCRM aparecen en esta ??rea.<br><br>Seleccione un m??dulo para editar el <b>Dise??o</b>.',
            'relationshipsHelp' => 'Se puede relacionar este m??dulo a otros m??dulos en el mismo paquete o de los m??dulos ya instalados en la Aplicaci??n.<br/><br/> Para crear una nueva relaci??n, haga clic en <b>A??adir Relaci??n</ b>. Las propiedades de la relaci??n se muestran en el formulario en la parte derecha del panel. Utilice La lista desplegable <b>Relacionado a</b>  para seleccionar el m??dulo a los que se refieren el m??dulo actual. <br><br>Provea una <b>Etiqueta</ b> que aparecer?? como t??tulo del sub-panel para el correspondiente m??dulo. <br><br>Las relaciones entre los m??dulos  se gestionar??n a trav??s de sub-paneles que aparecen debajo de la Vistas de detalle en los m??dulos.<br> <br> Para el sub-panel de el modulo relacionado, que podr??a estar en condiciones de seleccionar diferentes sub-panel de dise??os, dependiendo de en qu?? m??dulo es seleccionado para la relaci??n. <br/><br/>Haga clic en <b>Guardar </b> para crear una relaci??n. Haga clic en <b>Eliminar</b> para borrar la relaci??n de seleccionada. <br/><br/> Para editar una relaci??n existente, haga clic en <b>Nombre de Relaci??n</b>, y edite las propiedades dentro de el panel a mano derecha.',
            'relationshipHelp' => 'Las <b>Relaciones</b> pueden ser creadas entre este m??dulo y otro m??dulo personalizado o implantado.<br><br> Las relaciones se expresan visualmente a trav??s de subpaneles y relacionan campos de los registros del m??dulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relaci??n para el m??dulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos m??dulos contendr??n campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del M??dulo Principal contendr??n un subpanel, y los registros del M??dulo Relacionado contendr??n un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos m??dulos mostrar??n subpaneles.<br><br> Seleccione el <b>M??dulo Relacionado</b> para la relaci??n. <br><br>Si el tipo de relaci??n implica el uso de subpaneles, seleccione la vista de subpanel para los m??dulos correspondientes.<br><br> Haga click en <b>guardar</b> para crear la relaci??n.',
            'convertLeadHelp' => 'Aqu?? puede a??adir m??dulos para la disposici??n de convertir la pantalla y modificar los dise??os existentes. <br/> Puede reordenar los m??dulos arrastrando sus filas en la tabla. <br/> <br/> <b>M??dulo:</b> El nombre del m??dulo. <br/> <br/> <b>Requerido:</b> Los m??dulos requeridos deben ser creados o seleccionados antes de que el plomo se puede convertir. <br/> <br/> <b>Copiar datos:</b> Si est?? activado, los campos de la iniciativa se copiar??n a campos con el mismo nombre en los registros reci??n creados. <br/> <br/> <b>Permitir la selecci??n:</b> Los M??dulos con un campo de relaci??n en los contactos pueden ser seleccionados en lugar de creados durante el proceso de convertir plomo. <br/> <br/> <b>Edici??n:</b> Modificar el dise??o de convertir para este m??dulo. <br/> <br/> <b>Borrar:</b> Eliminar este m??dulo de la disposici??n de convertir. <br/> <br/>',


            'editDropDownBtn' => 'Edita un Dropdown general',
            'addDropDownBtn' => 'Agrega un nuevo Dropdown general',
        ),
        'fieldsHelp' => array(
            'default' => 'Los <b>Campos</b> del m??dulo aparecen aqu?? listados por Nombre de Campo.<br><br>La plantilla del m??dulo incluye un conjunto predeterminado de campos.<br><br>Para crear un nuevo campo, haga click en <b>Agregar Campo</b>.<br><br>Para editar un campo, haga click en el <b>Nombre de Campo</b>.<br/><br/>Tras la implantaci??n del m??dulo, los nuevos campos creados en el Constructor de m??dulos, as?? como los campos de la plantilla, se tratar??n como campos est??ndar en el Estudio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Las <b>Relaciones</b> que han sido creadas entre el m??dulo y otros m??dulos aparecen aqu??.<br><br>El <b>Nombre</b> de la relaci??n es un nombre generado por el sistema para la relaci??n.<br><br>El <b>M??dulo Principal</b> es el m??dulo que posee las relaciones. Las propiedades de la relaci??n son guardadas en tablas de la base de datos pertenecientes al m??dulo primario.<br><br>El <b>Tipo</b> es el tipo de relaci??n existente entre el M??dulo Principal y el <b>M??dulo Relacionado</b>.<br><br>Haga clic en el t??tulo de una columna para ordenar por la columna.<br><br>Haga clic en una fila de la tabla de la relaci??n para ver y editar las propiedades asociadas con la relaci??n.<br><br>Haga clic en <b>Agregar Relaci??n</b> para crear una nueva relaci??n.',
            'addrelbtn' => 'ayuda emergente para agregar relaci??n...',
            'addRelationship' => 'Las <b>Relaciones</b> pueden ser creadas entre este m??dulo y otro m??dulo personalizado o implantado.<br><br> Las relaciones se expresan visualmente a trav??s de subpaneles y relacionan campos de los registros del m??dulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relaci??n para el m??dulo:<br><br> <b>Uno-a-Uno</b> - Los registros de ambos m??dulos contendr??n campos relacionados.<br><br> <b>Uno-a-Muchos</b> - Los registros del M??dulo Principal contendr??n un subpanel, y los registros del M??dulo Relacionado contendr??n un campo relacionado.<br><br> <b>Muchos-a-Muchos</b> - Los registros de ambos m??dulos mostrar??n subpaneles.<br><br> Seleccione el <b>M??dulo Relacionado</b> para la relaci??n. <br><br>Si el tipo de relaci??n implica el uso de subpaneles, seleccione la vista de subpanel para los m??dulos correspondientes.<br><br> Haga click en <b>guardar</b> para crear la relaci??n.',
        ),
        'labelsHelp' => array(
            'default' => 'Las <b>Etiquetas</b> de los campos, as?? como otros t??tulos en el m??dulo, pueden ser cambiadas.<br><br>Edite la etiqueta haciendo click dentro del campo, introduciendo una nueva etiqueta y haciendo click en <b>guardar</b>.<br><br>Si hay alg??n paquete de idioma instalado en la aplicaci??n, puede seleccionar el <b>Idioma</b> a utilizar para las etiquetas.',
            'saveBtn' => 'Haga click en <b>guardar</b> para guardar todos los cambios.',
            'publishBtn' => 'Haga click en <b>guardar e implantar</b> para guardar todos los cambios y activarlos.',
        ),
        'portalSync' => array(
            'default' => 'Introduzca la <b>URL del Portal SuiteCRM</b> de la instancia de el portal para actualizar, y haga click en <b>Ir</b>.<br><br>Introduzca un nombre de usuario v??lido en SuiteCRM y la contrase??a, y luego haga click en <b>Empezar sincronizaci??n</b>. <br><br>Las Personalizaciones realizadas a los <b>dise??os</b>de el Portal SuiteCRM, junto con las <b>hojas de estilos</b> si uno se ha subido, se transferir??n a un instancia especificada de el portal.',
        ),
        'portalStyle' => array(
            'default' => 'Puede personalizar la apariencia del portal de Sugar mediante una hoja de estilos.<br><br>Seleccione la <b>Hoja de Estilos</b> a subir.<br><br>La hoja de estilos ser?? utilizada en el portal Sugar la pr??xima vez que realice una sincronizaci??n.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Para empezar un proyecto, haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete de su m??dulo(s) personalizado. <br/><br/> Cada paquete puede contener uno o m??s m??dulos. <br/> <br/> Por ejemplo, puede ser que desea crear un paquete que contiene un m??dulo personalizado que se relaciona con el m??dulo de Cuentas. O bien, usted puede ser que desee crear un paquete que contiene varios de los nuevos m??dulos que trabajar juntos como un proyecto y que est??n relacionadas entre s?? y con otros m??dulos existentes en la aplicaci??n.',
            'somepackages' => 'Un <b>paquete</b> act??a como un contenedor de m??dulos personalizados, que son parte de un proyecto. El paquete puede contener uno o m??s <b>m??dulos personalizados</b>, que pueden estar relacionados entre s?? o con otros m??dulos en la aplicaci??n. <br/> <br/> Despu??s de crear un paquete para su proyecto, usted puede crear M??dulos de los paquetes de inmediato, o puede volver al Constructor de M??dulos en otro momento para completar el proyecto. <br><br>Cuando el proyecto se completa, puede <b>Desplegar</b> para instalar el paquete de m??dulos personalizados dentro  de la aplicaci??n.',
            'afterSave' => 'Su nuevo paquete debe contener por lo menos un m??dulo. Usted puede crear uno o m??s m??dulos personalizados para el paquete.<br/><br/>Haga clic en <b>Nuevo M??dulo</b> para crear un m??dulo personalizado para este paquete.<br/><br/>Despu??s de crear por lo menos un m??dulo, puede publicar o desplegar en el paquete para hacerlo disponible en su instancia y / o de otras instancias de usuarios. <br/><br/>Para desplegar el paquete en un paso dentro de su instancia de SuiteCRM, haga click en <b>Desplegar</b>.<br><br>Haga click en <b>Publicar</b> para guardar el paquete como un archivo .zip. Despu??s el archivo .Zip se guarda en su sistema, utilice el <b>M??dulo de Carga</b> para Subir e instalar el paquete en su instancia de SuiteCRM.<br/><br/> Puede distribuir el archivo a otros usuarios para cargar e instalar dentro de sus propias instancias de SuiteCRM.',
            'create' => 'Un <b>paquete</b> act??a como un contenedor de m??dulos personalizados, que son parte de un proyecto. El paquete puede contener uno o m??s <b>m??dulos</b> personalizados , que pueden estar relacionados entre s?? o con otros m??dulos en la aplicaci??n. <br/><br/>Despu??s de crear un paquete para su proyecto, usted puede crear M??dulos de los paquetes de inmediato, o puede volver a la Constructor de modulos en otro momento para completar el proyecto.',
        ),
        'main' => array(
            'welcome' => 'Utilize  las <b>Herramientas de Desarrollo</b> para crear y manejar est??ndares y m??dulos personalizados y campos.<br/><br/>Para administrar los m??dulos de la aplicaci??n, haga click en <b>Estudio</b>.<br/><br/>Para crear m??dulos personalizados, haga click en <b> Constructor de Modulos</b>.',
            'studioWelcome' => 'Todos los m??dulos instalados actualmente, incluyendo est??ndar y los objetos del m??dulo de carga, son personalizables dentro Estudio.'
        ),
        'module' => array(
            'somemodules' => "Dado que el actual paquete contiene al menos un m??dulo, puede <b>Desplegar</b> los m??dulos en el paquete dentro de  su instancia de SuiteCRM o <b>Publicar</b> el paquete que se instalar?? en la actual instancia de SuiteCRM u otra Instancia utilizando el <b>M??dulo de Carga</b>.<br/><br/>Para instalar el paquete directamente dentro de su instancia de SuiteCRM, haga clic en <b>Desplegar</b>.<br><br>Para crear una archivo . zip de el paquete que puede ser cargado e instalado dentro de la instancia actual de SuiteCRM y otros casos utilizando el <b>M??dulo  de Carga</b>, haga clic en <b>Publicar</b>. <br/> <br/> Usted puede construir los m??dulos de este paquete en etapas, y publicar o desplegar cuando est?? listo para hacerlo. <br/><br/>Despu??s de la publicaci??n o el despliegue de un paquete, puede hacer cambios en el conjunto de propiedades y personalizar los m??dulos m??s. Luego volver?? a re-publicar o re-desplegar el paquete para aplicar los cambios.",
            'editView' => 'Aqu?? se pueden editar los campos ya existentes. Usted puede eliminar cualquiera de los campos ya existentes o a??adir campos disponibles en el panel de la izquierda.',
            'create' => 'Cuando escoja el tipo de <b>Tipo</b> del m??dulo que desea crear, tenga en cuenta los tipos de campos que quiera que en el m??dulo. <br/><br/>Cada plantilla del m??dulo contiene una serie de campos relacionados con el tipo de m??dulo descrito por el t??tulo.<br/><br/> <b>B??sicos</b> -Proporciona campos b??sicos que aparecen en M??dulos est??ndar, tales como el Nombre, Asignado a, el Equipo, Fecha de creaci??n y el campo Descripci??n. <br/><br/><b>Empresa</b> - Proporciona campos de una organizaci??n espec??fica, tales como Nombre de la empresa, la Industria y   Direcci??n. Utilice esta plantilla para crear m??dulos que son similares a m??dulos estandar de contabilidad.<br/><br/><b>Persona</b> - Proporciona campos espec??ficos de un individuo, como el Saludo, T??tulo, Nombre, Direcci??n y Tel??fono . Utilice esta plantilla para crear m??dulos que son similares a m??dulos estandar de contactos y clientes.<br/><br/><b>N??mero</b> - Proporciona caso de error-y campos espec??ficos, tales como N??mero, estado, prioridad Y descripci??n. Utilice esta plantilla para crear modulos similares a los estandares de Casos y Bug Tracker. <br/><br/> Nota: Despu??s de crear el m??dulo, puede editar las etiquetas de los campos proporcionado por la plantilla, as?? como Crear campos personalizados para agregar los dise??os del m??dulo.',
            'afterSave' => 'Personalice el m??dulo para que se adapte a sus necesidades de edici??n y creaci??n de campos, establezca  relaciones con otros m??dulos y la organizaci??n de los campos dentro de el dise??o.<br/><br/>Para ver los campos de la plantilla y gestionar los campos personalizados en el m??dulo, haga clic en <b>Ver Campos</b>.<br/><br/>Para crear y manejar las relaciones entre el m??dulo y otros m??dulos, ya sean m??dulos existentes u otros m??dulos personalizados en el mismo paquete, haga clic en <b>Ver Relaciones</b>.<br/><br/>Para editar los dise??os m??dulo, haga clic en <b>Ver Dise??os</b>. Puede cambiar a Vista Detallada, Editar Vista y  Listar Vista de dise??o para el modulo solo podr?? para los m??dulos existentes en la aplicaci??n dentro de estudio.<br/><br/>Para crear un m??dulo con las mismas propiedades del m??dulo actual, Haga clic en <b>Duplicar</b>. Puede personalizar a??n m??s el m??dulo nuevo.',
            'viewfields' => 'Los campos en el m??dulo puede ser personalizado para satisfacer sus necesidades.<br/><br/>No puede eliminar campos est??ndar, pero puede quitarlos de los dise??os apropiados dentro de los dise??os de p??ginas.<br/><br/>Puede editar las etiquetas de los campos est??ndar. Las otras propiedades de los campos est??ndar no son editables. Sin embargo, usted puede crear r??pidamente nuevos campos que tienen propiedades similares, haga clic en el nombre de un campo y, a continuaci??n, haga clic en <b>Clone</b> en el formulario de <b>Propiedades</ b>. Introduzca las nuevas propiedades y, a continuaci??n, haga clic en <b>Guardar</b>.<br/> <br/> Si usted es la personaliza un nuevo m??dulo, una vez que el m??dulo se ha instalado, no todas las propiedades de los campos puede ser editadas. Configure de todas las propiedades de los campos est??ndar y campos personalizados antes de publicar e instalar el paquete que contiene el m??dulo personalizado.',
            'viewrelationships' => 'Puede crear relaciones varios-a-varios entre el actual m??dulo y otros m??dulos en el paquete, y / o entre el actual m??dulo y los m??dulos ya instalados en la aplicaci??n.<br><br>Para crear relaciones uno-a-varios y uno-a-uno, cree <b>Relacionar</b> y <b>Relacionar Flex</b>campos de los m??dulos.',
            'viewlayouts' => 'Puede controlar qu?? campos est??n disponibles para la captura de datos dentro de <b>Editar Vista</b>. Tambi??n se puede controlar los datos  que se muestra dentro de <b>Ver Detalles</b>. Las vistas no tienen que coincidir.<br/><br/> La creaci??n r??pida de un formulario es mostrada cuando se hace clic en <b>Crear</ b>en un m??dulo subpanel. Por defecto, <b>Crear R??pido</ b> el formulario de el dise??o es el mismo por defecto que el dise??o de <b>Editar Vista</b>. Puede personalizar de forma r??pida Crear de manera que contenga menos y / o diferentes campos de la Vista de Dise??o.<br><br> Puede determinar el m??dulo de seguridad el usando la personalizacion de el dise??o junto con <b>Gesti??n de Roles</b>.<br><br>',
            'existingModule' => 'Despu??s de la creaci??n y personalizaci??n de este m??dulo, puede crear m??dulos adicionales o regresar al paquete a <b>Publicar</b> o <b>Desplegar</b> el paquete.<br><br>Para crear m??dulos adicionales, haga clic en <b>Duplicar</b> para crear un m??dulo con las mismas propiedades que el actual m??dulo, o navegar de vuelta al paquete, y haga clic en <b>Nuevo M??dulo</b>.<br><br>Si est?? listo a <b>Publicar</b> o <b>Desplegar</ b>, el paquete que contiene este m??dulo, navegar de vuelta al paquete para realizar estas funciones. Puede publicar y desplegar paquetes que contengan al menos un m??dulo.',
            'labels' => 'Las etiquetas de los campos estandar  as?? como los campos personalizados se pueden cambiar. Cambiar etiquetas de un campo no afectar?? a los datos almacenados en los campos.',
        ),
        'listViewEditor' => array(
            'modify' => 'Hay tres columnas que aparecen a la izquierda. La Columna "por defecto" contiene los campos que se muestran en una vista de lista por defecto, La columna "Disponible" contiene los campos que el usuario puede elegir para crear una vista de una lista personalizada, y la columna "Oculto" contiene los campos disponibles para su uso Como administrador para a??adir a las ya sea por defecto o columnas disponibles para su uso por los usuarios, pero se encuentra inhabilitado.',
            'savebtn' => 'Al hacer clic en <b>Guardar</b> guardar todos los cambios y hace que este activo',
            'Hidden' => 'Campos ocultos son campos que no est??n disponibles actualmente para los usuarios para el uso en vista de lista.',
            'Available' => 'Campos disponibles son los campos que no se muestran por defecto, pero puede ser activado por los usuarios.',
            'Default' => 'Por defecto se muestran los campos a los usuarios que no han creado una lista personalizada en la vista de ajustes.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Hay dos columnas mostradas a la izquierda. la columna "por defecto" contiene los campos que se mostrar??n en la vista de b??squeda, y la columna "Oculto" contiene los campos disponibles para usted como un administrador para a??adir a la vista.',
            'savebtn' => 'Al hacer clic en <b>Guardar y Desplegar</b> guarda todos los cambios y los hace activos',
            'Hidden' => 'Campos oculto son campos que no se muestra en la vista de b??squeda.',
            'Default' => 'Campos por defecto que se mostrar??n en la vista de b??squeda.'
        ),
        'layoutEditor' => array(
            'default' => 'Hay dos columnas mostradas a la izquierda. La columna de la derecha, el actual dise??o de la etiqueta o de dise??o de la vista previa, es donde se cambia el dise??o de el m??dulo. La columna de la izquierda, titulado Caja de herramientas, contiene elementos ??tiles y herramientas para su uso cuando la edici??n de el dise??o. <br/><br/> Si el area de dise??o,  que llevar?? por t??tulo Dise??o Actual entonces est?? trabajando en una copia de el dise??o actualmente utilizado el m??dulo de visualizaci??n.<br/><br/>Si es llamado Vista previa de dise??o de entonces Est??n trabajando en una copia creada anteriormente por un clic en el bot??n Guardar, ya que podr??a haber sido cambiado a partir de la versi??n vista por los usuarios de este m??dulo.',
            'saveBtn' => 'Al hacer clic en este bot??n guarda el dise??o de modo que usted pueda conservar sus cambios. Al volver a este m??dulo empezar?? a partir de este dise??o modificado. Su dise??o sin embargo no ser?? visto por los usuarios del m??dulo hasta que haga clic en el bot??n Guardar y Publicar.',
            'publishBtn' => 'Haga clic en este bot??n para desplegar el dise??o. Esto significa que este dise??o ser?? inmediatamente visto por los usuarios de este m??dulo.',
            'toolbox' => 'La caja de herramientas contiene una variedad de funciones ??tiles para la edici??n de dise??os, incluyendo un ??rea de la basura, un conjunto de elementos adicionales y un conjunto de campos disponibles. Cualquiera de estas puede ser arrastrado y colocado en el dise??o.',
            'panels' => 'Esta zona muestra la forma en que su dise??o se ver?? a los usuarios de este m??dulo cuando este sea mostrado.<br/><br/>Puede reposicionar elementos tales como campos, filas y paneles  arrastr??ndolos y solt??ndolos; eliminar elementos arrastr??ndolos y solt??ndolos En la zona de la basura en la caja de herramientas, o a??adir nuevos elementos arrastr??ndolos de la caja de herramientas y solt??ndolos sobre ellos en el dise??o en la posici??n deseada.'
        ),
        'dropdownEditor' => array(
            'default' => 'Hay dos columnas mostradas a la izquierda. La columna de la derecha, el actual dise??o de la etiqueta o de dise??o de la vista previa, es donde se cambia el dise??o de el m??dulo. La columna de la izquierda, titulado Caja de herramientas, contiene elementos ??tiles y herramientas para su uso cuando la edici??n de el dise??o. <br/><br/> Si el area de dise??o,  que llevar?? por t??tulo Dise??o Actual entonces est?? trabajando en una copia de el dise??o actualmente utilizado el m??dulo de visualizaci??n.<br/><br/>Si es llamado Vista previa de dise??o de entonces Est??n trabajando en una copia creada anteriormente por un clic en el bot??n Guardar, ya que podr??a haber sido cambiado a partir de la versi??n vista por los usuarios de este m??dulo.',
            'dropdownaddbtn' => 'Al hacer clic en este bot??n a??ade un nuevo elemento a la lista desplegable.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exporte personalizaciones realizadas en Estudio mediante la creaci??n de paquetes que se puede cargar en otra instancia de SuiteCRM a trav??s de el <b>M??dulo de Carga</b>.<br><br>En primer lugar, proporcione un <b>Nombre del paquete</b>. Puede proporcionar <b>Autor</b> y <b>Descripci??n</b> para la informaci??n de el paquete tambi??n.<br><br>Seleccione el m??dulo(s) que contienen la personalizaci??nes que desea exportar. S??lo los m??dulos que contiene personalizaciones aparecer?? para seleccionar.<br><br> A continuaci??n, haga clic en <b>Exportar</b> para crear un Archivo .zip para el paquete que contiene los cambios.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'Este es el <b>Nombre</b> de el paquete. Este nombre sera mostrado durante la instalaci??n.',
            'author' => 'El <b>Autor</b> es el nombre de la entidad que ha creado el paquete. El autor puede ser un individuo o una empresa.<br><br>El autor se mostrar?? en el Cargador de Modulo despu??s de que le paquete se haya subido para instalarlo con Studio.',
            'description' => 'Este es la <b>Descripci??n</b> del paquete que se muestra durante la instalaci??n.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bienvenido a el area <b>Herramientas de Desarrollo</b>.<br/><br/> Utilize las herramientas dentro de esta area para crear y manejar estandares y personalizar modulos y campos.',
            'studioBtn' => 'Utilice <b>Estudio</b> para personalizar los m??dulos instalados pora cambiar la organizaci??n de los campos, seleccionando que campos estan disponibles y creando campos de datos personalizados.',
            'mbBtn' => 'Use el <b> Contructor de m??dulos </b> para crear nuevos m??dulos',
            'appBtn' => 'Utilice el modo de aplicaci??n para personalizar las propiedades incluidas en el programa, por ejemplo, c??mo muchos de los informes TPS que se muestran en la p??gina de inicio',
            'backBtn' => 'Volver a la etapa anterior.',
            'studioHelp' => 'Use el <b>Studio</b> para personalizar los m??dulos instalados.',
            'moduleBtn' => 'Haga clic para editar este m??dulo.',
            'moduleHelp' => 'Seleccione el componente del m??dulo que desea editar',
            'fieldsBtn' => 'Modificar el tipo de informaci??n que se almacena en el m??dulo de control de la <b> Campos</b> en el m??dulo.<br/><br/>Puede editar y crear campos personalizados aqu??.',
            'labelsBtn' => 'Editar las <b> etiquetas </b> para mostrar los valores de este m??dulo.',
            'layoutsBtn' => 'Personalizar las <b> vistas </b> del dise??os de la edici??n, el detalle, el listado y la b??squeda.',
            'subpanelBtn' => 'Editar la informaci??n que se muestra en los subpaneles de los m??dulos.',
            'layoutsHelp' => 'Seleccione un <b>Dise??o para editar</b>.<br/><br/>Para cambiar el formato que contiene los campos de datos para la entrada de datos, haz clic en <b>Editar Vista</b>.<br/><br/>Para cambiar el dise??o que muestra los datos introducidos en el campo en el editor de Vista, haz clic en <b>Ver Detalles</b>. <br/><br/> Para cambiar las columnas que aparecen en la lista por defecto, haz click en <b>Vista de lista</b>.<br/><br/>Para cambiar la b??squeda B??sica y Avanzada, haz clic en <b>Buscar</b>.',
            'subpanelHelp' => 'Seleccione un <b>Subpanel</b> para editar.',
            'searchHelp' => 'Seleccione un dise??o de <b>B??squeda</b> para editar.',
            'newPackage' => 'Haga clic en <b>Nuevo Paquete</b> para crear un nuevo paquete.',
            'mbHelp' => '<b>Bienvenido al Constructor de M??dulos</ b>. <br/><br/>Use el <b>Constructor de M??dulos</ b> para crear paquetes que contienen m??dulos personalizados basado en estandares objetos personalizados. <br/><br/>Para empezar, haga clic en <b>Nuevo Paquete</ b> para crear un nuevo paquete, o seleccione un paquete para editar. <br/> <br/> Un<b>Paquete</b> Act??a como un contenedor de m??dulos personalizados, que son parte de un proyecto. El paquete puede contener uno o m??s m??dulos personalizados que pueden ser relacionados unos con otros o con los m??dulos en la aplicaci??n. <br/> <br/> Ejemplos: Es posible que desee crear un paquete que contiene un m??dulo personalizado que se relaciona con el m??dulo est??ndar de Cuentas. O bien, usted puede ser que desee crear un paquete que contiene varios de los nuevos m??dulos que trabajan juntos como un proyecto y que est??n relacionadas entre s?? y con los m??dulos en la aplicaci??n.',
            'exportBtn' => 'Haga clic en <b> Exportar personalizaciones </b> para crear un paquete que contiene las personalizaciones realizadas en el Estudio de los m??dulos espec??ficos.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Editor de Listas Desplegables',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Constructor de M??dulos',
    'LBL_STUDIO' => 'Estudio',
    'LBL_DROPDOWNEDITOR' => 'Editor de Listas Desplegables',
    'LBL_DEVELOPER_TOOLS' => 'Herramientas de Desarrollo',
    'LBL_SUITEPORTAL' => 'Editor del Portal SuiteCRM',
    'LBL_PACKAGE_LIST' => 'Lista de paquetes',
    'LBL_HOME' => 'Inicio',
    'LBL_NONE' => '-Ninguno-',
    'LBL_DEPLOYE_COMPLETE' => 'Despliegue completado',
    'LBL_DEPLOY_FAILED' => 'Ha ocurrido un error durante el proceso de despliegue. Es posible que su paquete no haya sido instalado correctamente',
    'LBL_AVAILABLE_SUBPANELS' => 'Subpaneles Disponibles',
    'LBL_ADVANCED' => 'Avanzada',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzado',
    'LBL_BASIC' => 'B??sica',
    'LBL_BASIC_SEARCH' => 'Filtro r??pido',
    'LBL_CURRENT_LAYOUT' => 'Dise??o',
    'LBL_CURRENCY' => 'Moneda',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'Vista de Lista de SuiteCRM Dashlet',
    'LBL_POPUP' => 'Vista Emergente',
    'LBL_POPUPLISTVIEW' => 'Vista de Lista Emergente',
    'LBL_POPUPSEARCH' => 'B??squeda Emergente',
    'LBL_DASHLETSEARCHVIEW' => 'B??squeda de SuiteCRM Dashlet',
    'LBL_DETAILVIEW' => 'Vista Detallada',
    'LBL_DROP_HERE' => '[Soltar Aqu??]',
    'LBL_EDIT' => 'Editar',
    'LBL_EDIT_LAYOUT' => 'Editar Dise??o',
    'LBL_EDIT_FIELDS' => 'Editar Campos',
    'LBL_EDITVIEW' => 'Vista de Edici??n',
    'LBL_FILLER' => '(relleno)',
    'LBL_FIELDS' => 'Campos',
    'LBL_FAILED_TO_SAVE' => 'Fallo al Guardar',
    'LBL_FAILED_PUBLISHED' => 'Fallo Al Publicar',
    'LBL_HOMEPAGE_PREFIX' => 'Mi',
    'LBL_LAYOUT_PREVIEW' => 'Vista Preliminar del Dise??o',
    'LBL_LAYOUTS' => 'Dise??os',
    'LBL_LISTVIEW' => 'Vista de Lista',
    'LBL_MODULES' => 'M??dulos:',
    'LBL_MODULE_TITLE' => 'Estudio',
    'LBL_NEW_PACKAGE' => 'Nuevo Paquete',
    'LBL_NEW_PANEL' => 'Nuevo Panel',
    'LBL_NEW_ROW' => 'Nueva Fila',
    'LBL_PACKAGE_DELETED' => 'Paquete Eliminado',
    'LBL_PUBLISHING' => 'Publicando ...',
    'LBL_PUBLISHED' => 'Publicado',
    'LBL_SELECT_FILE' => 'Seleccionar Archivo',
    'LBL_SUBPANELS' => 'Subpaneles',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'T??tulo:',
    'LBL_SEARCH_FORMS' => 'B??squeda',
    'LBL_SEARCH' => 'B??squeda',
    'LBL_SEARCH_BUTTON' => 'B??squeda',
    'LBL_FILTER' => 'Filtro',
    'LBL_TOOLBOX' => 'Caja de Herramientas',
    'LBL_QUICKCREATE' => 'Creaci??n R??pida',
    'LBL_EDIT_DROPDOWNS' => 'Editar un menu desplegable Global',
    'LBL_ADD_DROPDOWN' => 'Agregar un menu desplegable Global',
    'LBL_BLANK' => '-vac??o-',
    'LBL_TAB_ORDER' => '??rden de Tabulaci??n',
    'LBL_TABDEF_TYPE' => 'Tipo de Visualizaci??n:',
    'LBL_TABDEF_TYPE_HELP' => 'Seleccione la forma en la que se debe mostra esta secci??n. Esta opci??n ??nicamente tendr?? efecto si ha habilitado el modo pesta??as para esta vista.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Pesta??a',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleccione Panel para que el panel se muestre en la vista inicial o en la vista del panel anterior que se haya seleccionado como Pesta??a.  <br/>Seleccione Pesta??a para mostrar el panel en una pesta??a independiente. Cuando se ha seleccionado un panel como Pesta??a, los siguientes paneles seleccionados como Panel se mostrar??n en la vista de dicha pesta??a.  <br/>Siempre que seleccione un panel como Pesta??a ser?? el primer panel a mostrar en dicha Pesta??a.  <br/>Si se selecciona como Pesta??a el segundo panel o posteriores, el primer panel se establecer?? autom??ticamente como Pesta??a si se hubiera seleccionado anteriormente como Panel.',
    'LBL_TABDEF_COLLAPSE' => 'Contra??do',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Seleccione para que por defecto el estado del panel sea contra??do.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nombre',
    'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
    'LBL_DROPDOWN_ITEMS' => 'Elementos de Lista',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nombre del Elemento',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Mostrar Etiqueta',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincroniza con Vista de Detalle',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccione esta opci??n para sincronizar el dise??o de la Vista de Edici??n con el correspondiente dise??o de la Vista de Detalle. Los campos y su colocaci??n en la Vista de Detalle ser??n sincronizados y guardados autom??ticamente en la Vista de Detalle al pulsar en Guardar or Guardar y Desplegar en la Vista de Edici??n. No se podr??n realizar cambios en el dise??o de la Vista de Detalle.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Este DetailView es sincronizado con el EditView correspondiente. <br> Campos y colocaci??n sobre el terreno en este DetailView reflejan los campos y colocaci??n sobre el terreno en el EditView. <br> Cambios en DetailView no puede ser salvado o desplegados desde esta pagina. Realizar los cambios o quitar sincronizaci??n en la vista de EditView.',
    'LBL_COPY_FROM_EDITVIEW' => 'Copiar de la Vista de Edici??n',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Los valores son necesarios tanto para el nombre del elemento y la etiqueta de visualizaci??n. Para agregar un elemento en blanco, haga clic en Agregar, sin entrar en ning??n valor para el nombre del elemento y la etiqueta de visualizaci??n.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Clave ya existe en la lista',
    'LBL_NO_SAVE_ACTION' => 'No se ha podido encontrar la opci??n de guardar para esta vista.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento mal constituido',


//RELATIONSHIPS
    'LBL_MODULE' => 'M??dulo',
    'LBL_LHS_MODULE' => 'M??dulo Principal',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relaci??n creada en el Estudio',
    'LBL_RELATIONSHIPS' => 'Relaciones',
    'LBL_RELATIONSHIP_EDIT' => 'Editar Relaci??n',
    'LBL_REL_NAME' => 'Nombre',
    'LBL_REL_LABEL' => 'Etiqueta',
    'LBL_REL_TYPE' => 'Tipo',
    'LBL_RHS_MODULE' => 'M??dulo Relacionado',
    'LBL_NO_RELS' => 'Sin Relaciones',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condici??n Opcional',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Columna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valor',
    'LBL_SUBPANEL_FROM' => 'Subpanel de',
    'LBL_RELATIONSHIP_ONLY' => 'No se crear?? ning??n elemento visible para esta relaci??n ya que exist??a anteriormente una relaci??n visible entre estos dos m??dulos.',
    'LBL_ONETOONE' => 'Uno a Uno',
    'LBL_ONETOMANY' => 'Uno a Muchos',
    'LBL_MANYTOONE' => 'Muchos a Uno',
    'LBL_MANYTOMANY' => 'Muchos a Muchos',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Seleccione un m??dulo a editar.',
    'LBL_QUESTION_LAYOUT' => 'Seleccione un dise??o a editar.',
    'LBL_QUESTION_SUBPANEL' => 'Seleccione un subpanel a editar.',
    'LBL_QUESTION_SEARCH' => 'Seleccione un dise??o de b??squeda a editar.',
    'LBL_QUESTION_MODULE' => 'Seleccione un componente de m??dulo a editar.',
    'LBL_QUESTION_PACKAGE' => 'Seleccione un paquete a editar, o cree un nuevo paquete.',
    'LBL_QUESTION_EDITOR' => 'Seleccione una herramienta.',
    'LBL_QUESTION_DASHLET' => 'Seleccione un dise??o de dashlet a editar.',
    'LBL_QUESTION_POPUP' => 'Seleccione un dise??o emergente a editar.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nombre',
    'LBL_LABELS' => 'Etiquetas',
    'LBL_MASS_UPDATE' => 'Actualizaci??n Masiva',
    'LBL_DEFAULT_VALUE' => 'Valor por defecto',
    'LBL_REQUIRED' => 'Requerido',
    'LBL_DATA_TYPE' => 'Tipo',
    'LBL_HCUSTOM' => 'PERSONALIZADO',
    'LBL_HDEFAULT' => 'POR DEFECTO',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CUSTOM_FIELDS' => 'campo creado en Estudio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Editar Etiquetas',
    'LBL_SECTION_PACKAGES' => 'Paquetes',
    'LBL_SECTION_PACKAGE' => 'Paquete',
    'LBL_SECTION_MODULES' => 'M??dulos',
    'LBL_SECTION_DROPDOWNS' => 'Listas Desplegables',
    'LBL_SECTION_PROPERTIES' => 'Propiedades',
    'LBL_SECTION_DROPDOWNED' => 'Editar Lista Desplegable',
    'LBL_SECTION_HELP' => 'Ayuda',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
    'LBL_SECTION_DEPLOY' => 'Desplegar',
    'LBL_SECTION_MODULE' => 'M??dulo',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Por Defecto',
    'LBL_HIDDEN' => 'Oculto',
    'LBL_AVAILABLE' => 'Disponible',
    'LBL_LISTVIEW_DESCRIPTION' => 'A continuaci??n se muestran tres columnas. La columna <b>Por Defecto</b> contiene los campos que se muestran en una lista por defecto. La columna <b>Adicional</b> contiene campos que un usuario puede elegir a la hora de crear una vista personalizada. La columna <b>Disponible</b> muestra columnas disponibles para usted como administrador para, o bien a??adirlas a las columnas Por Defecto, o a las Adicionales para que sean usadas por usuarios.',
    'LBL_LISTVIEW_EDIT' => 'Editor de Listas',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Vista Preliminar',
    'LBL_MB_RESTORE' => 'Restaurar',
    'LBL_MB_DELETE' => 'Eliminar',
    'LBL_MB_DEFAULT_LAYOUT' => 'Dise??o por Defecto',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Agregar',
    'LBL_BTN_SAVE' => 'Guardar',
    'LBL_BTN_SAVE_CHANGES' => 'Guardar Cambios',
    'LBL_BTN_DONT_SAVE' => 'Descartar Cambios',
    'LBL_BTN_CANCEL' => 'Cancelar',
    'LBL_BTN_CLOSE' => 'Cerrar',
    'LBL_BTN_SAVEPUBLISH' => 'Guardar y Desplegar',
    'LBL_BTN_CLONE' => 'Clonar',
    'LBL_BTN_ADDROWS' => 'Agregar Filas',
    'LBL_BTN_ADDFIELD' => 'Agregar Campo',
    'LBL_BTN_ADDDROPDOWN' => 'Agregar Lista Desplegable',
    'LBL_BTN_SORT_ASCENDING' => 'Ordenar Ascendete',
    'LBL_BTN_SORT_DESCENDING' => 'Ordenar Descendente',
    'LBL_BTN_EDLABELS' => 'Editar Etiquetas',
    'LBL_BTN_UNDO' => 'Deshacer',
    'LBL_BTN_REDO' => 'Rehacer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Agregar Campo Personalizado',
    'LBL_BTN_EXPORT' => 'Exportar Personalizaciones',
    'LBL_BTN_DUPLICATE' => 'Duplicar',
    'LBL_BTN_PUBLISH' => 'Publicar',
    'LBL_BTN_DEPLOY' => 'Desplegar',
    'LBL_BTN_EXP' => 'Exportar',
    'LBL_BTN_DELETE' => 'Eliminar',
    'LBL_BTN_VIEW_LAYOUTS' => 'Ver Dise??os',
    'LBL_BTN_VIEW_FIELDS' => 'Ver Campos',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Ver Relaciones',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Agregar Relaci??n',
    'LBL_BTN_RENAME_MODULE' => 'Cambiar el Nombre del M??dulo',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: El campo ya existe',
    'ERROR_INVALID_KEY_VALUE' => "Error: Valor de Clave No V??lido: [&#39;]",
    'ERROR_NO_HISTORY' => 'No se han encontrado archivos en el historial',
    'ERROR_MINIMUM_FIELDS' => 'El dise??o debe contener al menos un campo',
    'ERROR_GENERIC_TITLE' => 'Ha ocurrido un error',
    'ERROR_REQUIRED_FIELDS' => '??Est?? seguro de que desea continuar? Los siguientes campos requeridos no se encuentran en el dise??o:',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nombre del Paquete:',
    'LBL_MODULE_NAME' => 'Nombre del M??dulo:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Descripci??n:',
    'LBL_KEY' => 'Clave:',
    'LBL_ADD_README' => 'L??ame',
    'LBL_LAST_MODIFIED' => '??ltima Modificaci??n:',
    'LBL_NEW_MODULE' => 'Nuevo M??dulo',
    'LBL_LABEL' => 'Etiqueta:',
    'LBL_LABEL_TITLE' => 'Etiqueta',
    'LBL_WIDTH' => 'Anchura',
    'LBL_PACKAGE' => 'Paquete:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_NAV_TAB' => 'Pesta??a de Navegaci??n',
    'LBL_CREATE' => 'Crear',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Vista',
    'LBL_HISTORY' => 'Ver Historial',
    'LBL_RESTORE_DEFAULT' => 'Restaurar Vista Por Defecto',
    'LBL_ACTIVITIES' => 'Actividades',
    'LBL_NEW' => 'Nuevo',
    'LBL_TYPE_BASIC' => 'b??sico',
    'LBL_TYPE_COMPANY' => 'empresa',
    'LBL_TYPE_PERSON' => 'persona',
    'LBL_TYPE_ISSUE' => 'problema',
    'LBL_TYPE_SALE' => 'venta',
    'LBL_TYPE_FILE' => 'archivo',
    'LBL_RSUB' => 'Este es el subpanel que se mostrar?? en su m??dulo',
    'LBL_MSUB' => 'Este es el subpanel que su m??dulo proporciona para que sea mostrado por el m??dulo relacionado',
    'LBL_MB_IMPORTABLE' => 'Importable',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] ha sido eliminado',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportar personalizaciones',
    'LBL_EC_NAME' => 'Nombre del Paquete:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Descripci??n:',
    'LBL_EC_CHECKERROR' => 'Por favor, seleccione un m??dulo.',
    'LBL_EC_CUSTOMFIELD' => 'campos personalizados',
    'LBL_EC_CUSTOMLAYOUT' => 'dise??o personalizados',
    'LBL_EC_NOCUSTOM' => 'No se ha personalizado ning??n m??dulo.',
    'LBL_EC_EMPTYCUSTOM' => 'tiene vac??as las personalizaciones.',
    'LBL_EC_EXPORTBTN' => 'Exportar',
    'LBL_MODULE_DEPLOYED' => 'El m??dulo ha sido desplegado.',
    'LBL_UNDEFINED' => 'no definido',
    'LBL_EC_VIEWS' => 'vista(s) personalizada(s)',
    'LBL_EC_SUITEFEEDS' => 'feed(s) personalizados',
    'LBL_EC_DASHLETS' => 'Dashlet(s) personalizado(s)',
    'LBL_EC_CSS' => 'css personalizado',
    'LBL_EC_TPLS' => 'tpl(s) personalizado(s)',
    'LBL_EC_IMAGES' => 'im??genes personalizadas',
    'LBL_EC_JS' => 'js(s) personalizado(s)',
    'LBL_EC_QTIP' => 'qtip(s) personalizado(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Error al recuperar datos',
    'LBL_AJAX_LOADING' => 'Cargando...',
    'LBL_AJAX_DELETING' => 'Eliminando...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construcci??n en Progreso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Despliege en Progreso...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultado',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Esta operaci??n se ha realizado correctamente',
    'LBL_AJAX_LOADING_TITLE' => 'En curso...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Por favor espere, cargando...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => '??Est?? seguro de que desea quitar este paquete? Esto eliminar?? permanentemente todos los archivos asociados con este paquete.',
    'LBL_JS_REMOVE_MODULE' => '??Est?? seguro de que desea quitar este m??dulo? Esto eliminar?? permanentemente todos los archivos asociados con este m??dulo.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Cualquier personalizaci??n que haya realizado en el Estudio ser?? sobrescrita cuando este m??dulo sea desplegado de nuevo. ??Est?? seguro de que desea proceder?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Desplegando Paquete',
    'LBL_JS_VALIDATE_NAME' => 'Nombre - Debe ser alfanum??rico, sin espacios y comenzando por letra',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'El Nombre del Paquete ya existe',
    'LBL_JS_VALIDATE_KEY' => 'Clave - Debe ser alfanum??rica',
    'LBL_JS_VALIDATE_LABEL' => 'Por favor, introduzca la etiqueta que se utilizar?? como Nombre Visible de este m??dulo',
    'LBL_JS_VALIDATE_TYPE' => 'Por favor, seleccione el tipo de m??dulo que quiere construir de la lista anterior',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiqueta - por favor, agregue la etiqueta que ser?? mostrada sobre el subpanel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Al eliminar este campo personalizado, eliminar?? tanto el campo personalizado como todos los datos de la base de datos relacionados con el campo personalizado. El campo ya no aparecer?? en ninguno de los dise??os de m??dulos. ??Desea continuar?<br /><br />Al eliminar este campo personalizado, eliminar?? tanto el campo personalizado como todos los datos en la base de datos relacionados con el campo personalizado. El campo ya no aparecer?? en ninguno de los dise??os de m??dulos, y no estar?? disponible en los Informes.\n\nEl cambio en los Informes ser?? visto tras cerrar la sesi??n y abrir una nueva, y todos los informes que contengan el campo tendr??n que ser actualizados para poder ser ejecutados.\n\n??Desea continuar?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => '??Est?? seguro de que desea eliminar esta relaci??n?',
    'LBL_CONFIRM_DONT_SAVE' => 'Hay cambios pendientes de ser guardados, ??desea guardarlos ahora?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => '??Guardar Cambios?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Los datos pueden ser truncados y ??sto no podr?? deshacerse, ??est?? seguro de que desea continuar?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Seleccione el tipo de datos apropiado acorde con el tipo de datos que ser?? introducido en el campo.',

//Revert Module labels
    'LBL_RESET' => 'Restablecer',
    'LBL_RESET_MODULE' => 'Restablecer M??dulo',
    'LBL_REMOVE_CUSTOM' => 'Quitar Personalizaciones',
    'LBL_CLEAR_RELATIONSHIPS' => 'Limpiar Relaciones',
    'LBL_RESET_LABELS' => 'Restablecer Eqiquetas',
    'LBL_RESET_LAYOUTS' => 'Restablecer Dise??os"',
    'LBL_REMOVE_FIELDS' => 'Quitar Campos Personalizados',
    'LBL_CLEAR_EXTENSIONS' => 'Limpiar Extensiones',
    'LBL_HISTORY_TIMESTAMP' => 'Registro de Tiempo',
    'LBL_HISTORY_TITLE' => 'historial',

    'fieldTypes' => array(
        'varchar' => 'Campo de Texto',
        'int' => 'Entero',
        'float' => 'Coma flotante',
        'bool' => 'Casilla de Verificaci??n',
        'enum' => 'Desplegable',
        'dynamicenum' => 'Lista Desplegable Din??mica',
        'multienum' => 'Selecci??n M??ltiple',
        'date' => 'Fecha',
        'phone' => 'Tel??fono',
        'currency' => 'Moneda',
        'html' => 'HTML',
        'radioenum' => 'Opci??n',
        'relate' => 'Relacionado',
        'address' => 'Direcci??n',
        'text' => '??rea de Texto',
        'url' => 'URL',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Fecha y hora',
        'decimal' => 'Decimal',
        'image' => 'Imagen',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Etiquetas de uso frecuente",
        "all" => "Todas las etiquetas",
    ),

    'parent' => 'Posiblemente Relacionado con',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Est?? seleccionando este elemento para su eliminaci??n de la lista desplegable. Cualquier campo desplegable que use esta lista con este elemento como valor ya no mostrar?? dicho valor, y el valor ya no podr?? ser seleccionado en los campos desplegables. ??Est?? seguro de que desea continuar?",

    'LBL_ALL_MODULES' => 'Todos los M??dulos',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionado {1} ID)',
);