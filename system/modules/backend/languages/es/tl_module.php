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

$GLOBALS['TL_LANG']['tl_module']['name'] = array('Nombre del módulo', 'Por favor introduce un nombre de módulo único.');
$GLOBALS['TL_LANG']['tl_module']['headline'] = array('Titular', 'Si introduces un titular, será mostrado en la parte superior del módulo.');
$GLOBALS['TL_LANG']['tl_module']['type'] = array('Tipo de módulo', 'Por favor selecciona el tipo de módulo actual.');
$GLOBALS['TL_LANG']['tl_module']['levelOffset'] = array('Nivel de inicio', 'Por favor define desde qué nivel serán visibles los elementos del menú. Introduce 0 o dejar en blanco para iniciar desde el nivel superior.');
$GLOBALS['TL_LANG']['tl_module']['showLevel'] = array('Elementos del menú visibles', 'Por favor defines hasta qué nivel los elementos del menú serán visibles. Por ejemplo, selecciona 1 para mostrar solo los elementos del menú principal y los subelementos de la página activa. Escoge 0 para mostrar todos los elementos principales y subelementos.');
$GLOBALS['TL_LANG']['tl_module']['hardLimit'] = array('Límite forzado', 'No mostrar ningún elementos (ni los activos) a partir del nivel introducido.');
$GLOBALS['TL_LANG']['tl_module']['showProtected'] = array('Mostrar elementos protegidos', 'Por defecto los elementos protegidos no son visibles a no ser que un usuario del front end este conectado. En cambio, si seleccionas esta opción, los elementos protegidos estarán siempre visibles.');
$GLOBALS['TL_LANG']['tl_module']['defineRoot'] = array('Especificar página referencia', 'Especifica una página de referencia a ser utilizada como página fuente o de destino del módulo.');
$GLOBALS['TL_LANG']['tl_module']['rootPage'] = array('Página referencia', 'Puedes escoger una página de referencia que será utilizada como página fuente o de destino (por ejemplo una página de inicio alternativa)');
$GLOBALS['TL_LANG']['tl_module']['navigationTpl'] = array('Plantilla de navegación', 'Por favor selecciona una plantilla de navegación (plantillas de navegación empiezan por <em>nav_</em>).');
$GLOBALS['TL_LANG']['tl_module']['pages'] = array('Páginas', 'Por favor selecciona las páginas para el módulo quick link.');
$GLOBALS['TL_LANG']['tl_module']['showHidden'] = array('Mostrar elementos no visibles', 'Incluir los elementos que no son visibles en el menú de navegación.');
$GLOBALS['TL_LANG']['tl_module']['customLabel'] = array('Etiqueta personalizada', 'Aqui puedes introducir una etiqueta personalizada para ser utilizada en vez de <em>quicklink</em> o <em>quick navigation</em>.');
$GLOBALS['TL_LANG']['tl_module']['autologin'] = array('Permitir el inicio de sesión automático', 'Permitir a los miembros acceder al front end automáticamente.');
$GLOBALS['TL_LANG']['tl_module']['jumpTo'] = array('Saltar a página', 'Esta configuración define a qué pagina será redirigido un usuario tras cierta acción (por ejemplo, al hacer clic sobre un link o al enviar un formulario).');
$GLOBALS['TL_LANG']['tl_module']['redirectBack'] = array('Redirigir a la última página visitada', 'Redirigir al usuario a la última página visitada en vez de la página de redirección.');
$GLOBALS['TL_LANG']['tl_module']['cols'] = array('Número de columnas', 'Por favor selecciona el número de columnas del formulario.');
$GLOBALS['TL_LANG']['tl_module']['1cl'] = array('Una columna', 'la etiqueta de cada campo de entrada se mostrará encima del campo de entrada.');
$GLOBALS['TL_LANG']['tl_module']['2cl'] = array('Dos columnas', 'la etiqueta de cada campo de entrada se mostrará el lado izquierdo del campo de entrada.');
$GLOBALS['TL_LANG']['tl_module']['editable'] = array('Campos editables', 'Por favor selecciona u o más campos que serán editables en el front end.');
$GLOBALS['TL_LANG']['tl_module']['memberTpl'] = array('Plantilla formulario', 'Por favor selecciona una plantilla de formulario. La plantilla por defecto se llama <em>member_default</em>. Si quieres añadir tu propias plantillas, súbelas al directorio <em>templates</em> (la extensión de archivo debe ser <em>tpl</em>).');
$GLOBALS['TL_LANG']['tl_module']['tableless'] = array('Disposición sin tablas', 'Generar el formulario sin utilizar tablas HTML.');
$GLOBALS['TL_LANG']['tl_module']['form'] = array('Formulario', 'Por favor selecciona un formulario.');
$GLOBALS['TL_LANG']['tl_module']['queryType'] = array('Tipo de query por defecto', 'Por favor selecciona el tipo de query por defecto.');
$GLOBALS['TL_LANG']['tl_module']['and'] = array('Buscar todas las palabras', 'El motor de búsqueda devuelve sólo las páginas que contengan todas las palabras clave.');
$GLOBALS['TL_LANG']['tl_module']['or'] = array('Buscar cualquier palabra', 'El motor de búsqueda devuelve todas las páginas que contenga al menos una palabra clave.');
$GLOBALS['TL_LANG']['tl_module']['fuzzy'] = array('Búsquea difusa', 'Incluirá en los resultados "TYPOlight" si se busca "typo" (similar a una búsqueda con comodines).');
$GLOBALS['TL_LANG']['tl_module']['simple'] = array('Simple', 'Formulario de búsqueda simple, con un solo campo de entrada.');
$GLOBALS['TL_LANG']['tl_module']['advanced'] = array('Avanzado', 'Formulario de búsqueda avanzado, permite la seleccionar el tipo de búsqueda dinámicamente.');
$GLOBALS['TL_LANG']['tl_module']['contextLength'] = array('Rango contexto', 'Por favor introduce un número de caracteres en el lado izquierdo y derecho de cada palabra clave que serán utilizados como contexto.');
$GLOBALS['TL_LANG']['tl_module']['totalLength'] = array('Tamaño máximo contexto', 'Por favor introduce el tamaño máximo de contexto de cada resultado.');
$GLOBALS['TL_LANG']['tl_module']['perPage'] = array('Elementos por página', 'Por favor introduce el número de resultados por página (0 = deshabilitar paginación).');
$GLOBALS['TL_LANG']['tl_module']['searchType'] = array('Formulario de búsqueda', 'Por favor selecciona un formulario de búsqueda.');
$GLOBALS['TL_LANG']['tl_module']['searchTpl'] = array('Plantilla de resultados de búsqueda', 'Por favor selecciona una plantilla de resultados de búsqueda. La plantilla por defecto se llama <em>search_default</em>. Si quieres añadir tu propias plantillas, sube las al directorio <em>templates</em> (la extensión de archivo debe ser <em>tpl</em>).');
$GLOBALS['TL_LANG']['tl_module']['inColumn'] = array('Columna', 'Por favor selecciona la columna cuyos artículos quieres listar.');
$GLOBALS['TL_LANG']['tl_module']['skipFirst'] = array('Saltar primer artículo', 'Selecciona esta opción para excluir el primer artículo de la lista de artículos.');
$GLOBALS['TL_LANG']['tl_module']['loadFirst'] = array('Cargar el primer elemento', 'Redirigir automáticamente al primer elemento si no se ha seleccionado otro.');
$GLOBALS['TL_LANG']['tl_module']['size'] = array('Ancho y alto', 'Por favor introduce el ancho y alto en píxeles.');
$GLOBALS['TL_LANG']['tl_module']['transparent'] = array('Película Flash transparente', 'Selecciona esta opción para una película Flash con fondo transparente (wmode = transparent). Recuerda que algunos botones y campos de texto pueden no funcionar correctamente en algunos navegadores.');
$GLOBALS['TL_LANG']['tl_module']['flashvars'] = array('FlashVars', 'Aquí puedes introducir algunas variables que se pasarán a la película Flash (<em>var1=valor1&var2=valor2</em>).');
$GLOBALS['TL_LANG']['tl_module']['version'] = array('Versión del reproductor Flash', 'Por favor introduce la versión requerida del reproductor Flash, número de versión completo (por ejemplo si tu película Flash requiere al menos el reproductor Flash 6.0.12.0, introduce 6 y 12).');
$GLOBALS['TL_LANG']['tl_module']['altContent'] = array('Contenido alternativo', 'Por favor proporciona un contenido alternativo a mostrar en caso que la película Flash no se pueda cargar. HTML permitido.');
$GLOBALS['TL_LANG']['tl_module']['source'] = array('Fuente', 'Por favor selecciona la fuente del elemento.');
$GLOBALS['TL_LANG']['tl_module']['singleSRC'] = array('Archivo fuente', 'Por favor selecciona un archivo de la carpeta de archivos.');
$GLOBALS['TL_LANG']['tl_module']['url'] = array('URL', 'Por favor introduce la URL completa, empezando con http://');
$GLOBALS['TL_LANG']['tl_module']['interactive'] = array('Película Flash interactiva', 'Escoge esta opción si tu película Flash interacciona con el navegador mediante JavaScript y la función Flash <em>fscommand()</em>.');
$GLOBALS['TL_LANG']['tl_module']['flashID'] = array('ID película Flash', 'Por favor introduce una ID única para la película Flash.');
$GLOBALS['TL_LANG']['tl_module']['flashJS'] = array('JavaScript _DoFSCommand(command, args) {', 'Por favor introduce el contenido de la función JavaScript <em>_DoFSCommand()</em>. La variable que contiene el comando se llama <em>command</em>, la variable que contiene los argumentos se llama <em>args</em>.');
$GLOBALS['TL_LANG']['tl_module']['fullsize'] = array('Visualizar tamaño completo/nueva ventana', 'Abrir la imagen de tamaño completo en una lightbox o el enlace en una ventana de navegador nueva.');
$GLOBALS['TL_LANG']['tl_module']['imgSize'] = array('Imagen ancho y alto', 'Si introduce solo ancho o solo alto, la imagen se redimensionará proporcionalmente. Si introduces ambas medidas, la imagen se recortará si es necesario. Si dejas ambos campos en blanco, se utilizará el tamaño original de la imagen.');
$GLOBALS['TL_LANG']['tl_module']['useCaption'] = array('Mostrar nombre de imagen en el pie', 'Si seleccionas esta opción, el nombre de la imagen se mostrará justo debajo de la misma.');
$GLOBALS['TL_LANG']['tl_module']['multiSRC'] = array('Archivos fuente', 'Por favor selecciona uno o más archivos de la carpeta de archivos.');
$GLOBALS['TL_LANG']['tl_module']['html'] = array('Código HTML', 'Por favor introduce tu código HTML.');
$GLOBALS['TL_LANG']['tl_module']['protected'] = array('Proteger módulo', 'Mostrar el módulo solo a ciertos grupos de miembros.');
$GLOBALS['TL_LANG']['tl_module']['groups'] = array('Grupos de miembros permitidos', 'Aquí puedes escoger a qué grupos les será permitido ver el módulo.');
$GLOBALS['TL_LANG']['tl_module']['guests'] = array('Mostrar sólo a invitados', 'Esconder el módulo a miembros registrados.');
$GLOBALS['TL_LANG']['tl_module']['cssID'] = array('ID de la hoja de estilo y clase', 'Aquí puedes introducir una ID para la hoja de estilo (atributo id) y una o más clases de hoja de estilos (atributos clase) para poder dar formato al elemento del modulo utilizando CSS.');
$GLOBALS['TL_LANG']['tl_module']['space'] = array('Espaciado delante y detrás', 'Por favor introduce en píxeles el espaciado delante y detrás del módulo.');
$GLOBALS['TL_LANG']['tl_module']['title_legend'] = 'Título y tipo';
$GLOBALS['TL_LANG']['tl_module']['nav_legend'] = 'Ajustes de navegación';
$GLOBALS['TL_LANG']['tl_module']['reference_legend'] = 'Página de referencia';
$GLOBALS['TL_LANG']['tl_module']['redirect_legend'] = 'Ajustes de redirección';
$GLOBALS['TL_LANG']['tl_module']['template_legend'] = 'Ajustes de plantilla';
$GLOBALS['TL_LANG']['tl_module']['config_legend'] = 'Configuración de módulo';
$GLOBALS['TL_LANG']['tl_module']['include_legend'] = 'Ajustes de include';
$GLOBALS['TL_LANG']['tl_module']['source_legend'] = 'Archivos y carpetas';
$GLOBALS['TL_LANG']['tl_module']['interact_legend'] = 'Película flash interactiva';
$GLOBALS['TL_LANG']['tl_module']['html_legend'] = 'Texto/HTML';
$GLOBALS['TL_LANG']['tl_module']['protected_legend'] = 'Protección de acceso';
$GLOBALS['TL_LANG']['tl_module']['expert_legend'] = 'Ajustes avanzados';
$GLOBALS['TL_LANG']['tl_module']['email_legend'] = 'Ajustes del e-mail';
$GLOBALS['TL_LANG']['tl_module']['header'] = 'Encabezado';
$GLOBALS['TL_LANG']['tl_module']['left'] = 'Columna izquierda';
$GLOBALS['TL_LANG']['tl_module']['main'] = 'Columna principal';
$GLOBALS['TL_LANG']['tl_module']['right'] = 'Columna derecha';
$GLOBALS['TL_LANG']['tl_module']['footer'] = 'Pie de página';
$GLOBALS['TL_LANG']['tl_module']['internal'] = 'archivo interno';
$GLOBALS['TL_LANG']['tl_module']['external'] = 'URL externa';
$GLOBALS['TL_LANG']['tl_module']['new'] = array('Añadir módulo', 'Añadir un módulo');
$GLOBALS['TL_LANG']['tl_module']['show'] = array('Detalles del módulo', 'Muestra los detalles del módulo con ID %s');
$GLOBALS['TL_LANG']['tl_module']['edit'] = array('Editar módulo', 'Editar el módulo con ID %s');
$GLOBALS['TL_LANG']['tl_module']['cut'] = array('Mover módulo', 'Mover módulo con ID %s');
$GLOBALS['TL_LANG']['tl_module']['copy'] = array('Duplicar módulo', 'Duplica el módulo con ID %s');
$GLOBALS['TL_LANG']['tl_module']['delete'] = array('Eliminar módulo', 'Elimina el módulo con ID %s');
$GLOBALS['TL_LANG']['tl_module']['editheader'] = array('Editar tema', 'Editar configuración del tema');
$GLOBALS['TL_LANG']['tl_module']['pasteafter'] = array('Copiar aquí', 'Copiar después del módulo con ID %s');

?>