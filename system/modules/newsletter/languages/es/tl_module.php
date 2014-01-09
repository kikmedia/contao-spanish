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

$GLOBALS['TL_LANG']['tl_module']['newsletters'] = array('Canales newsletters', 'Por favor selecciona los canales a los que el usuario se puede subscribir durante el proceso de alta.');
$GLOBALS['TL_LANG']['tl_module']['nl_channels'] = array('Canales', 'Por favor selecciona uno o más canales.');
$GLOBALS['TL_LANG']['tl_module']['nl_hideChannels'] = array('Esconder el menú de canales', 'No mostrar el menú de selección de canales');
$GLOBALS['TL_LANG']['tl_module']['nl_subscribe'] = array('E-mail de suscripción', 'Por favor introduce el texto del e-mail de suscripción. Puedes utilizar los comodines <em>##channel##</em> (nombre de canal), <em>##domain##</em> (nombre de dominio actual) y <em>##link##</em> (enlace de activacion).');
$GLOBALS['TL_LANG']['tl_module']['nl_unsubscribe'] = array('E-mail de baja de suscripción', 'Por favor introduce el texto del e-mail de baja de suscripción. Puedes utilizar los comodines <em>##channel##</em> (nombre de canal), <em>##domain##</em> (nombre de dominio actual) y <em>##link##</em> (enlace de activacion).');
$GLOBALS['TL_LANG']['tl_module']['nl_template'] = array('Diseño módulo', 'Por favor selecciona un diseño de mófulo. Puedes añadir diseños personalizados para noticias en la carpeta <em>templates</em>. Los archivos de plantillas de boletines empieza por <em>nl_</em> y requieren la extensión de archivo <em>.tpl</em>.');
$GLOBALS['TL_LANG']['tl_module']['text_subscribe'] = array('Su suscripción en %s', 'Se ha suscrito en ##channel## en ##domain##. Por favor haga clic en ##link## para compeltar su suscripción. Si no ha solicitado esta suscripción, ignore este e-mail.');
$GLOBALS['TL_LANG']['tl_module']['text_unsubscribe'] = array('Su suscripción en %s', 'Se ha dado de baja su suscripción de ##channel##.');

?>