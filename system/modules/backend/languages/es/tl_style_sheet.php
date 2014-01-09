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

$GLOBALS['TL_LANG']['tl_style_sheet']['name'] = array('Nombre', 'Por favor introduce un nombre único para la hoja de estilo.');
$GLOBALS['TL_LANG']['tl_style_sheet']['cc'] = array('Comentario condicional', 'Los comentarios condicionales te permiten crear hojas de estilo específicas para Internet Explorer');
$GLOBALS['TL_LANG']['tl_style_sheet']['media'] = array('Tipos de media', 'Si la hoja de estilo solo aplica a cierto tipos de media, puedes restringir su uso seleccionado uno o más tipos de media.');
$GLOBALS['TL_LANG']['tl_style_sheet']['mediaQuery'] = array('Consulta de medio', 'Aquí puede definir el tipo de medio utilizando una consulta de medio como <em>screen and (min-width: 800px)</em>, pantalla con una resolución mínima de 800 pixeles a lo ancho. Los tipos de medios definidos más arriba serán sobreescritos.');
$GLOBALS['TL_LANG']['tl_style_sheet']['vars'] = array('Variables globales', 'Aquí puede definir variables globales para la hoja de estilo (ej. <em>$red</em> -> <em>c00</em> o <em>$margin</em> -> <em>12px</em>).');
$GLOBALS['TL_LANG']['tl_style_sheet']['source'] = array('Archivo fuente', 'Por favor selecciona el archivo CSS que quieres importar del directorio de archivos.');
$GLOBALS['TL_LANG']['tl_style_sheet']['tstamp'] = array('Última modificación', 'Fecha y hora de la última modificación');
$GLOBALS['TL_LANG']['tl_style_sheet']['title_legend'] = 'Nombre y tipo de media';
$GLOBALS['TL_LANG']['tl_style_sheet']['media_legend'] = 'Configuración de media';
$GLOBALS['TL_LANG']['tl_style_sheet']['vars_legend'] = 'Variables globales';
$GLOBALS['TL_LANG']['tl_style_sheet']['css_imported'] = 'La hoja de estilo "%s" ha sido importada.';
$GLOBALS['TL_LANG']['tl_style_sheet']['css_renamed'] = 'La hoja de estilo "%s" ha sido importada como ""%s.';
$GLOBALS['TL_LANG']['tl_style_sheet']['new'] = array('Nueva hoja de estilos', 'Crear una hoja de estilos nueva');
$GLOBALS['TL_LANG']['tl_style_sheet']['show'] = array('Detalles de hoja de estilos', 'Mostrar los detalles de la hoja de estilo con ID %s');
$GLOBALS['TL_LANG']['tl_style_sheet']['edit'] = array('Editar hoja de estilos', 'Editar la hoja de estilos con ID %s');
$GLOBALS['TL_LANG']['tl_style_sheet']['editheader'] = array('Editar la configuración de la hoja de estilos', 'Editar la configuración de la hoja de estilos con ID %s');
$GLOBALS['TL_LANG']['tl_style_sheet']['cut'] = array('Mover la hoja de estilo', 'Mover la hoja de estilo con ID %s');
$GLOBALS['TL_LANG']['tl_style_sheet']['copy'] = array('Duplicar hoja de estilos', 'Duplicar la hoja de estilos con ID %s');
$GLOBALS['TL_LANG']['tl_style_sheet']['delete'] = array('Eliminar hoja de estilos', 'Eliminar la hoja de estilos con ID %s');
$GLOBALS['TL_LANG']['tl_style_sheet']['import'] = array('Importar CSS', 'Importar un archivo CSS');

?>