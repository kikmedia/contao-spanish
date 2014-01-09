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

$GLOBALS['TL_LANG']['tl_calendar']['title'] = array('Título', 'Introduce un título para el calendario.');
$GLOBALS['TL_LANG']['tl_calendar']['jumpTo'] = array('Saltar a página', 'Selecciona la página a la que serán redirigidos los visitantes cuando hagan clic sobre un evento.');
$GLOBALS['TL_LANG']['tl_calendar']['allowComments'] = array('Habilitar comentarios', 'Permitir a los visitantes añadir comentarios a los eventos.');
$GLOBALS['TL_LANG']['tl_calendar']['notify'] = array('Notificación', 'Seleccionar a quién se debe notificar cuando se agreguen comentarios.');
$GLOBALS['TL_LANG']['tl_calendar']['sortOrder'] = array('Ordenamiento', 'De manera preestablecida los comentarios se ordenen de manera ascendente, comenzando por el más antiguo.');
$GLOBALS['TL_LANG']['tl_calendar']['perPage'] = array('Comentarios por página', 'Cantidad de comentarios por página. Introducir 0 para deshabilitar la paginación.');
$GLOBALS['TL_LANG']['tl_calendar']['moderate'] = array('Moderación', 'Permite aprobar los comentarios antes de que sean publicados en el sitio.');
$GLOBALS['TL_LANG']['tl_calendar']['bbcode'] = array('Permitir BBCode', 'Permite a los visitantes aplicar formato a sus comentarios utilizando BBCode.');
$GLOBALS['TL_LANG']['tl_calendar']['requireLogin'] = array('Requerir identificación para comentar', 'Sólo los usuarios que hayan iniciado sesión pueden crear comentarios.');
$GLOBALS['TL_LANG']['tl_calendar']['disableCaptcha'] = array('Deshabilitar pregunta de seguridad', 'Usar esta opción únicamente si la creación de comentarios está limitada a los usuarios autentificados.');
$GLOBALS['TL_LANG']['tl_calendar']['protected'] = array('Proteger calendario', 'Mostrar eventos solo a ciertos miembros de grupos.');
$GLOBALS['TL_LANG']['tl_calendar']['groups'] = array('Grupos de miembros permitidos', 'Estos grupos podrán ver los eventos.');
$GLOBALS['TL_LANG']['tl_calendar']['makeFeed'] = array('Generar feed', 'Generar un RSS/Atom feed del calendario');
$GLOBALS['TL_LANG']['tl_calendar']['format'] = array('Formato feed', 'Por favor selecciona un formato del feed');
$GLOBALS['TL_LANG']['tl_calendar']['language'] = array('Idioma', 'Introducir el idioma acorde al estándar ISO-639 (por ejemplo para español: <em>es</em>)');
$GLOBALS['TL_LANG']['tl_calendar']['source'] = array('Exportar ajustes', 'Elegir lo que se exportará.');
$GLOBALS['TL_LANG']['tl_calendar']['maxItems'] = array('Número máximo de entradas', 'Limite del número de eventos exportados. Introducir 0 para incluirlos todos.');
$GLOBALS['TL_LANG']['tl_calendar']['feedBase'] = array('URL base', 'Introduce la URL base incluyendo el protocolo (por ejemplo <em>http://</em>).');
$GLOBALS['TL_LANG']['tl_calendar']['alias'] = array('Alias feed', 'Introducir un nombre único de archivo (sin extensión). El archivo XML será generado automáticamente en la raíz de la instalación Contao (<em>name.xml</em>).');
$GLOBALS['TL_LANG']['tl_calendar']['description'] = array('Descripción', 'Introduce una breve descripción del calendario.');
$GLOBALS['TL_LANG']['tl_calendar']['tstamp'] = array('Fecha de revisión', 'Fecha y hora de la última revisión.');
$GLOBALS['TL_LANG']['tl_calendar']['title_legend'] = 'Título y páginas de redireccionamiento';
$GLOBALS['TL_LANG']['tl_calendar']['comments_legend'] = 'Comentarios';
$GLOBALS['TL_LANG']['tl_calendar']['protected_legend'] = 'Protección de acceso';
$GLOBALS['TL_LANG']['tl_calendar']['feed_legend'] = 'RSS/Atom feed';
$GLOBALS['TL_LANG']['tl_calendar']['notify_admin'] = 'Administrador del sistema';
$GLOBALS['TL_LANG']['tl_calendar']['notify_author'] = 'Autor del elemento';
$GLOBALS['TL_LANG']['tl_calendar']['notify_both'] = 'Administrador del sistema y autor del elemento';
$GLOBALS['TL_LANG']['tl_calendar']['source_teaser'] = 'Avances de eventos';
$GLOBALS['TL_LANG']['tl_calendar']['source_text'] = 'Articulos completos';
$GLOBALS['TL_LANG']['tl_calendar']['new'] = array('Nuevo calendario', 'Crear un calendario nuevo');
$GLOBALS['TL_LANG']['tl_calendar']['show'] = array('Detalles del calendario', 'Mostrar detalles del calendario con ID %s');
$GLOBALS['TL_LANG']['tl_calendar']['edit'] = array('Editar calendario', 'Editar calendario con ID %s');
$GLOBALS['TL_LANG']['tl_calendar']['editheader'] = array('Editar ajustes del calendario', 'Editar ajustes del calendario con ID %s');
$GLOBALS['TL_LANG']['tl_calendar']['copy'] = array('Copiar calendario', 'Copiar calendario con ID %s');
$GLOBALS['TL_LANG']['tl_calendar']['delete'] = array('Eliminar calendario', 'Eliminar calendario con ID %s');

?>