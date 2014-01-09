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

$GLOBALS['TL_LANG']['tl_page']['title'] = array('Nombre de página', 'El nombre de página se muestra en la navegación de la web.');
$GLOBALS['TL_LANG']['tl_page']['alias'] = array('Alias de página', 'El alias de página es una referencia única a la página que puede ser llamada en vez de la ID de página. Es especialmente útil si TYPOlight utiliza URL estáticas.');
$GLOBALS['TL_LANG']['tl_page']['type'] = array('Tipo de página', 'Por favor selecciona el tipo de página en función de su fin.');
$GLOBALS['TL_LANG']['tl_page']['pageTitle'] = array('Título de página', 'El título de página se muestra en la etiqueta TITLE de tu web y en los resultados de búsquedas. No debería contener más de 65 caracteres. Si deja este campo en blanco, se utilizará el nombre de página.');
$GLOBALS['TL_LANG']['tl_page']['language'] = array('Idioma', 'Por favor introduce el idioma utilizado en la web actual. Introduce un idioma utilizando la subetiqueta primaria (ISO-639 / RCF3066), por ejemplo "es" para español.');
$GLOBALS['TL_LANG']['tl_page']['robots'] = array('Etiqueta Robots', 'Aquí puedes definir cómo los motores de búsqueda acceden a la página.');
$GLOBALS['TL_LANG']['tl_page']['description'] = array('Descripción de página', 'Puedes introducir una breve descripción de la página que se mostrará en los motores de búsqueda. Un motor de búsqueda normalmente indica entre 150 y 300 caracteres.');
$GLOBALS['TL_LANG']['tl_page']['redirect'] = array('Tipo de redireccionamiento', 'Las redirecciones temporales enviaran una cabecera HTTP 302, y las permanentes una cabecera HTTP 301.');
$GLOBALS['TL_LANG']['tl_page']['jumpTo'] = array('Redireccionar a', 'Por favor selecciona una página destino del árbol de páginas.');
$GLOBALS['TL_LANG']['tl_page']['fallback'] = array('Fallo idioma', 'TYPOlight automáticamente redirecciona un visitante a la página raiz de una web en su idioma o a la página de fallo de idioma. Si no existe una página de fallo de idioma, se mostrará el mensaje de error <em>No pages found</em>.');
$GLOBALS['TL_LANG']['tl_page']['dns'] = array('Nombre de dominio', 'Si asignas un nombre de dominio a la página raiz de la web, tus visitas serán redirigidas a esta web cuando introduzcan el dominio correspondiente (por ejemplo <em>midominio.com</em> o <em>subdominio.midominio.com</em>).');
$GLOBALS['TL_LANG']['tl_page']['adminEmail'] = array('Dirección e-mail del administrador de la web', 'La dirección e-mail del administrador de la web se utilizará como remitente para los mensajes auto generados (por ejemplo e-mails de activación o confirmación).');
$GLOBALS['TL_LANG']['tl_page']['dateFormat'] = array('Formato de fecha', 'La variable de formato de fecha será parseada con la función PHP date().');
$GLOBALS['TL_LANG']['tl_page']['timeFormat'] = array('Formato de hora', 'La variable de formato de hora será parseada con la función PHP date().');
$GLOBALS['TL_LANG']['tl_page']['datimFormat'] = array('Formato de fecha y hora', 'La variable de formato de fecha y hora será parseada con la función PHP date().');
$GLOBALS['TL_LANG']['tl_page']['createSitemap'] = array('Crear un mapa del sitio XML', 'Crear un mapa de sitio Google XML en el directorio raíz.');
$GLOBALS['TL_LANG']['tl_page']['sitemapName'] = array('Nombre de archivo', 'Por favor, introduzca un nombre para el archivo XML.');
$GLOBALS['TL_LANG']['tl_page']['useSSL'] = array('Utilizar HTTPS en sitemaps', 'Generar las URL del sitemap de este sitio web utilizando <em>https://</em>.');
$GLOBALS['TL_LANG']['tl_page']['autoforward'] = array('Redireccionar a otra página', 'Si seleccionas esta opción, los visitantes serán redirigidos a otra página (por ejemplo una página de conexión o de bienvenida).');
$GLOBALS['TL_LANG']['tl_page']['protected'] = array('Proteger página', 'Si seleccionas esta opción puedes restringir el acceso a ciertos miembros de grupos.');
$GLOBALS['TL_LANG']['tl_page']['groups'] = array('Miembros de grupos permitidos', 'Aquí puede dar acceso a uno o más grupos de usuarios. Si no selecciona un grupo, cualquier usuario registrado tendrá acceso a la página.');
$GLOBALS['TL_LANG']['tl_page']['includeLayout'] = array('Asignar un diseño', 'Por defecto una página utiliza el mismo diseño que su página padre. Si seleccionas esta opción, puedes asignar un diseño nuevo a la página actual y sus subpáginas.');
$GLOBALS['TL_LANG']['tl_page']['layout'] = array('Diseño página', 'Por favor selecciona un diseño de página. Puede editar o crear diseños utilizando el módulo <em>page layout</em>.');
$GLOBALS['TL_LANG']['tl_page']['includeCache'] = array('Asignar un valor timeout cache', 'Por defecto una página utiliza el mismo timeout cache que su página padre. Si seleccionas esta opción, puedes asignar un valor nuevo de timeout cache a la página actual y sus subpáginas.');
$GLOBALS['TL_LANG']['tl_page']['cache'] = array('Cache timeout', 'Dentro del periodo de cache timeout, una página será cargada de la tabla de cache. Esto disminuirá el tiempo de carga de tus páginas.');
$GLOBALS['TL_LANG']['tl_page']['includeChmod'] = array('Asignar permisos', 'Los permisos te permiten definir hasta qué punto un usuario del back end puede modificar una página y sus artículos. Si no seleccionas esta opción, la página utiliza los mismos permisos que su página padre.');
$GLOBALS['TL_LANG']['tl_page']['cuser'] = array('Propietario', 'Por favor selecciona un usuario como propietario de la página actual.');
$GLOBALS['TL_LANG']['tl_page']['cgroup'] = array('Grupo', 'Por favor selecciona un grupo como propietario de la página actual.');
$GLOBALS['TL_LANG']['tl_page']['chmod'] = array('Permisos', 'Cada página tiene tres niveles de acceso: uno para el usuario, uno para el grupo y otro para todos los demás. Puedes asignar diferentes permisos para cada nivel.');
$GLOBALS['TL_LANG']['tl_page']['noSearch'] = array('No buscar en esta página', 'Si seleccionas esta opción, la página actual será excluida de las operaciones de búsqueda en la web.');
$GLOBALS['TL_LANG']['tl_page']['cssClass'] = array('Clase CSS', 'Si introduces un nombre de clase aquí, se utilizará como atributo de clase en el menú de navegación. Lo que permite dar formato a elementos de navegación independientemente.');
$GLOBALS['TL_LANG']['tl_page']['sitemap'] = array('Mostrar en sitemap', 'Indica si la página aparece en el sitemap (mapa del sitio).');
$GLOBALS['TL_LANG']['tl_page']['hide'] = array('Esconde página de la navegación', 'Si selecciona esta opción, la página actual no se mostrará en la navegación de la web.');
$GLOBALS['TL_LANG']['tl_page']['guests'] = array('Mostrar sólo a los invitados', 'Ocultar la página desde el menú de navegación si un miembro está conectado.');
$GLOBALS['TL_LANG']['tl_page']['tabindex'] = array('Navegación por pestañas', 'Este número especifica la posición de elemento de navegación actual en el orden de las pestañas. Puede introducir un número entre 1 y 32767.');
$GLOBALS['TL_LANG']['tl_page']['accesskey'] = array('Tecla acceso', 'Una tecla de acceso es un único carácter que se puede ser asignado a un elemento de la navegación. Si un visitante pulsa simultáneamente la tecla [ALT] y la tecla de acceso, el elemento de la navegación estará preparado para recibir una acción (focus).');
$GLOBALS['TL_LANG']['tl_page']['published'] = array('Publicada', 'Si esta opción no esta seleccionada, la página no puede ser vista por los visitantes de tu web.');
$GLOBALS['TL_LANG']['tl_page']['start'] = array('Mostrar desde', 'Si introduces una fecha aquí, la página actual no será visible antes de esa fecha.');
$GLOBALS['TL_LANG']['tl_page']['stop'] = array('Mostrar hasta', 'Si introduces una fecha aquí, la página actual no será visible después de esa fecha.');
$GLOBALS['TL_LANG']['tl_page']['title_legend'] = 'Nombre y tipo';
$GLOBALS['TL_LANG']['tl_page']['meta_legend'] = 'Información Meta';
$GLOBALS['TL_LANG']['tl_page']['system_legend'] = 'Configuración de sistema';
$GLOBALS['TL_LANG']['tl_page']['redirect_legend'] = 'Ajustes de redirección';
$GLOBALS['TL_LANG']['tl_page']['dns_legend'] = 'Ajustes DNS';
$GLOBALS['TL_LANG']['tl_page']['sitemap_legend'] = 'Mapa web XML';
$GLOBALS['TL_LANG']['tl_page']['forward_legend'] = 'Redirigir automáticamente';
$GLOBALS['TL_LANG']['tl_page']['protected_legend'] = 'Protección de acceso';
$GLOBALS['TL_LANG']['tl_page']['layout_legend'] = 'Ajustes de diseño';
$GLOBALS['TL_LANG']['tl_page']['cache_legend'] = 'Ajustes de caché';
$GLOBALS['TL_LANG']['tl_page']['chmod_legend'] = 'Privilegios de acceso';
$GLOBALS['TL_LANG']['tl_page']['search_legend'] = 'Ajustes de búsqueda';
$GLOBALS['TL_LANG']['tl_page']['expert_legend'] = 'Ajustes avanzados';
$GLOBALS['TL_LANG']['tl_page']['tabnav_legend'] = 'Navegación con teclado';
$GLOBALS['TL_LANG']['tl_page']['publish_legend'] = 'Ajustes de publicación';
$GLOBALS['TL_LANG']['tl_page']['permanent'] = 'permanente';
$GLOBALS['TL_LANG']['tl_page']['temporary'] = 'temporal';
$GLOBALS['TL_LANG']['tl_page']['map_default'] = 'Predeterminado';
$GLOBALS['TL_LANG']['tl_page']['map_always'] = 'Mostrar siempre';
$GLOBALS['TL_LANG']['tl_page']['map_never'] = 'Nunca mostrar';
$GLOBALS['TL_LANG']['tl_page']['new'] = array('Nueva página', 'Crear una página nueva');
$GLOBALS['TL_LANG']['tl_page']['show'] = array('Detalles página', 'Mostrar los detalles de la página con ID %s');
$GLOBALS['TL_LANG']['tl_page']['edit'] = array('Editar página', 'Editar página con ID %s');
$GLOBALS['TL_LANG']['tl_page']['cut'] = array('Mover página', 'Mover página ID %s');
$GLOBALS['TL_LANG']['tl_page']['copy'] = array('Duplicar página', 'Duplicar página con ID %s');
$GLOBALS['TL_LANG']['tl_page']['copyChilds'] = array('Duplicar página con subpáginas', 'Duplicar la página con ID %s y subpáginas');
$GLOBALS['TL_LANG']['tl_page']['delete'] = array('Eliminar página', 'Eliminar página con ID %s');
$GLOBALS['TL_LANG']['tl_page']['toggle'] = array('Publicar/retirar página', 'Publicar/retirar la página con ID %s');
$GLOBALS['TL_LANG']['tl_page']['pasteafter'] = array('Pegar después', 'Pegar después de la página con ID %s');
$GLOBALS['TL_LANG']['tl_page']['pasteinto'] = array('Pegar dentro', 'Pegar dentro de la página con ID %s');
$GLOBALS['TL_LANG']['tl_page']['articles'] = array('Editar artículos', 'Editar artículos de la página con ID %s');
$GLOBALS['TL_LANG']['CACHE'][0] = 'No realizar caché';
$GLOBALS['TL_LANG']['CACHE'][5] = '5 segundos';
$GLOBALS['TL_LANG']['CACHE'][15] = '15 segundos';
$GLOBALS['TL_LANG']['CACHE'][30] = '30 segundos';
$GLOBALS['TL_LANG']['CACHE'][60] = '1 minuto';
$GLOBALS['TL_LANG']['CACHE'][300] = '5 minutos';
$GLOBALS['TL_LANG']['CACHE'][900] = '15 minutos';
$GLOBALS['TL_LANG']['CACHE'][1800] = '30 minutos';
$GLOBALS['TL_LANG']['CACHE'][3600] = '1 hora';
$GLOBALS['TL_LANG']['CACHE'][10800] = '3 horas';
$GLOBALS['TL_LANG']['CACHE'][21600] = '6 horas';
$GLOBALS['TL_LANG']['CACHE'][43200] = '12 horas';
$GLOBALS['TL_LANG']['CACHE'][86400] = '1 día';
$GLOBALS['TL_LANG']['CACHE'][259200] = '3 días';
$GLOBALS['TL_LANG']['CACHE'][604800] = '7 días (1 semana)';
$GLOBALS['TL_LANG']['CACHE'][2592000] = '30 días (1 mes)';

?>