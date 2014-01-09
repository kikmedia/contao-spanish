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

$GLOBALS['TL_LANG']['tl_module']['list_table'] = array('Tabla', 'Por favor introduce el nombre de la talba que quieres utilizar.');
$GLOBALS['TL_LANG']['tl_module']['list_fields'] = array('Campos', 'Por favor introduce una lista separada por comas de los campos que quieres mostrar en la lista.');
$GLOBALS['TL_LANG']['tl_module']['list_where'] = array('Condición', 'Si quiere excluir cierto registros, puedes introducir una condición aqui (por ejemplo <em>published=1</em> o <em>type!=\'admin\'</em>).');
$GLOBALS['TL_LANG']['tl_module']['list_search'] = array('Campos indexados', 'Por favor introduce una lista separada por comas, de los campos que quieres que se incluyan en las búsquedas.');
$GLOBALS['TL_LANG']['tl_module']['list_sort'] = array('Ordenar por', 'Por favor introduce una lista separada por comas de los campos que se utilizaran por defecto para ordenar los resultados. Añadir <em>DESC</em> despues del nombre de campo para que se ordene en descendente (por ejemplo <em>nombre, fecha DESC</em>).');
$GLOBALS['TL_LANG']['tl_module']['list_info'] = array('Página de detalles de campo', 'Por favor introduce una lista separada por comas, de los campos que quieres mostrar en la página de detalles. Deja este campo en blanco para desactivar la opción de detalles de página.');
$GLOBALS['TL_LANG']['tl_module']['list_info_where'] = array('Detalles de la pagina de condiciones', 'Aquí puedes escribir una condicion al filtro de resultados. (Ej.: <em>published=1</em> or <em>type!="admin"</em>).');
$GLOBALS['TL_LANG']['tl_module']['list_layout'] = array('Diseño de la lista', 'Por favor selecciona un diseño de lista. Puedes añadir diseños personalizados para listas en la carpeta <em>templates</em>. Los archivos de plantillas de listas empieza por <em>list_</em> y requieren la extensión de archivo <em>.tpl</em>.');
$GLOBALS['TL_LANG']['tl_module']['list_info_layout'] = array('Diseño de página de detalles', 'Por favor selecciona un diseño de página de detalles. Puedes añadir diseños personalizados para paginas de detalles en la carpeta <em>templates</em>. Los archivos de plantillas de páginas de detalles empieza por <em>info_</em> y requieren la extensión de archivo <em>.tpl</em>.');

?>