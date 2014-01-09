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

$GLOBALS['TL_LANG']['tl_newsletter']['subject'] = array('Asunto', 'Por favor introduzca en asunto del boletín');
$GLOBALS['TL_LANG']['tl_newsletter']['alias'] = array('Alias de boletín', 'Un alias de boletín es una referencia única al boletín que puede utilizarse para llamarlo en vez de su ID.');
$GLOBALS['TL_LANG']['tl_newsletter']['content'] = array('Contenido', 'Por favor introduce el contenido del boletín. Utilliza los comodines <em>##email##</em> para insertar el e-mail del recipiente. Generar los enlaces de baja de suscripción como <em>http://www.domain.com/unsubscribe-page.html?email=##email##</em>.');
$GLOBALS['TL_LANG']['tl_newsletter']['text'] = array('Contenido de texto', 'Aqui puedes introducir el texto del boletín. Utiliza el formato <em>##email##</em> para insertar el e-mail del recipiente.');
$GLOBALS['TL_LANG']['tl_newsletter']['addFile'] = array('Agregar adjunto', 'Adjunta uno o mas archivos al boletín.');
$GLOBALS['TL_LANG']['tl_newsletter']['files'] = array('Adjuntos', 'Por favor selecciona los archivos que quieres adjuntar al boletín.');
$GLOBALS['TL_LANG']['tl_newsletter']['template'] = array('Plantilla e-mail', 'Por favor selecciona una plantilla e-mail (grupo plantilla <em>mail_</em>).');
$GLOBALS['TL_LANG']['tl_newsletter']['sendText'] = array('Enviar como texto', 'Si selecciona esta opción, el e-mail será enviado como texto. Todas las etiquetas HTML serán eliminadas.');
$GLOBALS['TL_LANG']['tl_newsletter']['externalImages'] = array('Imágenes externas', 'Si selecciona esta opción, no se incrustarán las imágenes en los boletines HTML.');
$GLOBALS['TL_LANG']['tl_newsletter']['senderName'] = array('Nombre del remitente', 'Aqui puedes introducir el nombre del remitente');
$GLOBALS['TL_LANG']['tl_newsletter']['sender'] = array('Dirección remitente', 'Si no introduce una dirección e-mail de remitente, se utilizará el e-mail del administrador.');
$GLOBALS['TL_LANG']['tl_newsletter']['mailsPerCycle'] = array('Mails por ciclo', 'Para prevenir un timout del script, el proceso de envio se dividen en varios ciclos. Aqui puedes definir los e-mails por ciclo dependiendo del tiempo máximo de ejecución definido en tu php.ini');
$GLOBALS['TL_LANG']['tl_newsletter']['timeout'] = array('Tiempo de espera en segundos', 'Aqui pudes modificar el tiempo de espera entre cada ciclo para controlar el número de e-mails por minuto.');
$GLOBALS['TL_LANG']['tl_newsletter']['start'] = array('Iniciar ciclo', 'En el caso de que el proceso de envio sea interrumpido, puedes ingresar el número del ciclo para continuar con un destinatario en particular Puedes revisar cuantos correos electrónicos han sido enviados en el archivo <em>system/logs/newsletter_*.log</em>. Por ejemplo, si han sido enviados 120 correos electrónicos, ingresa "120" para continuar con el destinatario número 121(el conteo inicia en 0).');
$GLOBALS['TL_LANG']['tl_newsletter']['sendPreviewTo'] = array('Enviar muestra a', 'Enviar la una muestra del boletín a esta dirección e-mail');
$GLOBALS['TL_LANG']['tl_newsletter']['title_legend'] = 'Título y asunto';
$GLOBALS['TL_LANG']['tl_newsletter']['html_legend'] = 'Contenido HTML';
$GLOBALS['TL_LANG']['tl_newsletter']['text_legend'] = 'Contenido texto';
$GLOBALS['TL_LANG']['tl_newsletter']['attachment_legend'] = 'Documentso adjuntos';
$GLOBALS['TL_LANG']['tl_newsletter']['template_legend'] = 'Ajustes plantilla';
$GLOBALS['TL_LANG']['tl_newsletter']['expert_legend'] = 'Ajustes avanzados';
$GLOBALS['TL_LANG']['tl_newsletter']['sent'] = 'Enviado';
$GLOBALS['TL_LANG']['tl_newsletter']['sentOn'] = 'Enviado el %s';
$GLOBALS['TL_LANG']['tl_newsletter']['notSent'] = 'No enviando';
$GLOBALS['TL_LANG']['tl_newsletter']['mailingDate'] = 'Fecha mailing';
$GLOBALS['TL_LANG']['tl_newsletter']['confirm'] = 'El newsletter ha sido enviado a %s e-mails';
$GLOBALS['TL_LANG']['tl_newsletter']['rejected'] = 'Se ha/han desactivado la(s) direcciones de correo electrónico %s no válidas.';
$GLOBALS['TL_LANG']['tl_newsletter']['error'] = 'No hay suscripciones activas a este canal';
$GLOBALS['TL_LANG']['tl_newsletter']['from'] = 'De';
$GLOBALS['TL_LANG']['tl_newsletter']['attachments'] = 'Adjuntos';
$GLOBALS['TL_LANG']['tl_newsletter']['preview'] = 'Enviar muestra';
$GLOBALS['TL_LANG']['tl_newsletter']['sendConfirm'] = '¿Realmente quieres enviar el boletín?';
$GLOBALS['TL_LANG']['tl_newsletter']['new'] = array('Nuevo boletín', 'Crear un boletín nuevo');
$GLOBALS['TL_LANG']['tl_newsletter']['show'] = array('Detalles del boletín', 'Mostrar los detalles del boletín con ID %s');
$GLOBALS['TL_LANG']['tl_newsletter']['edit'] = array('Editar boletín', 'Editar boletín con ID %s');
$GLOBALS['TL_LANG']['tl_newsletter']['copy'] = array('Copiar boletín', 'Copiar boletín con ID %s');
$GLOBALS['TL_LANG']['tl_newsletter']['cut'] = array('Mover boletín', 'Mover boletín con ID %s');
$GLOBALS['TL_LANG']['tl_newsletter']['delete'] = array('Eliminar boletín', 'Eliminar boletín con ID %s');
$GLOBALS['TL_LANG']['tl_newsletter']['editheader'] = array('Editar canal', 'Editar el canal');
$GLOBALS['TL_LANG']['tl_newsletter']['pasteafter'] = array('Pegar en este canal', 'Colocar después del boletín con ID %s');
$GLOBALS['TL_LANG']['tl_newsletter']['send'] = array('Enviar boletín', 'Enviar boletín con ID %s');

?>