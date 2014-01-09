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

$GLOBALS['TL_LANG']['tl_module']['cal_calendar'] = array('Calendarios', 'Seleccionar uno o más calendarios');
$GLOBALS['TL_LANG']['tl_module']['cal_noSpan'] = array('Vista resumida', 'Mostrar eventos solo una vez aun si se repiten en varios días.');
$GLOBALS['TL_LANG']['tl_module']['cal_startDay'] = array('Día de inicio de la semana', 'Seleccionar el día de inicio de la semana');
$GLOBALS['TL_LANG']['tl_module']['cal_format'] = array('Formato', 'Seleccionar un formato para la lista de eventos');
$GLOBALS['TL_LANG']['tl_module']['cal_ignoreDynamic'] = array('Ignorar parámetros de URL', 'No cambiar el periodo de tiempo basado en los parámetros date/month/year (fecha/mes/año) del URL.');
$GLOBALS['TL_LANG']['tl_module']['cal_order'] = array('Ordenamiento', 'Seleccionar el orden.');
$GLOBALS['TL_LANG']['tl_module']['cal_readerModule'] = array('Módulo de lector de eventos', 'Cambiar automaticamente al lector de eventos si un evento ha sido seleccionado.');
$GLOBALS['TL_LANG']['tl_module']['cal_limit'] = array('Número de eventos', 'Limitar el número máximo de eventos (0 para mostrar todos los eventos)');
$GLOBALS['TL_LANG']['tl_module']['cal_template'] = array('Plantilla de eventos', 'Seleccionar la plantilla de eventos. Se puede añadir diseños personalizados para eventos en la carpeta <em>templates</em>. Los archivos de plantillas de eventos empieza por <em>event_</em> y requieren la extensión de archivo <em>.tpl</em>.');
$GLOBALS['TL_LANG']['tl_module']['cal_ctemplate'] = array('Plantilla del Calendario', 'Seleccionar la plantilla para el calendario.');
$GLOBALS['TL_LANG']['tl_module']['cal_showQuantity'] = array('Mostrar número de eventos', 'Mostrar el número de eventos de cada mes en el menú.');
$GLOBALS['TL_LANG']['tl_module']['cal_list'] = 'Lista de eventos';
$GLOBALS['TL_LANG']['tl_module']['cal_day'] = 'Día';
$GLOBALS['TL_LANG']['tl_module']['cal_month'] = 'Mes';
$GLOBALS['TL_LANG']['tl_module']['cal_year'] = 'Año';
$GLOBALS['TL_LANG']['tl_module']['cal_all'] = 'Todos los eventos';
$GLOBALS['TL_LANG']['tl_module']['cal_upcoming'] = 'Eventos próximos';
$GLOBALS['TL_LANG']['tl_module']['next_7'] = '+ 1 semana';
$GLOBALS['TL_LANG']['tl_module']['next_14'] = '+ 2 semanas';
$GLOBALS['TL_LANG']['tl_module']['next_30'] = '+ 1 mes';
$GLOBALS['TL_LANG']['tl_module']['next_90'] = '+ 3 meses';
$GLOBALS['TL_LANG']['tl_module']['next_180'] = '+ 6 meses';
$GLOBALS['TL_LANG']['tl_module']['next_365'] = '+ 1 año';
$GLOBALS['TL_LANG']['tl_module']['next_two'] = '+ 2 años';
$GLOBALS['TL_LANG']['tl_module']['next_cur_month'] = 'del mes actual';
$GLOBALS['TL_LANG']['tl_module']['next_cur_year'] = 'del año actual';
$GLOBALS['TL_LANG']['tl_module']['next_all'] = 'Todos los eventos próximos';
$GLOBALS['TL_LANG']['tl_module']['cal_past'] = 'Eventos pasados';
$GLOBALS['TL_LANG']['tl_module']['past_7'] = '- 1 semana';
$GLOBALS['TL_LANG']['tl_module']['past_14'] = '- 2 semanas';
$GLOBALS['TL_LANG']['tl_module']['past_30'] = '- 1 mes';
$GLOBALS['TL_LANG']['tl_module']['past_90'] = '- 3 meses';
$GLOBALS['TL_LANG']['tl_module']['past_180'] = '- 6 meses';
$GLOBALS['TL_LANG']['tl_module']['past_365'] = '- 1 año';
$GLOBALS['TL_LANG']['tl_module']['past_two'] = '- 2 años';
$GLOBALS['TL_LANG']['tl_module']['past_cur_month'] = 'del mes actual';
$GLOBALS['TL_LANG']['tl_module']['past_cur_year'] = 'del año actual';
$GLOBALS['TL_LANG']['tl_module']['past_all'] = 'Todos los eventos pasados';

?>