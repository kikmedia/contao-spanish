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

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'] = array('Título de la web', 'Por favor introduce el título de la web.');
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'] = array('Dirección e-mail del administrador del sistema', 'Por favor introduce la dirección e-mail del administrador del sistema.');
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'] = array('Formato de fecha', 'Por favor introduce un formato de fecha válido para la función PHP function date().');
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'] = array('Formato de hora', 'Por favor introduce un formato de hora válido para la función PHP function date().');
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'] = array('Formato de fecha y hora', 'Por favor introduce un formato de fecha y hora válido para la función PHP function date()');
$GLOBALS['TL_LANG']['tl_settings']['timeZone'] = array('Zona horaria', 'Por favor selecciona tu zona horaria.');
$GLOBALS['TL_LANG']['tl_settings']['websitePath'] = array('Ruta relativa al directorio TYPOlight', 'Por favor introduce la ruta relativa al directorio que contiene los archivos TYPOlight (por ejemplo si accedes al back de TYPOlight mediante <em>www.tudominio.com/tuweb/typolight</em> la ruta relativa sería <em>/tuweb</em>).');
$GLOBALS['TL_LANG']['tl_settings']['characterSet'] = array('Juegos caracteres', 'Por favor introduce el juego de caracteres. El juego recomendado es UTF-8 para asegurar que los caracteres especiales aparezcan correctamente. No cambiar esta configuración a menos que experimente errores al mostrar algunos caracteres.');
$GLOBALS['TL_LANG']['tl_settings']['customSections'] = array('Diseño de secciones personalizado', 'Aquí puedes introducir una lista de diseño de secciones (separada por comas). Después podrás utilizar estas secciones en el módulo <em>page layout</em> además de <em>header</em>, <em>left</em>, <em>main</em>, <em>right</em> y <em>footer</em>.');
$GLOBALS['TL_LANG']['tl_settings']['disableCron'] = array('Deshabilitar la programación de comandos', 'Deshabilitar la programación de comandos periódicos y ejecutar el script cron.php utilizando una tarea cron real (se debe configurar manualmente).');
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'] = array('Minificar el código', 'Minificar el código HTML antes de ser enviado al navegador (requiere la extensión PHP tidy).');
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'] = array('Comprimir scripts', 'Crear una versión comprimida de la combinación de archivos CSS y JavaScript. Requiere ajustes al archivo .htaccess.');
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'] = array('Registros por página', 'Aquí puedes definir el número de registros mostrados en el back end por defecto.');
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'] = array('Máximo de items por página', 'Este límite total tiene efecto si un usuario selecciona la opción "mostrar todos los registros".');
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'] = array('No desplegar elementos', 'No desplegar los elementos de contenido y otros recursos cuando se previsualicen en el back end.');
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'] = array('Sufijo URL', 'El sufijo de URL es una extensión que se añade al string URI para simular documentos estáticos. El sufijo URL por defecto es <em>.html</em>. No utilizar ningún sufijo URL puede tener un efecto negativo en el posicionamiento de buscadores.');
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'] = array('Modalidad de cache', 'Puede indicar la modalidad del cache.');
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'] = array('Anomizar dirección IP', 'Anomiza cualquier dirección IP que está almacenada en la base de datos, exepto la tabla <em>tl_session</em> (la dirección IP para la sesión está ligada a la sesión por razones de seguridad).');
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'] = array('Anonimizar Google Analytics', 'Anomiza la dirección IP que se envia a Google Analytics');
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'] = array('Reescribir URL', 'Con esta opción TYPOlight genera URLs estáticas sin "index.php" (por ejemplo <em>alias.html</em> en vez de <em>index.php/alias.html</em>). Esta opción requiere el módulo de Apache <em>mod_rewrite</em>!');
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'] = array('Añadir el idioma a la URL', 'Añade el idisoma como primer parámetro URL (p.ej. <em>http://domain.tld/en/</em>).');
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'] = array('No redireccionar URLs vacías', 'Para una URL vacia muerta la página en vez del redireccionameinte con el idioma de la página raíz (no recomendado).');
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'] = array('Usar el parámetro auto_item', 'Salta el fragmento <em>items/</em> or <em>events/</em> en la URL y descubre automáticamente el artículo basado en el parámetro <em>auto_item</em>.');
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'] = array('Deshabilitar el uso de alias de página', 'Si seleccionas esta opción, TYPOlight utilizará la numeración ID de una página en vez de su alias para generar su URL (por ejemplo <em>12.html</em> en vez de <em>home.html</em>).');
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'] = array('Etiquetas HTML permitidas', 'Por favor introduce una lista de extensiones (separados por coma) de las etiquetas HTMl permitidas. Todas las otras etiquetas serán eliminadas de las entradas del usuario.');
$GLOBALS['TL_LANG']['tl_settings']['debugMode'] = array('Modo debug', 'Si seleccionas esta opción, alguna información durante la ejecución (por ejemplo accesos a la base de datos) se mostrarán en la pantalla. Esta opción sólo se recomienda para modificaciones del sistema!');
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'] = array('Usar el modo seguro', 'Usar Conteo en el modo seguro y cargar solamente los módulos del core');
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'] = array('Tiempo de espera en caso de una cuenta cerrada', 'Por favor introduce el tiempo de espera en segundos que un usuario debe esperar antes de que se le permita volver a entrar en una cuenta cerrada (por defecto: 5 minutos = 300 segundos). Esta opción ayuda a que los ataques de fuerza bruta al sistema sean algo más difíciles.');
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'] = array('Mostrar mensajes de error', 'Si seleccionas esta opción, los mensajes de error apareceran en pantalla. Esta opción sólo se recomienda para modificaciones del sistema!');
$GLOBALS['TL_LANG']['tl_settings']['logErrors'] = array('Mensajes de errores log', 'Escribe mensajes al fichero error Log (<em>system/logs/error.log</em>).');
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'] = array('Deshabilitar referer check', 'Selecciona esta opción si prefieres que TYPOlight no compruebe la dirección referer cuando se envía un formulario. Recuerda que deshabilitar esta opción es un gran riesgo de seguridad! Normalmente, cuestiones de tipo referer son causadas por seguridad o herramientas de anonimato.');
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'] = array('Deshabilitar comprobación IP', 'No asociar sesiones a direcciones IP. ¡Marcar esta opción hace que el sistema sea menos seguro!');
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'] = array('Tipos de archivo de descarga', 'Por favor introduce una lista de extensiones (separados por coma) de los tipos de archivos permitidos para descargar. Por razones de seguridad, la descarga de archivos esta limitado a la carpeta files y sus subcarpetas.');
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'] = array('Tipos de imágenes válidas', 'Por favor introduce una lista de extensiones (separadas por coma) de imágenes aceptadas. No incluir aquellas que no puedan ser utilizadas por TYPOlight o tus propios scripts.');
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'] = array('Tipos de archivos editables', 'Por favor introduce una lista de extensiones (separados por coma) de archivos que sean editables en el editor fuente.');
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'] = array('Tipos de archivo de plantilla', 'Aquí puede ingresar una lista separada por comas de los tipos de archivo de plantilla soportados.');
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'] = array('Ancho de imagen máximo en el front end', 'Aquí puedes definir el ancho máximo de imágenes y archivos media. Si algún elemento supera este valor, será redimensionado automáticamente.');
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'] = array('Calidad de la Miniatura', 'Por favor escribe la calidad de la miniatura en porcentaje (se aplica a JPGs únicamente)');
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'] = array('Ancho de imagen máximo GD', 'Aquí puede ingresar el ancho máximo de imagen que la biblioteca GD intentará procesar.');
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'] = array('Altura de imagen máxima GD', 'Aquí puede ingresar la altura máxima de imagen que la biblioteca GD intentará procesar.');
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'] = array('Directorio de archivos', 'Por favor introduce la ruta relativa al directorio de archivos (por defecto: tl_files).');
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'] = array('Tipos de archivos a transferir', 'Por favor introduce una lista de extensiones (separados por coma) de los tipos de archivos permitidos a transferir (upload). Por razones de seguridad, la transferencia de archivos esta limitada a la carpeta file y sus subcarpetas.');
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'] = array('Transferencias de archivos simultaneas', 'Por favor introduce el máximo número de transferencias de archivos simultaneas.');
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'] = array('Tamaño de archivo máximo a transferir', 'Por favor introduce el tamaño de archivo máximo a transferir (upload) en bytes (por defecto: 2 MB = 2048 kB = 2048000 bytes).');
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'] = array('Ancho de imagen máximo', 'Por favor introduce el ancho de imagen máximo en píxeles para archivos a transferir (uploads).');
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'] = array('Altura de imagen máxima', 'Por favor introduce la altura de imagen máxima en píxeles para archivos a transferir (uploads).');
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'] = array('Habilitar búsquedas', 'Indexar páginas para que sean buscables.');
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'] = array('Indexar páginas protegidas', 'Utiliza esta opción con cuidado y siempre excluye páginas personalizadas de ser indexadas.');
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'] = array('Utilizar SMTP para enviar e-mails', 'Por defecto TYPOlight utiliza PHP <em>mail()</em> para enviar e-mails. Aquí puedes cambiar a un servidor SMTP.');
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'] = array('Servidor SMTP', 'Por favor introduce el nombre del servidor SMTP (por defecto localhost).');
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'] = array('Usuario SMTP', 'Si tu servidor SMTP requiere autenticación, por favor introduce un nombre de usuario aquí.');
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'] = array('Contraseña SMTP', 'Si tu servidor SMTP requiere autenticación, por favor introduce una contraseña aquí.');
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'] = array('Cifrado SMTP', 'Aquí puedes seleccionar un método (SSL o TLS).');
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'] = array('Puerto SMTP', 'Por favor introduce el número de puesto de tu servidor SMTP server (por defecto 25 o 465 para SSL).');
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'] = array('Módulos back end inactivos', 'Aquí puedes desactivar aquellos módulos de back end innecesarios.');
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'] = array('Duración de pasos de deshacer en el sistema', 'Por favor introduce el tiempo en segundos durante el que permanecerán guardados los pasos de deshacer de acciones realizadas (por defecto: 24 horas = 86400 segundos).');
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'] = array('Duración de versiones en el sistema', 'Por favor introduce el tiempo en segundos durante el que permanecerán almacenados en el sistema las diferentes versiones de un registro (por defecto: 90 días = 7776000 segundos).');
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'] = array('Duración de entradas log en el sistema', 'Por favor introduce el tiempo en segundos durante el que permanecerán almacenados en el sistema las entradas log (por defecto: 14 días = 1209600 segundos).');
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'] = array('Caducidad sesión', 'Por favor introduce en segundos la duración máxima de una sesión (por defecto: 60 minutos = 3600 segundos). Si no hay ninguna entrada del usuario por un tiempo superior al establecido, la sesión actual será eliminada y el usuario deberá identificarse de nuevo.');
$GLOBALS['TL_LANG']['tl_settings']['autologin'] = array('Tiempo de inicio de sesión automático', 'Aquí puedes establecer el tiempo que será válido el inicio de sesión automático (90 dias = 7776000 segundos).');
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'] = array('Usuario de página por defecto', 'Por defecto, una página pertenece al mismo usuario que la página madre. Sin embargo, si no hay usuario asignado, el usuario por defecto será el propietario de la página. Si no hay usuario ni usuario por defecto, no habrá ningún tipo de restricciones de acceso!');
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'] = array('Grupo de página por defecto', 'Por defecto, una página pertenece al mismo grupo que la página madre. Sin embargo, si no hay grupo asignado, el grupo por defecto será el propietario de la página. Si no hay grupo ni grupo por defecto, no habrá ningún tipo de restricciones de acceso!');
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'] = array('Permisos de página por defecto', 'Por defecto, una página tiene los mismos permisos que su página madre. Sin embargo, si no se han definido permisos, se aplicaran estos permisos.');
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'] = array('URL de Live Update', 'Aquí puedes introducir la dirección URL de Live Update');
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Título de la web';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Fecha y hora';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Configuración global';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Configuración del back end';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Configuración del front end';
$GLOBALS['TL_LANG']['tl_settings']['cache_legend'] = 'Configuración caché';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Configuración de privacidad';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Ajustes de seguridad';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Archivos y imágenes';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Ajustes de upload';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Ajustes de motor de búsqueda';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Configuración SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Extensiones inactivas';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Valores de tiemout';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Privilegios de acceso por defecto';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Actualización automática';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Recursos estáticos';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Editar la configuración local';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Utilizar el cache del servidor y del navegador';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Utilizar sólo el cache del servidor';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Utilizar sólo el cache del navegador';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Deshabilitar el cache';

?>