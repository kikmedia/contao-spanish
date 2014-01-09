<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Roger Pau 2009
 * @copyright  Patricio F. Hamann 2010
 * @copyright  Juan José Olivera 2010
 * @copyright  Klaus Bogotz 2010
 * @copyright  Rogelio Jacinto 2011
 * @copyright  Jasmin S. 2012
 * @author     Patricio F. Hamann <hamannz@gmail.com>
 * @author     Juan José Olivera <jota.jota.or@gmail.com>
 * @author     Klaus Bogotz 2010 <klbogotz@gr7.org>
 * @author     Rogelio Jacinto <rogelio.jacinto@gmail.com>
 * @author     Jasmin S. <jasmin@faasmedia.com>
 * @package    Spanish
 * @license    LGPL
 * @filesource
 */

$GLOBALS['TL_LANG']['FFL']['headline'] = array('Titular', 'Un campo de titular puede ser utilizado como estructura de formulario, separando varios campos con titulares. Un titular puede contener código HTML.');
$GLOBALS['TL_LANG']['FFL']['explanation'] = array('Descripción', 'Un campo de descripción puede ser utilizado para introducir una descripción o pregunta delante del campo. Una descripción puede contener código HTML.');
$GLOBALS['TL_LANG']['FFL']['html'] = array('HTML', 'Utiliza este campo para introducir código HTML en el formulario.');
$GLOBALS['TL_LANG']['FFL']['fieldset'] = array('Conjunto de campos', 'Un contenedor para campos de formulario con una etiqueta opcional.');
$GLOBALS['TL_LANG']['FFL']['text'] = array('Campo de texto', 'Un campo de una linea, para un texto corto o medio.');
$GLOBALS['TL_LANG']['FFL']['password'] = array('Campo contraseña', 'Un campo de una linea para introducir la contraseña.');
$GLOBALS['TL_LANG']['FFL']['textarea'] = array('Área de texto', 'Un campo de múltiples lineas, para un texto medio o largo.');
$GLOBALS['TL_LANG']['FFL']['select'] = array('Desplegable', 'Un desplegable con varias opciones, sólo se puede seleccionar una.');
$GLOBALS['TL_LANG']['FFL']['radio'] = array('Botones radio', 'Cada opción es un botón radio, sólo se puede seleccionar una.');
$GLOBALS['TL_LANG']['FFL']['checkbox'] = array('Checkbox', 'Una o varias opciones, se pueden seleccionar múltiples opciones.');
$GLOBALS['TL_LANG']['FFL']['upload'] = array('Subir archivo', 'Permite seleccionar un archivo de su disco duro y subirlo al servidor.');
$GLOBALS['TL_LANG']['FFL']['hidden'] = array('Campo no visible', 'Un campo no visible es un campo de entrada de una línea que no se muestra en el formulario.');
$GLOBALS['TL_LANG']['FFL']['captcha'] = array('Pregunta seguridad', 'Un campo que añade una pregunta matemática sencilla, el usuario debe responder para que se envíe el formulario.');
$GLOBALS['TL_LANG']['FFL']['submit'] = array('Campo enviar', 'El campo de envío contiene el botón de enviar y datos del encabezado del formulario (por ejemplo: destinatario y asunto del e-mail).');
$GLOBALS['TL_LANG']['tl_form_field']['type'] = array('Tipo de campo', 'Por favor selecciona el tipo de campo actual.');
$GLOBALS['TL_LANG']['tl_form_field']['name'] = array('Nombre campo', 'Por favor introduce un nombre de campo. Este nombre no será visible por los usuarios de tu web.');
$GLOBALS['TL_LANG']['tl_form_field']['label'] = array('Etiqueta campo', 'Por favor introduce la etiqueta de campo. La etiqueta del campo será visible por los usuarios de tu web. Si creas una web con varios idiomas, la etiqueta debería ser traducida a cada idioma.');
$GLOBALS['TL_LANG']['tl_form_field']['text'] = array('Texto', 'Por favor introduce el titular o descripción. Se permite código HTML.');
$GLOBALS['TL_LANG']['tl_form_field']['html'] = array('HTML', 'Por favor introduce el código HTML.');
$GLOBALS['TL_LANG']['tl_form_field']['options'] = array('Opciones', 'Por favor introduce una o más opciones. Utiliza los botones para añadir, mover o borrar una opción. Si no tiene habilitado JavaScript, deberías guardar tus cambios antes de modificar el orden!');
$GLOBALS['TL_LANG']['tl_form_field']['mandatory'] = array('Campo obligatorio', 'Si seleccionas esta opción, el campo actual deberá ser rellenado.');
$GLOBALS['TL_LANG']['tl_form_field']['rgxp'] = array('Validación entrada', 'Si introduces una expresión regular, cualquier entrada en este campo será validada contra esa expresión.');
$GLOBALS['TL_LANG']['tl_form_field']['digit'] = array('Caracteres numéricos', 'Permitir caracteres numéricos, menos (-), punto (.) y espacio');
$GLOBALS['TL_LANG']['tl_form_field']['alpha'] = array('Caracteres alfabéticos', 'Permitir caracteres alfabéticos, menos (-), punto (.) y espacio');
$GLOBALS['TL_LANG']['tl_form_field']['alnum'] = array('Caracteres alfanuméricos', 'Permitir caracteres alfabéticos y numéricos, menos (-), punto (.) y espacio');
$GLOBALS['TL_LANG']['tl_form_field']['extnd'] = array('Extender caracteres alfanuméricos', 'Bloquea todos los caracteres codificados por defectos (#&()/), por ejemplo: para evitar problemas un campo de contraseña.');
$GLOBALS['TL_LANG']['tl_form_field']['date'] = array('Fecha', 'Comprueba que la entrada actual se ajusta al formato de fecha global.');
$GLOBALS['TL_LANG']['tl_form_field']['time'] = array('Hora', 'Comprueba si la entrada concuerda con el formato de hora global.');
$GLOBALS['TL_LANG']['tl_form_field']['datim'] = array('Fecha y hora', 'Comprueba que la entrada actual se ajusta al formato de fecha y hora global.');
$GLOBALS['TL_LANG']['tl_form_field']['phone'] = array('Número de teléfono', 'Permite caracteres numéricos, más (+), menos (-), barra inclinada (/), paréntesis () y espacio');
$GLOBALS['TL_LANG']['tl_form_field']['email'] = array('Dirección e-mail', 'Comprueba si la entrada corresponde a un e-mail válido.');
$GLOBALS['TL_LANG']['tl_form_field']['url'] = array('Formato URL', 'Comprueba si el valor actual es una URL válida. Una URL válida contiene los caracteres A-Za-z y estos caracteres especiales (-_.:;/?&=+#). El resto de caracteres especiales deben ser codificados!');
$GLOBALS['TL_LANG']['tl_form_field']['placeholder'] = array('Placeholder', 'Mostrar este texto, siempre y cuando el campo está vacío (requiere HTML5).');
$GLOBALS['TL_LANG']['tl_form_field']['maxlength'] = array('Tamaño máximo', 'Si introduces un valor numérico, la longitud de este campo estará limitada a ese número de caracteres. Si se trata de un campo para transferir archivos, el número introducido corresponderá al tamaño en Bytes máximo permitido para un archivo (1 MB = 1024 kB = 1024000 Bytes).');
$GLOBALS['TL_LANG']['tl_form_field']['size'] = array('Filas y columnas', 'Por favor introduce el número de filas y de columnas.');
$GLOBALS['TL_LANG']['tl_form_field']['multiple'] = array('Selección múltiple', 'Permite seleccionar más de una opción.');
$GLOBALS['TL_LANG']['tl_form_field']['mSize'] = array('Tamaño de lista', 'Por favor introduce el tamaño del desplegable.');
$GLOBALS['TL_LANG']['tl_form_field']['extensions'] = array('Tipos de archivo permitidos', 'Por favor introduce una lista de extensiones permitidas, separadas por comas. Solo se permitirá subir ese tipo de archivos.');
$GLOBALS['TL_LANG']['tl_form_field']['storeFile'] = array('Guardar archivo transferido', 'Si seleccionas esta opción, una copia del archivo transferido será almacenado en una carpeta de tu servidor. No selecciones esta opción si los archivos transferidos iran adjuntos a un e-mail y no quieres almacenar una copia.');
$GLOBALS['TL_LANG']['tl_form_field']['uploadFolder'] = array('Carpeta archivos transferidos', 'Por favor selecciona una carpeta para almacenar los archivos transferidos.');
$GLOBALS['TL_LANG']['tl_form_field']['useHomeDir'] = array('Utilizar directorio usuario', 'Si hay un usuario registrado en el sistema, almacenar el archivo en su directorio principal en vez de la carpeta para archivos transferidos.');
$GLOBALS['TL_LANG']['tl_form_field']['doNotOverwrite'] = array('No sobreescribir archivos existentes', 'Añadir un id numérico al nombre del archivo si éste ya existe.');
$GLOBALS['TL_LANG']['tl_form_field']['fsType'] = array('Modalidad de operación', 'Seleccione la modalidad de operación del elemento del conjunto de campos.');
$GLOBALS['TL_LANG']['tl_form_field']['fsStart'] = array('Inicio de contenedor', 'Marca el inicio de un conjunto de campos y puede contener una etiqueta.');
$GLOBALS['TL_LANG']['tl_form_field']['fsStop'] = array('Final de contenedor', 'Marca el final de un conjunto de campos.');
$GLOBALS['TL_LANG']['tl_form_field']['value'] = array('Valor defecto', 'El valor introducido será utilizado por defecto para el campo actual.');
$GLOBALS['TL_LANG']['tl_form_field']['class'] = array('Clase CSS', 'Aquí puedes introducir una o más clases CSS.');
$GLOBALS['TL_LANG']['tl_form_field']['accesskey'] = array('Tecla acceso directo', 'Una tecla de acceso directo es una carácter asignado a un campo del formulario. Si un usuario pulsa simultáneamente la tecla [ALT] y la tecla de acceso directo, el cursor saltará directamente al campo correspondiente (field focus).');
$GLOBALS['TL_LANG']['tl_form_field']['tabindex'] = array('Indíce tab', 'La posición del campo del formulario en orden del Tab.');
$GLOBALS['TL_LANG']['tl_form_field']['fSize'] = array('Tamaño campo', 'Aqui puedes introducier el tamaño del campo a subir (atributo tamaño).');
$GLOBALS['TL_LANG']['tl_form_field']['addSubmit'] = array('Añadir botón enviar', 'Por defecto el botón de enviar es añadido como un campo extra al final del formulario. Aunque, si seleccionas esta opción, se añadirá un botón de enviar al lado del campo actual. Utiliza esta opción para crear formularios de una linea (por ejemplo un formulario de búsqueda).');
$GLOBALS['TL_LANG']['tl_form_field']['slabel'] = array('Etiqueta del botón de enviar', 'Por favor introduce la etiqueta para el botón de enviar.');
$GLOBALS['TL_LANG']['tl_form_field']['imageSubmit'] = array('Imagen botón envío', 'Utilizar una imagen como botón de envío en vez de texto.');
$GLOBALS['TL_LANG']['tl_form_field']['singleSRC'] = array('Archivo fuente', 'Por favor selecciona una imagen del directorio de archivos.');
$GLOBALS['TL_LANG']['tl_form_field']['type_legend'] = 'Nombre y tipo de campo';
$GLOBALS['TL_LANG']['tl_form_field']['text_legend'] = 'Texto/HTML';
$GLOBALS['TL_LANG']['tl_form_field']['fconfig_legend'] = 'Ajustes de campo';
$GLOBALS['TL_LANG']['tl_form_field']['options_legend'] = 'Opciones';
$GLOBALS['TL_LANG']['tl_form_field']['store_legend'] = 'Almacenar archivo';
$GLOBALS['TL_LANG']['tl_form_field']['expert_legend'] = 'Ajustes avanzados';
$GLOBALS['TL_LANG']['tl_form_field']['submit_legend'] = 'Botón enviar';
$GLOBALS['TL_LANG']['tl_form_field']['image_legend'] = 'Botón imagen';
$GLOBALS['TL_LANG']['tl_form_field']['new'] = array('Nuevo campo', 'Crear un campo nuevo');
$GLOBALS['TL_LANG']['tl_form_field']['show'] = array('Detalles del campo', 'Mostrar los detalles del campo con ID %s');
$GLOBALS['TL_LANG']['tl_form_field']['edit'] = array('Editar campo', 'Editar el campo con ID %s');
$GLOBALS['TL_LANG']['tl_form_field']['cut'] = array('Mover campo', 'Mover el campo con ID %s');
$GLOBALS['TL_LANG']['tl_form_field']['copy'] = array('Duplicar campo', 'Duplicar el campo con ID %s');
$GLOBALS['TL_LANG']['tl_form_field']['delete'] = array('Eliminar campo', 'Eliminar el campo con ID %s');
$GLOBALS['TL_LANG']['tl_form_field']['editheader'] = array('Editar encabezado del formulario', 'Editar el encabezado de este formulario');
$GLOBALS['TL_LANG']['tl_form_field']['pasteafter'] = array('Pegar al inicio', 'Pegar después del campo con ID %s');
$GLOBALS['TL_LANG']['tl_form_field']['pastenew'] = array('Crear un nuevo campo al inicio', 'Crear un campo nuevo después del campo con ID %s');
$GLOBALS['TL_LANG']['tl_form_field']['toggle'] = array('Conmutar visibilidad', 'Conmutar la visibilidad del campo con ID %s');

?>