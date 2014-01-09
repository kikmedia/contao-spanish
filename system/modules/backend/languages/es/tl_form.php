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

$GLOBALS['TL_LANG']['tl_form']['title'] = array('Título', 'Por favor introduce el título del formulario.');
$GLOBALS['TL_LANG']['tl_form']['alias'] = array('Alias de formulario', 'El alias de formulario es una referencia única al formulario que puede utilizarse en lugar de su ID numérico.');
$GLOBALS['TL_LANG']['tl_form']['jumpTo'] = array('Redirigir página', 'Normalmente un formulario se envía a otra página, que procesa los datos o muestra un mensaje. Puedes seleccionar esta página aquí.');
$GLOBALS['TL_LANG']['tl_form']['sendViaEmail'] = array('Enviar formulario por e-mail', 'Si seleccionas esta opción, el formulario se enviará por e-mail.');
$GLOBALS['TL_LANG']['tl_form']['recipient'] = array('Destinatario', 'Por favor introduce uno o más e-mails destinatarios. Separar direcciones e-mail con una coma. También puedes utilizar apodos (por ejemplo: "Nombre [nombre@dominio.com]").');
$GLOBALS['TL_LANG']['tl_form']['subject'] = array('Asunto', 'Por favor introduce el asunto. Si no introduces un asunto, es más probable que el e-mail se clasifique como SPAM.');
$GLOBALS['TL_LANG']['tl_form']['format'] = array('Formato datos', 'Por favor selecciona un formato de de datos.');
$GLOBALS['TL_LANG']['tl_form']['raw'] = array('Datos sin formato', 'Los datos del formulario se envian como texto, cada campo en una linea nueva.');
$GLOBALS['TL_LANG']['tl_form']['xml'] = array('Archivo XML', 'Los datos del formulario se envían adjuntos al e-mail en un archivo XML.');
$GLOBALS['TL_LANG']['tl_form']['csv'] = array('Archivo CSV', 'Los datos del formulario se envían adjuntos al e-mail en un archivo CSV (valores separados por comas).');
$GLOBALS['TL_LANG']['tl_form']['email'] = array('Formato e-mail', 'Este formato espera los campos <em>email</em>, <em>subject</em> and <em>message</em>. Otros campos serán ignorados. Se permite subir archivos.');
$GLOBALS['TL_LANG']['tl_form']['skipEmtpy'] = array('Omitir campos vacíos', 'Ocultar campos vacíos en el e-mail');
$GLOBALS['TL_LANG']['tl_form']['storeValues'] = array('Almacenar valores', 'Si seleccionas esta opción, los valores enviados seran guardados y reintroducidos en los campos del formulario.');
$GLOBALS['TL_LANG']['tl_form']['targetTable'] = array('Tabla datos', 'Por favor selecciona la tabla donde quieres que se guarden los datos del formulario.');
$GLOBALS['TL_LANG']['tl_form']['method'] = array('Método de envío de formulario', 'Por favor selecciona un método de envío para el formulario (por defecto: POST)');
$GLOBALS['TL_LANG']['tl_form']['attributes'] = array('ID de hoja de estilo y clase', 'Aquí puedes introducir una ID de hoja de estilo (atributo id) y una o más clases de hoja de estilo (atributos clase) para poder presentar el formulario mediante CSS.');
$GLOBALS['TL_LANG']['tl_form']['formID'] = array('ID del formulario', 'Puedes introducir una ID especial para el formulario (algunas extensions TYPOlight pueden necesitar una ID especial para el formulario).');
$GLOBALS['TL_LANG']['tl_form']['tableless'] = array('Diseño sin tablas', 'Si seleccionas esta opción, el formulario será generado sin tablas.');
$GLOBALS['TL_LANG']['tl_form']['allowTags'] = array('Permitir HTML', 'Si seleccionas esta opción, algunas etiquetas HTML no serán eliminadas (ver <em>allowedTags</em>).');
$GLOBALS['TL_LANG']['tl_form']['tstamp'] = array('Última modificación', 'Fecha y hora de la última modificación');
$GLOBALS['TL_LANG']['tl_form']['title_legend'] = 'Título y página de redirección';
$GLOBALS['TL_LANG']['tl_form']['email_legend'] = 'Enviar datos del formulario';
$GLOBALS['TL_LANG']['tl_form']['store_legend'] = 'Almacenar datos del formulario';
$GLOBALS['TL_LANG']['tl_form']['expert_legend'] = 'Ajustes avanzados';
$GLOBALS['TL_LANG']['tl_form']['config_legend'] = 'Ajustes formulario';
$GLOBALS['TL_LANG']['tl_form']['new'] = array('Nuevo formulario', 'Crear un formulario nuevo');
$GLOBALS['TL_LANG']['tl_form']['show'] = array('Detalles formulario', 'Mostrar detalles del formulario con ID %s');
$GLOBALS['TL_LANG']['tl_form']['edit'] = array('Editar formulario', 'Editar el formulario con ID %s');
$GLOBALS['TL_LANG']['tl_form']['editheader'] = array('Editar ajustes de formulario', 'Editar los ajustes del formulario con ID %s');
$GLOBALS['TL_LANG']['tl_form']['copy'] = array('Duplicar formulario', 'Duplicar formulario con ID %s');
$GLOBALS['TL_LANG']['tl_form']['delete'] = array('Eliminar formulario', 'Eliminar formulario con ID %s');

?>