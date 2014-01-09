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

$GLOBALS['TL_LANG']['tl_calendar_events']['title'] = array('Título', 'Introduce el título del evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['alias'] = array('Alias del evento', 'El alias del evento es una referencia única al evento, lo que permite su uso como ID del evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['author'] = array('Autor', 'Aquí se puede cambiar el autor del evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['addTime'] = array('Añadir hora', 'Añadir la hora de inicio y fin del evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['startTime'] = array('Hora de inicio', 'Introducir la hora de inicio según el formato de hora global.');
$GLOBALS['TL_LANG']['tl_calendar_events']['endTime'] = array('Hora final', 'Introducir la hora final según el formato de hora global.');
$GLOBALS['TL_LANG']['tl_calendar_events']['startDate'] = array('Fecha de inicio', 'Introducir la fecha de inicio del evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['endDate'] = array('Fecha final', 'Introducir la fecha final del evento. Dejarlo en blanco para eventos de un día.');
$GLOBALS['TL_LANG']['tl_calendar_events']['teaser'] = array('Avance del evento', 'El avance del evento se puede mostrar en una lista de eventos en vez del artículo completo. Se añadirá automáticamente un enlace "Leer más .."');
$GLOBALS['TL_LANG']['tl_calendar_events']['details'] = array('Detalles del evento', 'Introduce los detalles del evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['addImage'] = array('Añadir imagen', 'Seleccionando esta opción, se añadirá una imagen al evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['recurring'] = array('Evento recurrente', 'Crear eventos recurrentes.l');
$GLOBALS['TL_LANG']['tl_calendar_events']['repeatEach'] = array('Intervalo', 'Indicar el intervalo de tiempo');
$GLOBALS['TL_LANG']['tl_calendar_events']['recurrences'] = array('Recurrencias', 'Indicar el número de recurrencias (0=ilimitado)');
$GLOBALS['TL_LANG']['tl_calendar_events']['addEnclosure'] = array('Añadir documento adjunto', 'Añadir uno o más archivos descargables al evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['enclosure'] = array('Documento adjunto', 'Seleccionar los archivos que se adjuntarán.');
$GLOBALS['TL_LANG']['tl_calendar_events']['source'] = array('Redirigir destino', 'Aquí se puede sobreescribir el destino al que se redirigirá por defecto.');
$GLOBALS['TL_LANG']['tl_calendar_events']['default'] = array('Usar predeterminado', 'Haciendo clic en el botón "leer mas ...", los visitantes serán redirigidos a la página predeterminada del calendario.');
$GLOBALS['TL_LANG']['tl_calendar_events']['internal'] = array('Página interna', 'Al hacer clic en el botón "leer más ...", los visitantes serán redirigidos a una página interna.');
$GLOBALS['TL_LANG']['tl_calendar_events']['article'] = array('Artículo', 'Al hacer clic en el botón "leer más...", los visitantes serán redirigidos a un artículo.');
$GLOBALS['TL_LANG']['tl_calendar_events']['external'] = array('Sitio Web externo', 'Al hacer clic en el botón "leer más ...", los visitantes serán redirigidos a un sitio web externo.');
$GLOBALS['TL_LANG']['tl_calendar_events']['jumpTo'] = array('Redireccionar página', 'Seleccionar la página a la que los visitantes serán redirigidos al hacer clic en el evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['articleId'] = array('Artículo', 'Seleccionar el artículo al que serán redirigidos los usuarios después de hacer clic sobre el evento.');
$GLOBALS['TL_LANG']['tl_calendar_events']['cssClass'] = array('Clase CSS', 'Aquí se puede ingresar una o más clases.');
$GLOBALS['TL_LANG']['tl_calendar_events']['noComments'] = array('Deshabilitar comentarios', 'No permitir comentarios para este evento en particular.');
$GLOBALS['TL_LANG']['tl_calendar_events']['published'] = array('Publicado', 'El evento no será visible en la web hasta que sea publicado');
$GLOBALS['TL_LANG']['tl_calendar_events']['start'] = array('Mostrar desde', 'No se muestra el evento en el sitio web antes de este día.');
$GLOBALS['TL_LANG']['tl_calendar_events']['stop'] = array('Mostrar hasta', 'No se muestra el evento en el sitio web después de este día.');
$GLOBALS['TL_LANG']['tl_calendar_events']['title_legend'] = 'Título y autor';
$GLOBALS['TL_LANG']['tl_calendar_events']['date_legend'] = 'Fecha y hora';
$GLOBALS['TL_LANG']['tl_calendar_events']['teaser_legend'] = 'Avance';
$GLOBALS['TL_LANG']['tl_calendar_events']['text_legend'] = 'Texto del evento';
$GLOBALS['TL_LANG']['tl_calendar_events']['image_legend'] = 'Imagen del artículo';
$GLOBALS['TL_LANG']['tl_calendar_events']['recurring_legend'] = 'Configuración recurrente';
$GLOBALS['TL_LANG']['tl_calendar_events']['enclosure_legend'] = 'Ámbito';
$GLOBALS['TL_LANG']['tl_calendar_events']['source_legend'] = 'Destino al que se redirige';
$GLOBALS['TL_LANG']['tl_calendar_events']['expert_legend'] = 'Configuración para expertos';
$GLOBALS['TL_LANG']['tl_calendar_events']['publish_legend'] = 'Opciones de publicación';
$GLOBALS['TL_LANG']['tl_calendar_events']['days'] = 'dia(s)';
$GLOBALS['TL_LANG']['tl_calendar_events']['weeks'] = 'semana(s)';
$GLOBALS['TL_LANG']['tl_calendar_events']['months'] = 'mes(es)';
$GLOBALS['TL_LANG']['tl_calendar_events']['years'] = 'año(s)';
$GLOBALS['TL_LANG']['tl_calendar_events']['new'] = array('Nuevo evento', 'Crear un evento nuevo');
$GLOBALS['TL_LANG']['tl_calendar_events']['show'] = array('Detalles de evento', 'Mostrar los detalles del evento con ID %s');
$GLOBALS['TL_LANG']['tl_calendar_events']['edit'] = array('Editar evento', 'Editar evento con ID %s');
$GLOBALS['TL_LANG']['tl_calendar_events']['copy'] = array('Copiar evento', 'Copiar evento con ID %s');
$GLOBALS['TL_LANG']['tl_calendar_events']['cut'] = array('Mover evento', 'Mover evento con ID %s');
$GLOBALS['TL_LANG']['tl_calendar_events']['delete'] = array('Eliminar evento', 'Eliminar evento con ID %s');
$GLOBALS['TL_LANG']['tl_calendar_events']['toggle'] = array('Publicar/retirar evento', 'Publicar/retirar el evento con ID %s');
$GLOBALS['TL_LANG']['tl_calendar_events']['editheader'] = array('Editar calendario', 'Editar el calendario actual');
$GLOBALS['TL_LANG']['tl_calendar_events']['pasteafter'] = array('Pegar en este calendario', 'Colocar después del evento con ID %s');

?>