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

$GLOBALS['TL_LANG']['tl_install']['installTool'] = array('Herramienta de instalación de Contao', 'Inicio de sesión de herramienta de instalación');
$GLOBALS['TL_LANG']['tl_install']['locked'] = array('La herramienta de instalación ha sido bloqueada', 'Por razones de seguridad, la herramienta de seguridad ha sido bloqueada después de que se introdujo una contraseña equivocada más de tres veces seguidas. Para desbloquearla, edite el archivo de configuración local y establezca el valor <em>installCount</em> a <em>0</em>.');
$GLOBALS['TL_LANG']['tl_install']['password'] = array('Contraseña', 'Por favor introduzca la contraseña para la herramienta de instalación. La contraseña de la herramienta de instalación no es la misma que la contraseña del módulo de gestión de Contao.');
$GLOBALS['TL_LANG']['tl_install']['changePass'] = array('Contraseña de herramienta de instalación', 'Para asegurar este script puede insertar un comando <strong>exit;</strong> en <strong>/install.php</strong> o puede eliminar completamente el archivo del servidor. En caso de eliminarlo, tendrá que editar los ajustes del sistema directamente en el archivo de configuración local.');
$GLOBALS['TL_LANG']['tl_install']['encryption'] = array('Generar una clave de encriptación', 'Esta clave se utiliza para guardar datos encriptados. Toma en cuenta que los datos encriptados sólo pueden desencriptarse con esta clave. Por lo tanto, anota la y no la cambies si ya existen datos encriptados. Deje en blanco para generar una clave aleatoria.');
$GLOBALS['TL_LANG']['tl_install']['database'] = array('Verificar conexión a la base de datos', 'Introduzca los parámetros de conexión a su base de datos.');
$GLOBALS['TL_LANG']['tl_install']['collation'] = array('Secuenciación', 'Para más información consulte el <a href="http://dev.mysql.com/doc/refman/5.1/es/charset-unicode-sets.html" onclick="window.open(this.href); return false;">manual de MySQL</a>.');
$GLOBALS['TL_LANG']['tl_install']['update'] = array('Actualizar tablas de base de datos', 'Tome en cuenta que el asistente de actualización sólo ha sido probado con los controladores MySQL y MySQLi. Si está utilizando una base de datos diferente (p.ej. Oracle), es probable que tenga que instalar o actualizar su base de datos manualmente. En este caso, explore la carpeta <strong>system/modules</strong> y busque en todas las subcarpetas los archivos <strong>config/database.sql</strong>.');
$GLOBALS['TL_LANG']['tl_install']['template'] = array('Importar una plantilla', 'Seleccione un archivo <em>.sql</em> del directorio <em>templates</em>.');
$GLOBALS['TL_LANG']['tl_install']['admin'] = array('Crear usuario administrador', 'Si importó el sitio de ejemplo, el nombre de usuario administrador es <strong>k.jones</strong> y su contraseña es <strong>kevinjones</strong>. Consulte el sitio de ejemplo para más información.');
$GLOBALS['TL_LANG']['tl_install']['completed'] = array('¡Felicitaciones!', 'Ahora inicie una sesión en el área administrativa de Contao y verifique los ajustes del sistema. Después visite su sitio para asegurarse que Contao esta funcionando correctamente.');
$GLOBALS['TL_LANG']['tl_install']['ftp'] = array('Modificar archivos a través de FTP', 'Introduzca sus credenciales de FTP para que Contao pueda modificar archivos a través de FTP (Safe Mode Hack).');
$GLOBALS['TL_LANG']['tl_install']['accept'] = 'Aceptar licencia';
$GLOBALS['TL_LANG']['tl_install']['beLogin'] = 'Inicio de sesión administrativa de Contao';
$GLOBALS['TL_LANG']['tl_install']['passError'] = '¡Cambie la contraseña preestablecida para evitar acceso no autorizado!';
$GLOBALS['TL_LANG']['tl_install']['passConfirm'] = 'La contraseña preestablecida ha sido cambiada.';
$GLOBALS['TL_LANG']['tl_install']['passSave'] = 'Grabar contraseña';
$GLOBALS['TL_LANG']['tl_install']['keyError'] = '¡Cree una clave de encriptación!';
$GLOBALS['TL_LANG']['tl_install']['keyLength'] = 'La clave de encriptación debe tener al menos 12 caracteres.';
$GLOBALS['TL_LANG']['tl_install']['keyConfirm'] = 'La clave de encriptación ha sido creada.';
$GLOBALS['TL_LANG']['tl_install']['keyCreate'] = 'Generar clave de encriptación';
$GLOBALS['TL_LANG']['tl_install']['keySave'] = 'Generar o grabar clave';
$GLOBALS['TL_LANG']['tl_install']['dbConfirm'] = 'Conexión a base de datos exitosa.';
$GLOBALS['TL_LANG']['tl_install']['dbError'] = '¡Falló la conexión a la base de datos!';
$GLOBALS['TL_LANG']['tl_install']['dbDriver'] = 'Controlador';
$GLOBALS['TL_LANG']['tl_install']['dbHost'] = 'Servidor';
$GLOBALS['TL_LANG']['tl_install']['dbUsername'] = 'Nombre de usuario';
$GLOBALS['TL_LANG']['tl_install']['dbDatabase'] = 'Base de datos';
$GLOBALS['TL_LANG']['tl_install']['dbPersistent'] = 'Conexión persistente';
$GLOBALS['TL_LANG']['tl_install']['dbCharset'] = 'Conjunto de caracteres';
$GLOBALS['TL_LANG']['tl_install']['dbCollation'] = 'Secuenciación';
$GLOBALS['TL_LANG']['tl_install']['dbPort'] = 'Número de puerto';
$GLOBALS['TL_LANG']['tl_install']['dbSave'] = 'Grabar ajustes de base de datos';
$GLOBALS['TL_LANG']['tl_install']['collationInfo'] = 'Cambiar la secuenciación afectará todas las tablas con el prefijo <em>tl_</em>.';
$GLOBALS['TL_LANG']['tl_install']['updateError'] = '¡La base de datos no está actualizada!';
$GLOBALS['TL_LANG']['tl_install']['updateConfirm'] = 'La base de datos está actualizada.';
$GLOBALS['TL_LANG']['tl_install']['updateSave'] = 'Actualizar base de datos';
$GLOBALS['TL_LANG']['tl_install']['updateX'] = 'Al parecer está actualizando Contao desde una versión anterior a %s. Si este es el caso, <strong>se requiere ejecutar la actualización de la versión %s</strong> para garantizar la integridad de los datos.';
$GLOBALS['TL_LANG']['tl_install']['updateXrun'] = 'Ejecute la actualización de la versión %s.';
$GLOBALS['TL_LANG']['tl_install']['importError'] = 'Seleccione un archivo de plantilla';
$GLOBALS['TL_LANG']['tl_install']['importConfirm'] = 'Plantilla importada en %s';
$GLOBALS['TL_LANG']['tl_install']['importWarn'] = '¡Los datos existentes serán eliminados!';
$GLOBALS['TL_LANG']['tl_install']['templates'] = 'Plantillas';
$GLOBALS['TL_LANG']['tl_install']['doNotTruncate'] = 'No vaciar tablas';
$GLOBALS['TL_LANG']['tl_install']['importSave'] = 'Importar plantilla';
$GLOBALS['TL_LANG']['tl_install']['importContinue'] = '¡Los datos existentes serán eliminados! ¿Desea continuar?';
$GLOBALS['TL_LANG']['tl_install']['adminError'] = 'Indique todos los campos para crear un usuario administrador';
$GLOBALS['TL_LANG']['tl_install']['adminConfirm'] = 'Se ha creado un usuario administrador.';
$GLOBALS['TL_LANG']['tl_install']['adminSave'] = 'Crear cuenta de administrador';
$GLOBALS['TL_LANG']['tl_install']['installConfirm'] = 'Ha instalado Contao con éxito.';
$GLOBALS['TL_LANG']['tl_install']['ftpHost'] = 'Servidor FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpPath'] = 'Ruta relativa al directorio de Contao (p.ej. <em>httpdocs/</em>)';
$GLOBALS['TL_LANG']['tl_install']['ftpUser'] = 'Nombre de usuario FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpPass'] = 'Contraseña FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpSSLh4'] = 'Conexión segura';
$GLOBALS['TL_LANG']['tl_install']['ftpSSL'] = 'Conectar vía FTP-SSL';
$GLOBALS['TL_LANG']['tl_install']['ftpPort'] = 'Puerto FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpSave'] = 'Grabar ajustes FTP';
$GLOBALS['TL_LANG']['tl_install']['ftpHostError'] = 'No se pudo establecer conexión al servidor FTP %s';
$GLOBALS['TL_LANG']['tl_install']['ftpUserError'] = 'No se pudo iniciar sesión como "%s"';
$GLOBALS['TL_LANG']['tl_install']['ftpPathError'] = 'No se pudo localizar el directorio de Contao %s';
$GLOBALS['TL_LANG']['tl_install']['CREATE'] = 'Crear tablas nuevas';
$GLOBALS['TL_LANG']['tl_install']['ALTER_ADD'] = 'Agregar columnas nuevas';
$GLOBALS['TL_LANG']['tl_install']['ALTER_CHANGE'] = 'Cambiar columnas existentes';
$GLOBALS['TL_LANG']['tl_install']['ALTER_DROP'] = 'Eliminar columnas existentes';
$GLOBALS['TL_LANG']['tl_install']['DROP'] = 'Eliminar tablas existentes';

?>