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

$GLOBALS['TL_LANG']['tl_user']['username'] = array('Usuario', 'Por favor introduce un nombre de usuario único.');
$GLOBALS['TL_LANG']['tl_user']['name'] = array('Nombre', 'Por favor introduce tu nombre y apellidos.');
$GLOBALS['TL_LANG']['tl_user']['email'] = array('Dirección e-mail', 'Por favor introduce una dirección de e-mail válida.');
$GLOBALS['TL_LANG']['tl_user']['language'] = array('Idioma del back end', 'Por favor selecciona un idioma para el back end.');
$GLOBALS['TL_LANG']['tl_user']['backendTheme'] = array('Tema del back end', 'Aquí puedes sobre escribir el tema del back end.');
$GLOBALS['TL_LANG']['tl_user']['uploader'] = array('Cargador de archivos', 'Aqui puedes elegir un cargador de archivos.');
$GLOBALS['TL_LANG']['tl_user']['showHelp'] = array('Mostrar explicación', 'Si seleccionas esta opción, se mostrará una pequeña explicación después de cada campo de entrada.');
$GLOBALS['TL_LANG']['tl_user']['thumbnails'] = array('Mostrar imágenes en miniatura', 'Si selecciona esta opción, se mostrarán imágenes en miniatura en el gestor de archivos.');
$GLOBALS['TL_LANG']['tl_user']['useRTE'] = array('Habilitar el editor de texto enriquecido (RTE)', 'Si tiene problemas al utilizar el editor de texto enriquecido (RTE), deshabilita lo aquí.');
$GLOBALS['TL_LANG']['tl_user']['useCE'] = array('Habilitar el editor de código', 'Utilizar el editor de código para modificar elementos de código.');
$GLOBALS['TL_LANG']['tl_user']['pwChange'] = array('Se requiere cambiar la contraseña', 'Esto hace que el usuario tenga que cambiar su contraseña la próxima vez que se conecte.');
$GLOBALS['TL_LANG']['tl_user']['admin'] = array('Administrador', 'Un administrador tiene acceso ilimitado a todas las páginas, módulos, extensiones y carpetas!');
$GLOBALS['TL_LANG']['tl_user']['groups'] = array('Grupos', 'Cada usuario que no es un administrador hereda todos los permisos de un grupo de usuarios. Por ello, cada usuario debe ser miembro de al menos un grupo! Si un usuario es miembro de más de un grupo, se combinan los permisos entre ellos.');
$GLOBALS['TL_LANG']['tl_user']['inherit'] = array('Heredar permisos', 'Por favor define hasta qué punto un usuario hereda permisos.');
$GLOBALS['TL_LANG']['tl_user']['group'] = array('Utiliza solo la configuración de grupo', 'el usuario actual hereda sus permisos exclusivamente de los grupos activos independientemente de la configuración individual.');
$GLOBALS['TL_LANG']['tl_user']['extend'] = array('Combinar configuración de grupo', 'permisos heredados se combinan con la configuración individual.');
$GLOBALS['TL_LANG']['tl_user']['custom'] = array('Utilizar solo configuración individual', 'solo se aplican los permisos del usuario actual independientemente de cualquier permiso de grupo.');
$GLOBALS['TL_LANG']['tl_user']['modules'] = array('Módulos back end', 'Por favor selecciona los módulos accesibles para el usuario.');
$GLOBALS['TL_LANG']['tl_user']['themes'] = array('Temas de módulos', 'Aquí puedes permitir el acceso a los temas de los módulos.');
$GLOBALS['TL_LANG']['tl_user']['pagemounts'] = array('Páginas escondidas', 'Por favor selecciona las páginas que quieres habilitar para el usuario actual. Las subpáginas serán incluidas automáticamente.');
$GLOBALS['TL_LANG']['tl_user']['alpty'] = array('Tipos de páginas permitidas', 'Por favor seleccione el tipo de paginas que desea habilitar para el usuario.');
$GLOBALS['TL_LANG']['tl_user']['filemounts'] = array('Archivos escondidas', 'Por favor selecciona las carpetas que quieres habilitar para el usuario actual. Las subcarpetas serán incluidas automáticamente.');
$GLOBALS['TL_LANG']['tl_user']['forms'] = array('Formularios', 'Por favor selecciona el tipo de formularios que quieres habilitar para este usuario');
$GLOBALS['TL_LANG']['tl_user']['formp'] = array('Permisos del formulario', 'Aquí puedes definir los permisos del formulario.');
$GLOBALS['TL_LANG']['tl_user']['disable'] = array('Desactivar', 'Si seleccionas esta opción, la cuenta actual será desactivada. El usuario no podrá acceder al sistema.');
$GLOBALS['TL_LANG']['tl_user']['start'] = array('Activar el', 'Si introduces una fecha aquí, la cuenta actual se activará en esa fecha.');
$GLOBALS['TL_LANG']['tl_user']['stop'] = array('Desactivar el', 'Si introduces una fecha aquí, la cuenta actual será desactivada en esa fecha.');
$GLOBALS['TL_LANG']['tl_user']['session'] = array('Eliminar datos de sesión', 'Si seleccionas esta opción, los datos de la sesión actual serán eliminados.');
$GLOBALS['TL_LANG']['tl_user']['name_legend'] = 'Nombre e E-mail';
$GLOBALS['TL_LANG']['tl_user']['backend_legend'] = 'Opciones del Backend';
$GLOBALS['TL_LANG']['tl_user']['theme_legend'] = 'Tema del Backend';
$GLOBALS['TL_LANG']['tl_user']['password_legend'] = 'Ajustes de Contraseña';
$GLOBALS['TL_LANG']['tl_user']['admin_legend'] = 'Administrador';
$GLOBALS['TL_LANG']['tl_user']['groups_legend'] = 'Grupos de usuarios';
$GLOBALS['TL_LANG']['tl_user']['modules_legend'] = 'Modulos permitidos';
$GLOBALS['TL_LANG']['tl_user']['pagemounts_legend'] = 'Páginas escondidas';
$GLOBALS['TL_LANG']['tl_user']['filemounts_legend'] = 'Archivos escondidos';
$GLOBALS['TL_LANG']['tl_user']['forms_legend'] = 'Formularios';
$GLOBALS['TL_LANG']['tl_user']['account_legend'] = 'Opciones de la cuenta';
$GLOBALS['TL_LANG']['tl_user']['session_legend'] = 'Limpiar caché';
$GLOBALS['TL_LANG']['tl_user']['sessionLabel'] = 'Datos de la sesión';
$GLOBALS['TL_LANG']['tl_user']['htmlLabel'] = 'Caché de imagen';
$GLOBALS['TL_LANG']['tl_user']['tempLabel'] = 'Carpeta temporal';
$GLOBALS['TL_LANG']['tl_user']['sessionPurged'] = 'Los datos de la sesión han sido purgados';
$GLOBALS['TL_LANG']['tl_user']['htmlPurged'] = 'Los datos de las imágenes han sido purgados';
$GLOBALS['TL_LANG']['tl_user']['tempPurged'] = 'La carpeta temporal ha sido purgada';
$GLOBALS['TL_LANG']['tl_user']['FileUpload'] = 'Cargador de archivos por defecto';
$GLOBALS['TL_LANG']['tl_user']['new'] = array('Nuevo usuario', 'Crear un usuario nuevo');
$GLOBALS['TL_LANG']['tl_user']['show'] = array('Detalles de usuario', 'Mostrar detalles del usuario con ID %s');
$GLOBALS['TL_LANG']['tl_user']['edit'] = array('Editar usuario', 'Editar el usuario con ID %s');
$GLOBALS['TL_LANG']['tl_user']['copy'] = array('Duplicar usuario', 'Duplicar el usuario con ID %s');
$GLOBALS['TL_LANG']['tl_user']['delete'] = array('Eliminar usuario', 'Eliminar usuario con ID %s');
$GLOBALS['TL_LANG']['tl_user']['toggle'] = array('Activar/deshabilitar usuario', 'Activar/deshabilitar usuario con ID%s');
$GLOBALS['TL_LANG']['tl_user']['su'] = array('Cambiar de usuario', 'Cambiar al usuario con ID %s');

?>