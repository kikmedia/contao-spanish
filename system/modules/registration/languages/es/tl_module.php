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

$GLOBALS['TL_LANG']['tl_module']['disableCaptcha'] = array('Deshabilitar la pregunta de seguridad', 'Aqui puedes deshabilitar la pregunta de seguridad (no es recomendado).');
$GLOBALS['TL_LANG']['tl_module']['reg_groups'] = array('Grupos de miembros', 'Por favor asigna el usuario a uno o más grupos.');
$GLOBALS['TL_LANG']['tl_module']['reg_allowLogin'] = array('Permitir conexión', 'Si seleccionas esta opción, el nuevo usuario podrá conectarse con su nombre de usuario y contraseña.');
$GLOBALS['TL_LANG']['tl_module']['reg_skipName'] = array('Saltear nombre de usuario', 'No se requiere un nombre de usuario para solicitar una nueva contraseña.');
$GLOBALS['TL_LANG']['tl_module']['reg_close'] = array('Modalidad', 'Permite definir cómo responder a las solicitudes de eliminación.');
$GLOBALS['TL_LANG']['tl_module']['reg_assignDir'] = array('Crear directorio principal', 'Selecciona esta opción para crear automáticamente un directorio principal del nombre de usuario');
$GLOBALS['TL_LANG']['tl_module']['reg_homeDir'] = array('Directorio principal', 'Por favor selecciona el directorio del que colgará el directorio principal del usuario.');
$GLOBALS['TL_LANG']['tl_module']['reg_activate'] = array('Enviar e-mail de activación', 'Selecciona esta opción para enviar un e-mail de activación de cuenta al usuario registrado');
$GLOBALS['TL_LANG']['tl_module']['reg_jumpTo'] = array('Activación saltar a página', 'Por favor selecciona la página a la que será redirigido el usuario cuando se active su cuenta.');
$GLOBALS['TL_LANG']['tl_module']['reg_text'] = array('E-mail de activación', 'Por favor introduce el texto del e-mail de activación. Puedes utilizar cualquier campo de entrada como comodín (por ejemplo <em>##lastname##</em>) y también <em>##domain##</em> (nombre de dominio actual) y <em>##link##</em> (enlace de activacion).');
$GLOBALS['TL_LANG']['tl_module']['reg_password'] = array('E-mail de confirmación', 'Por favor introduce el texto del e-mail de confirmación. Puedes utilizar cualquier campo de entrada como comodín (por ejemplo <em>##lastname##</em>) y también <em>##domain##</em> (nombre de dominio actual) y <em>##link##</em> (enlace de activacion).');
$GLOBALS['TL_LANG']['tl_module']['account_legend'] = 'Opciones de la cuenta';
$GLOBALS['TL_LANG']['tl_module']['emailText'] = array('Su registro en %s', 'Gracias por registrar en ##domain##. Por favor haga cli en ##link## para completar su registro y activar su cuenta. Ignore este e-mail si no hizo la petición de alta.');
$GLOBALS['TL_LANG']['tl_module']['passwordText'] = array('La petición de contraseña en %s', 'Ha pedido una contraseña nueva para ##domain##. Por favor haga clic ##link## para introducir su nuevo password. Si no ha pedido una contraseña nueva, por favor contacte con el administrador de esta web.');
$GLOBALS['TL_LANG']['tl_module']['close_deactivate'] = 'Desactivar cuenta';
$GLOBALS['TL_LANG']['tl_module']['close_delete'] = 'Eliminar cuenta de manera permanente';

?>