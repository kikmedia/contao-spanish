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

$GLOBALS['TL_LANG']['tl_theme']['name'] = array('Título del tema', 'Por favor ingresa un título de tema único.');
$GLOBALS['TL_LANG']['tl_theme']['author'] = array('Autor', 'Por favor ingresa el nombre del diseñador del tema.');
$GLOBALS['TL_LANG']['tl_theme']['folders'] = array('Directorios', 'Por favor selecciona los directorios que pertenecen al tema del directorio de archivos.');
$GLOBALS['TL_LANG']['tl_theme']['templates'] = array('Directorio de plantillas', 'Aquí puedes seleccionar un directorio de plantillas que será exportado con el tema.');
$GLOBALS['TL_LANG']['tl_theme']['screenshot'] = array('Captura de pantalla', 'Aquí puedes seleccionar una captura de pantalla para el tema.');
$GLOBALS['TL_LANG']['tl_theme']['vars'] = array('Variables globales', 'Aqui puede definir variables globales para la hoja de estilo del tema (p. ej. <em>$red</em> -> <em>c00</em> o <em>$margin</em> -> <em>12px</em>)');
$GLOBALS['TL_LANG']['tl_theme']['source'] = array('Archivos de fuentes', 'Por favor selecciona uno o mas archivos .cto del directorio de archivos.');
$GLOBALS['TL_LANG']['tl_theme']['tstamp'] = array('Fecha de modificación', 'Fecha y hora de la última modificación');
$GLOBALS['TL_LANG']['tl_theme']['title_legend'] = 'Título y autor';
$GLOBALS['TL_LANG']['tl_theme']['config_legend'] = 'Configuración';
$GLOBALS['TL_LANG']['tl_theme']['vars_legend'] = 'Variables globales';
$GLOBALS['TL_LANG']['tl_theme']['theme_imported'] = 'Tema "%s" ha sido importado';
$GLOBALS['TL_LANG']['tl_theme']['checking_theme'] = 'Los datos del tema estan siendo comprobados';
$GLOBALS['TL_LANG']['tl_theme']['tables_fields'] = 'Tablas y campos';
$GLOBALS['TL_LANG']['tl_theme']['missing_field'] = 'El campo <strong>%s</strong> está perdido en la base de datos y no será importado.';
$GLOBALS['TL_LANG']['tl_theme']['tables_ok'] = 'Las tablas han sido exitosamente comprobadas.';
$GLOBALS['TL_LANG']['tl_theme']['custom_sections'] = 'Secciones de diseño personalizado';
$GLOBALS['TL_LANG']['tl_theme']['missing_section'] = 'La sección de diseño <strong>%s</strong> no esta definida en la configuración del back end.';
$GLOBALS['TL_LANG']['tl_theme']['sections_ok'] = 'El tema no incluye secciones de diseño personalizado.';
$GLOBALS['TL_LANG']['tl_theme']['missing_xml'] = 'El tema "%s" esta corrupto y no puede ser importado.';
$GLOBALS['TL_LANG']['tl_theme']['custom_templates'] = 'Plantillas personalizadas';
$GLOBALS['TL_LANG']['tl_theme']['template_exists'] = 'La plantilla <strong>"%s"</strong> ya existe y será sobrescrita.';
$GLOBALS['TL_LANG']['tl_theme']['templates_ok'] = 'No se detectaron conflictos.';
$GLOBALS['TL_LANG']['tl_theme']['new'] = array('Nuevo tema', 'Crear un nuevo tema');
$GLOBALS['TL_LANG']['tl_theme']['show'] = array('Detalles del tema', 'Mostrar los detalles del tema con ID %s');
$GLOBALS['TL_LANG']['tl_theme']['edit'] = array('Editar tema', 'Editar tema con ID %s');
$GLOBALS['TL_LANG']['tl_theme']['delete'] = array('Eliminar tema', 'Eliminar tema con ID %s');
$GLOBALS['TL_LANG']['tl_theme']['css'] = array('Hojas de estilo', 'Editar la hoja de estilo del tema con ID %s');
$GLOBALS['TL_LANG']['tl_theme']['modules'] = array('Módulos', 'Editar los módulos de front end del tema con ID %s');
$GLOBALS['TL_LANG']['tl_theme']['layout'] = array('Diseños', 'Editar los diseños de página del tema con ID %s');
$GLOBALS['TL_LANG']['tl_theme']['importTheme'] = array('Importar tema', 'Importar nuevos temas');
$GLOBALS['TL_LANG']['tl_theme']['exportTheme'] = array('Exportar', 'Exportar tema con ID %s');

?>