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

$GLOBALS['TL_LANG']['tl_layout']['name'] = array('Nombre del diseño', 'Por favor introduce un nombre único para el diseño.');
$GLOBALS['TL_LANG']['tl_layout']['fallback'] = array('Diseño por defecto', 'Si seleccionas esta opción, el diseño será utilizado por defecto.');
$GLOBALS['TL_LANG']['tl_layout']['header'] = array('Encabezado', 'Incluir u encabezado de página.');
$GLOBALS['TL_LANG']['tl_layout']['headerHeight'] = array('Altura de encabezado.', 'Por favor introduce la altura del encabezado.');
$GLOBALS['TL_LANG']['tl_layout']['footer'] = array('Pie de página', 'Incluir un pie de página.');
$GLOBALS['TL_LANG']['tl_layout']['footerHeight'] = array('Altura de pie de página.', 'Por favor introduce la altura del elemento pie de página.');
$GLOBALS['TL_LANG']['tl_layout']['cols'] = array('Columnas', 'Por favor selecciona el número de columnas.');
$GLOBALS['TL_LANG']['tl_layout']['1cl'] = array('Una columna', 'Solo se mostrará la columna principal.');
$GLOBALS['TL_LANG']['tl_layout']['2cll'] = array('Dos columnas con la columna principal en el lado derecho', 'La columna principal se situará en el lado derecho, al lado de la columna izquierda.');
$GLOBALS['TL_LANG']['tl_layout']['2clr'] = array('Dos columnas con la columna principal en el lado izquierdo', 'La columna principal se situará en el lado izquierdo, al lado de la columna derecha.');
$GLOBALS['TL_LANG']['tl_layout']['3cl'] = array('Tres columnas con la columna principal en el medio', 'La columna principal se mostrará en el medio de las columnas izquierda y derecha.');
$GLOBALS['TL_LANG']['tl_layout']['widthLeft'] = array('Ancho columna izquierda', 'Por favor introduce el ancho de la columna izquierda.');
$GLOBALS['TL_LANG']['tl_layout']['widthRight'] = array('Ancho columna derecha', 'Por favor introduce el ancho de la columna derecha.');
$GLOBALS['TL_LANG']['tl_layout']['sections'] = array('Diseño personalizado de secciones', 'Esta es una lista de todos los diseños personalizado de secciones que han sido definidos en el modulo de configuraciones. Por favor selecciona la secciones que deseas utilizar en este diseño.');
$GLOBALS['TL_LANG']['tl_layout']['sPosition'] = array('Posición personalizada de secciones', 'Por favor selecciona la posición de los diseños de las secciones personalizadas.');
$GLOBALS['TL_LANG']['tl_layout']['stylesheet'] = array('Hojas de estilo', 'Por favor selecciona las hojas de estilo que quieres incluir en el diseño actual.');
$GLOBALS['TL_LANG']['tl_layout']['skipTinymce'] = array('Omitir tl_files/tinymce.css', 'No incluir la hoja de estilo para TinyMCE (tl_files/tinymce.css).');
$GLOBALS['TL_LANG']['tl_layout']['webfonts'] = array('Fuentes Web de Google', 'Aqui puedes añadir fuentes web de Google a tu página. Especifica la familia fuente sin la base URL (por ejemplo.<em>Ubuntu|Ubuntu+Mono</em>).');
$GLOBALS['TL_LANG']['tl_layout']['newsfeeds'] = array('Feeds noticias RSS', 'Por favor selecciona los feeds de noticias RSS que quieres incluir en el diseño actual.');
$GLOBALS['TL_LANG']['tl_layout']['calendarfeeds'] = array('Feeds calendarios RSS', 'Por favor selecciona los feeds de calendarios RSS que quieres incluir en el diseño actual.');
$GLOBALS['TL_LANG']['tl_layout']['modules'] = array('Módulos incluidos', 'Por favor asigna cada módulo a un elemento de la página. Utiliza los botones para añadir, mover o eliminar un módulo. Si trabajas sin JavaScript, deberías guardar los cambios antes de modificar el orden!');
$GLOBALS['TL_LANG']['tl_layout']['template'] = array('Plantilla diseño', 'Por favor selecciona una plantilla de diseño. La plantilla por defecto se llama <em>fe_page</em>. Si quieres añadir tus propias plantillas, sube las al directorio <em>templates</em> (la extensión del archivo debe ser <em>tpl</em>).');
$GLOBALS['TL_LANG']['tl_layout']['skipFramework'] = array('Deshabilitar CSS', 'No cargar el framwork CSS de Contao. Tenga en cuenta que el generador del diseño no funcionará en este caso.');
$GLOBALS['TL_LANG']['tl_layout']['doctype'] = array('Definición de Tipo de Documento (DTD)', 'Por favor selecciona una DTD.');
$GLOBALS['TL_LANG']['tl_layout']['mooSource'] = array('Fuente MooTools', 'Puedes usar tanto la versión local de los Scripts MooTools o cargarla desde una red de distribución de contenidos.');
$GLOBALS['TL_LANG']['tl_layout']['cssClass'] = array('Body class', 'Aquí puedes añadir clases personalizadas a la etiqueta body');
$GLOBALS['TL_LANG']['tl_layout']['onload'] = array('Body onload', 'Si uno de tus scripts necesita un evento <em>body onload</em>, puedes añadir el código aquí.');
$GLOBALS['TL_LANG']['tl_layout']['head'] = array('Etiquetas adicionales', 'Aquí puedes añadir etiquetas meta y scripts que serán añadidos al final del encabezado de la página. Recuerda que las etiquetas meta, css y scripts se generan automáticamente.');
$GLOBALS['TL_LANG']['tl_layout']['mootools'] = array('Mootools JavaScript', 'Si quiere ejecutar un desplegable mootools en tu web, debes añadir una plantilla de JavaScript que inicialice el efecto. Puedes seleccionar esa plantilla JavaScript aqui. Las plantillas Mootools empiezan por <em>moo_</em> (extensión de archivo <em>tpl</em>).');
$GLOBALS['TL_LANG']['tl_layout']['script'] = array('Código JavaScript personalizado', 'El código JavaScript que será insertado en la sección inferior de la página.');
$GLOBALS['TL_LANG']['tl_layout']['static'] = array('Diseño estático', 'Crear un diseño de página estático con un ancho y alineación fijos.');
$GLOBALS['TL_LANG']['tl_layout']['width'] = array('Ancho general', 'Por favor introduce el ancho que se asignará al elemento general (wrapper).');
$GLOBALS['TL_LANG']['tl_layout']['align'] = array('Alineación web', 'Por favor selecciona la alineación de la web.');
$GLOBALS['TL_LANG']['tl_layout']['title_legend'] = 'Título y por defecto';
$GLOBALS['TL_LANG']['tl_layout']['header_legend'] = 'Encabezado y pie';
$GLOBALS['TL_LANG']['tl_layout']['column_legend'] = 'Ajustes de columnas';
$GLOBALS['TL_LANG']['tl_layout']['sections_legend'] = 'Secciones personalizadas';
$GLOBALS['TL_LANG']['tl_layout']['style_legend'] = 'Hojas de estilo';
$GLOBALS['TL_LANG']['tl_layout']['feed_legend'] = 'Suministros RSS/Atom';
$GLOBALS['TL_LANG']['tl_layout']['modules_legend'] = 'Módulos del Front end';
$GLOBALS['TL_LANG']['tl_layout']['expert_legend'] = 'Ajustes avanzados';
$GLOBALS['TL_LANG']['tl_layout']['script_legend'] = 'Ajustes de script';
$GLOBALS['TL_LANG']['tl_layout']['static_legend'] = 'Diseño estático';
$GLOBALS['TL_LANG']['tl_layout']['moo_local'] = 'Usar el archivo local';
$GLOBALS['TL_LANG']['tl_layout']['moo_googleapis'] = 'Cargar desde googleapis.com';
$GLOBALS['TL_LANG']['tl_layout']['moo_fallback'] = 'Cargar de googleapis.com con el fallback local';
$GLOBALS['TL_LANG']['tl_layout']['html5'] = 'HTML';
$GLOBALS['TL_LANG']['tl_layout']['xhtml_strict'] = 'XHTML estricto';
$GLOBALS['TL_LANG']['tl_layout']['xhtml_trans'] = 'XHTML Transicional';
$GLOBALS['TL_LANG']['tl_layout']['before'] = 'Despues del encabezado';
$GLOBALS['TL_LANG']['tl_layout']['main'] = 'En la columna principal';
$GLOBALS['TL_LANG']['tl_layout']['after'] = 'Antes del pie de página (footer)';
$GLOBALS['TL_LANG']['tl_layout']['edit_styles'] = 'Editar la hoja de estilo';
$GLOBALS['TL_LANG']['tl_layout']['edit_module'] = 'Editar el módulo';
$GLOBALS['TL_LANG']['tl_layout']['new'] = array('Nuevo diseño', 'Crear un diseño nuevo');
$GLOBALS['TL_LANG']['tl_layout']['show'] = array('Detalles diseño', 'Muestra detalles del diseño con ID %s');
$GLOBALS['TL_LANG']['tl_layout']['edit'] = array('Editar diseño', 'Editar diseño con ID %s');
$GLOBALS['TL_LANG']['tl_layout']['cut'] = array('Mover diseño', 'Mover diseño ID %s');
$GLOBALS['TL_LANG']['tl_layout']['copy'] = array('Duplicar diseño', 'Duplica el diseño con ID %s');
$GLOBALS['TL_LANG']['tl_layout']['delete'] = array('Eliminar diseño', 'Elimina diseño con ID %s');
$GLOBALS['TL_LANG']['tl_layout']['editheader'] = array('Editar tema', 'Editar configuración del tema');

?>