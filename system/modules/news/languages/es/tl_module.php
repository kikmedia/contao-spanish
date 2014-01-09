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

$GLOBALS['TL_LANG']['tl_module']['news_archives'] = array('Archivo de noticias', 'Por favor selecciona uno o más archivos de noticias.');
$GLOBALS['TL_LANG']['tl_module']['news_featured'] = array('Solo artículos destacados', 'Mostrar sólo los artículos destacados');
$GLOBALS['TL_LANG']['tl_module']['news_numberOfItems'] = array('Número de noticias', 'Por favor selecciona el número artículos de noticias que se mostrarán (0=todos).');
$GLOBALS['TL_LANG']['tl_module']['news_jumpToCurrent'] = array('Salta al mes actual', 'Si seleccionas esta opción, TYPOlight saltará automáticamente al archivo de noticias del mes actual, a no ser que se haya especificado un archivo de noticias concreto.');
$GLOBALS['TL_LANG']['tl_module']['news_readerModule'] = array('Módulo de lector de noticias', 'Cambiar automaticamente al lector de noticias si un artículo ha sido seleccionado.');
$GLOBALS['TL_LANG']['tl_module']['news_metaFields'] = array('Campos de encabezado', 'Por favor selecciona los campos que quieres incluir en el encabezado de un artículo de noticias.');
$GLOBALS['TL_LANG']['tl_module']['news_template'] = array('Diseño noticias', 'Por favor selecciona un diseño de noticias. Puedes añadir diseños personalizados para noticias en la carpeta <em>templates</em>. Los archivos de plantillas de noticias empieza por <em>news_</em> y requieren la extensión de archivo <em>.tpl</em>.');
$GLOBALS['TL_LANG']['tl_module']['news_format'] = array('Formato de archivo', 'Aqui puedes escoger el formato del archivo de noticias');
$GLOBALS['TL_LANG']['tl_module']['news_startDay'] = array('Primer día de la semana', 'Permite seleccionar el día en el que inicia la semana.');
$GLOBALS['TL_LANG']['tl_module']['news_order'] = array('Ordenamiento', 'Permite seleccionar el ordenamiento.');
$GLOBALS['TL_LANG']['tl_module']['news_showQuantity'] = array('Mostrar número de entradas.', 'Si seleccionas esta opción, se mostrará el número de artículos de noticias por mes en el menú de archivos.');
$GLOBALS['TL_LANG']['tl_module']['news_day'] = 'Día';
$GLOBALS['TL_LANG']['tl_module']['news_month'] = 'Mes';
$GLOBALS['TL_LANG']['tl_module']['news_year'] = 'Año';
$GLOBALS['TL_LANG']['tl_module']['hide_module'] = 'Ocultar el módulo';
$GLOBALS['TL_LANG']['tl_module']['show_current'] = 'Saltar al periodo actual';
$GLOBALS['TL_LANG']['tl_module']['all_items'] = 'Mostrar todos los items de noticias';
$GLOBALS['TL_LANG']['tl_module']['featured'] = 'Mostrar solamente nuevos items destacados';
$GLOBALS['TL_LANG']['tl_module']['unfeatured'] = 'Saltear nuevos items destacados';

?>