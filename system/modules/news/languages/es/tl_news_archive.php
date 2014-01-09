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

$GLOBALS['TL_LANG']['tl_news_archive']['title'] = array('Título', 'Por favor introduce un título para el archivo de noticias');
$GLOBALS['TL_LANG']['tl_news_archive']['jumpTo'] = array('Saltar a página', 'Por favor selecciona la página a la que los visitates serán redirigidos al hacer clic sobre la noticia');
$GLOBALS['TL_LANG']['tl_news_archive']['allowComments'] = array('Permitir comentarios', 'Permitir a tus visitantes comentar los elementos de noticias.');
$GLOBALS['TL_LANG']['tl_news_archive']['notify'] = array('Notificar', 'Por favor selecciona quien debe ser notificado con se añadan comentarios');
$GLOBALS['TL_LANG']['tl_news_archive']['sortOrder'] = array('Tipo orden', 'Por favor selecciona el tipo de orden.');
$GLOBALS['TL_LANG']['tl_news_archive']['perPage'] = array('Items por página', 'Por favor introduce el número de comentarios por página (0=comentarios deshabilitados)');
$GLOBALS['TL_LANG']['tl_news_archive']['moderate'] = array('Moderar', 'Aprobar contenido antes de que sea publicado en la web.');
$GLOBALS['TL_LANG']['tl_news_archive']['bbcode'] = array('Permitir BBCode', 'Permite el uso de BBCode a los visitantes para formatear sus comentarios.');
$GLOBALS['TL_LANG']['tl_news_archive']['requireLogin'] = array('Requerir registro', 'No permitir a invitados crear comentarios.');
$GLOBALS['TL_LANG']['tl_news_archive']['disableCaptcha'] = array('Deshabilitar la pregunta de seguridad', 'Selecciona esta opción para deshabilitar la pregunta de seguridad (no recomendado)');
$GLOBALS['TL_LANG']['tl_news_archive']['protected'] = array('Proteger archivo', 'Mostrar elementos de noticia soloo a ciertos grupos de miembros.');
$GLOBALS['TL_LANG']['tl_news_archive']['groups'] = array('Grupos de miembros permitidos', 'Aqui puedes seleccionar a qué grupos les será permitido visionar los elementos de noticias.');
$GLOBALS['TL_LANG']['tl_news_archive']['makeFeed'] = array('Generar feed', 'Generar un feed RSS/Atom del archivo de noticias');
$GLOBALS['TL_LANG']['tl_news_archive']['format'] = array('Formato de feed', 'Por favor selecciona un formato de feed');
$GLOBALS['TL_LANG']['tl_news_archive']['language'] = array('Idioma', 'Por favor introduce el idioma se el formato RFC3066 (por ejemplo <em>es</em>).');
$GLOBALS['TL_LANG']['tl_news_archive']['source'] = array('Ajustes de exportar', 'Aqui puedes escoger qué será exportado.');
$GLOBALS['TL_LANG']['tl_news_archive']['maxItems'] = array('Número máximo de items', 'Limita el número de items exportados. Dejar en blanco o introducir un 0 para incluirlos todos.');
$GLOBALS['TL_LANG']['tl_news_archive']['feedBase'] = array('URL base', 'Por favor introduce la URL base incluyendo el protocolo (por ejemplo <em>http://</em>).');
$GLOBALS['TL_LANG']['tl_news_archive']['alias'] = array('Alias de feed', 'Aqui puedes introducir un nombre único para el feed. Un archivo XML sera generado automáticamente en el directorio raiz de la instalación TYPOlight (<em>nombre.xml</em>).');
$GLOBALS['TL_LANG']['tl_news_archive']['description'] = array('Descripción', 'Por favor introduce una descripción breve del archivo de noticias');
$GLOBALS['TL_LANG']['tl_news_archive']['tstamp'] = array('Fecha revisión', 'Fecha y hora de la última revisión');
$GLOBALS['TL_LANG']['tl_news_archive']['title_legend'] = 'Título y página de redirección.';
$GLOBALS['TL_LANG']['tl_news_archive']['comments_legend'] = 'Comentarios';
$GLOBALS['TL_LANG']['tl_news_archive']['protected_legend'] = 'Protección de acceso';
$GLOBALS['TL_LANG']['tl_news_archive']['feed_legend'] = 'RSS/Atom feed';
$GLOBALS['TL_LANG']['tl_news_archive']['notify_admin'] = 'Administrador de sistema';
$GLOBALS['TL_LANG']['tl_news_archive']['notify_author'] = 'Autor del artículo de noticia';
$GLOBALS['TL_LANG']['tl_news_archive']['notify_both'] = 'Autor y Administrador de sistema';
$GLOBALS['TL_LANG']['tl_news_archive']['source_teaser'] = 'Destacados de noticia';
$GLOBALS['TL_LANG']['tl_news_archive']['source_text'] = 'Noticias completas';
$GLOBALS['TL_LANG']['tl_news_archive']['new'] = array('Archivo nuevo', 'Crear un archivo nuevo');
$GLOBALS['TL_LANG']['tl_news_archive']['show'] = array('Detalles del archivo', 'Mostrar los detalles del archivo con ID %s');
$GLOBALS['TL_LANG']['tl_news_archive']['edit'] = array('Editar archivo', 'Editar archivo con ID %s');
$GLOBALS['TL_LANG']['tl_news_archive']['editheader'] = array('Editar ajustes de archivo', 'Editar los ajustes del archivo con ID %s');
$GLOBALS['TL_LANG']['tl_news_archive']['copy'] = array('Copiar archivo', 'Copiar archivo con ID %s');
$GLOBALS['TL_LANG']['tl_news_archive']['delete'] = array('Eliminar archivo', 'Eliminar archivo con ID %s');
$GLOBALS['TL_LANG']['tl_news_archive']['comments'] = array('Comentarios', 'Mostrar comentarios del archivo con ID %s');

?>