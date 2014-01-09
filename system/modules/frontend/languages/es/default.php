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

$GLOBALS['TL_LANG']['ERR']['form'] = 'El formulario no pudo ser enviado';
$GLOBALS['TL_LANG']['ERR']['captcha'] = 'Por favor, responde la pregunta de seguridad.';
$GLOBALS['TL_LANG']['SEC']['question1'] = 'Por favor, suma %d y %d.';
$GLOBALS['TL_LANG']['SEC']['question2'] = 'Cuanto suman %d y %d?';
$GLOBALS['TL_LANG']['SEC']['question3'] = 'Por favor, calcula %d mas %d.';
$GLOBALS['TL_LANG']['CTE']['texts'] = 'Elementos de texto';
$GLOBALS['TL_LANG']['CTE']['headline'] = array('Titular', 'Este elemento contiene un titular independiente, que va entre etiquetas <H1>.');
$GLOBALS['TL_LANG']['CTE']['text'] = array('Texto', 'Este elemento contiene texto enriquecido con hipervínculos. Puedes añadir una imagen a este elemento.');
$GLOBALS['TL_LANG']['CTE']['html'] = array('HTML', 'Este elemento contiene código HTML. Recuerda que algunas etiquetas HTML estan deshabilitadas por razones de seguridad.');
$GLOBALS['TL_LANG']['CTE']['list'] = array('Lista', 'Este elemento contiene un lista ordenada o desordenada.');
$GLOBALS['TL_LANG']['CTE']['table'] = array('Tabla', 'Este elemento contiene una tabla.');
$GLOBALS['TL_LANG']['CTE']['accordion'] = array('Acordeon', 'Este elemento crea una panel de contenido tipo moofx acordeon. Recuerda que este efecto requiere una plantilla javascript mootools que puede seleccionar en el módulo de diseño de página.');
$GLOBALS['TL_LANG']['CTE']['code'] = array('Código', 'Este elemento contiene fragmentos de código que estan formateados de manera especial. El código solo se imprimirá en pantalla y no será ejecutado.');
$GLOBALS['TL_LANG']['CTE']['links'] = 'Elementos de enlace';
$GLOBALS['TL_LANG']['CTE']['hyperlink'] = array('Enlace', 'Este elemento contiene un link a otra web.');
$GLOBALS['TL_LANG']['CTE']['toplink'] = array('Enlace arriba', 'Este elemento crea un link para ir directamente a la parte superior de la página.');
$GLOBALS['TL_LANG']['CTE']['images'] = 'Elementos imagen';
$GLOBALS['TL_LANG']['CTE']['image'] = array('Imagen', 'Este elemnto contiene una imagen.');
$GLOBALS['TL_LANG']['CTE']['gallery'] = array('Galeria de imágenes', 'Este elemento contiene varias imagenes en miniatura que se pueden ver a tamaño completo al hacer clic sobre ellas.');
$GLOBALS['TL_LANG']['CTE']['files'] = 'Elementos archivo';
$GLOBALS['TL_LANG']['CTE']['download'] = array('Descarga', 'Este elemento contiene un link a un archivo para que sea descargado por los visitantes de tu web.');
$GLOBALS['TL_LANG']['CTE']['downloads'] = array('Descargas', 'Este elemento contiene varios archivos que se pueden descargar los visitantes de tu web.');
$GLOBALS['TL_LANG']['CTE']['includes'] = 'Incluir elementos';
$GLOBALS['TL_LANG']['CTE']['article'] = array('Artículo', 'incluye otro artículo.');
$GLOBALS['TL_LANG']['CTE']['alias'] = array('Alias', 'Este elemento permite mostrar un elemento de contenido existente en más de un artículo.');
$GLOBALS['TL_LANG']['CTE']['form'] = array('Formulario', 'Utiliza esta opción para añadir un formulario a un artículo.');
$GLOBALS['TL_LANG']['CTE']['module'] = array('Módulo', 'Utiliza esta opción para añadir un módulo (por ejemplo un menú de navegación o una película flash) en un artículo.');
$GLOBALS['TL_LANG']['CTE']['teaser'] = array('Artículo teaser', 'Este elemento permite mostrar el texto teaser de un cierto artículo.');
$GLOBALS['TL_LANG']['MSC']['go'] = 'Ir';
$GLOBALS['TL_LANG']['MSC']['quicknav'] = 'Navegación rápida';
$GLOBALS['TL_LANG']['MSC']['quicklink'] = 'Enlace rápido';
$GLOBALS['TL_LANG']['MSC']['username'] = 'Usuario';
$GLOBALS['TL_LANG']['MSC']['login'] = 'Entrar';
$GLOBALS['TL_LANG']['MSC']['logout'] = 'Salir';
$GLOBALS['TL_LANG']['MSC']['loggedInAs'] = 'Has entrado como %s.';
$GLOBALS['TL_LANG']['MSC']['emptyField'] = 'Por favor, introduce tu usuario y contraseña.';
$GLOBALS['TL_LANG']['MSC']['confirmation'] = 'Repite la contraseña';
$GLOBALS['TL_LANG']['MSC']['sMatches'] = '%s entradas para %s';
$GLOBALS['TL_LANG']['MSC']['sEmpty'] = 'No hay resultados para <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sResults'] = 'Resultados %s - %s de %s <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sNoResult'] = 'Su búsqueda <strong>%s</strong> no ha producido resultados.';
$GLOBALS['TL_LANG']['MSC']['seconds'] = 'segundos';
$GLOBALS['TL_LANG']['MSC']['up'] = 'Arriba';
$GLOBALS['TL_LANG']['MSC']['first'] = '« Primero';
$GLOBALS['TL_LANG']['MSC']['previous'] = 'Anterior';
$GLOBALS['TL_LANG']['MSC']['next'] = 'Siguiente';
$GLOBALS['TL_LANG']['MSC']['last'] = 'Último »';
$GLOBALS['TL_LANG']['MSC']['goToPage'] = 'Ir a la página %s';
$GLOBALS['TL_LANG']['MSC']['totalPages'] = 'Página %s de %s';
$GLOBALS['TL_LANG']['MSC']['fileUploaded'] = 'Archivo %s transferido con éxito';
$GLOBALS['TL_LANG']['MSC']['fileExceeds'] = 'La imagen %s se cargo satisfactoriamente, sin embargo es demasiado grande para ajustar el tamaño de manera automática.';
$GLOBALS['TL_LANG']['MSC']['fileResized'] = 'El archivo %s ha sido transferido y reescalado a la dimensiones máximas permitidas';
$GLOBALS['TL_LANG']['MSC']['searchLabel'] = 'Buscar';
$GLOBALS['TL_LANG']['MSC']['keywords'] = 'Palabras clave';
$GLOBALS['TL_LANG']['MSC']['options'] = 'Opciones';
$GLOBALS['TL_LANG']['MSC']['matchAll'] = 'coincidir todas las palabras';
$GLOBALS['TL_LANG']['MSC']['matchAny'] = 'coincidir cualquier palabra';
$GLOBALS['TL_LANG']['MSC']['saveData'] = 'Guardar datos';
$GLOBALS['TL_LANG']['MSC']['printPage'] = 'Imprimir esta página';
$GLOBALS['TL_LANG']['MSC']['printAsPdf'] = 'Imprimir artículo como PDF';
$GLOBALS['TL_LANG']['MSC']['facebookShare'] = 'Compartir en Facebook';
$GLOBALS['TL_LANG']['MSC']['twitterShare'] = 'Compartir en Twitter';
$GLOBALS['TL_LANG']['MSC']['pleaseWait'] = 'Por favor espere';
$GLOBALS['TL_LANG']['MSC']['loading'] = 'Cargando...';
$GLOBALS['TL_LANG']['MSC']['more'] = 'Leer más...';
$GLOBALS['TL_LANG']['MSC']['readMore'] = 'Leer el artículo: %s';
$GLOBALS['TL_LANG']['MSC']['targetPage'] = 'Página destino';
$GLOBALS['TL_LANG']['MSC']['com_name'] = 'Nombre';
$GLOBALS['TL_LANG']['MSC']['com_email'] = 'E-mail (no publicado)';
$GLOBALS['TL_LANG']['MSC']['com_website'] = 'Web';
$GLOBALS['TL_LANG']['MSC']['com_comment'] = 'Comentario';
$GLOBALS['TL_LANG']['MSC']['com_submit'] = 'Enviar comentario';
$GLOBALS['TL_LANG']['MSC']['comment_by'] = 'Comentario por';
$GLOBALS['TL_LANG']['MSC']['reply_by'] = 'Respuesta por';
$GLOBALS['TL_LANG']['MSC']['com_quote'] = '%s escribió:';
$GLOBALS['TL_LANG']['MSC']['com_code'] = 'Código:';
$GLOBALS['TL_LANG']['MSC']['com_subject'] = 'Contao :: Nuevo comentario en %s.';
$GLOBALS['TL_LANG']['MSC']['com_message'] = 'Un nuevo comentario ha sido creado en tu sitio web. %s Si tu estas administrando tus comentarios, debes ingresar al back end y activarlo.';
$GLOBALS['TL_LANG']['MSC']['com_confirm'] = 'Tu comentario ha sido añadido y esta pendiente de revisión.';
$GLOBALS['TL_LANG']['MSC']['invalidPage'] = 'Lo siento, el ítem "%s" no existe.';
$GLOBALS['TL_LANG']['MSC']['list_orderBy'] = 'Ordenar por %s';
$GLOBALS['TL_LANG']['MSC']['list_perPage'] = 'Resultados por página';
$GLOBALS['TL_LANG']['MSC']['published'] = 'Publicado';
$GLOBALS['TL_LANG']['MSC']['unpublished'] = 'No publicado';
$GLOBALS['TL_LANG']['MSC']['addComment'] = 'Añadir comentario';
$GLOBALS['TL_LANG']['MSC']['autologin'] = 'Recordarme';
$GLOBALS['TL_LANG']['MSC']['relevance'] = '%s relevancia';

?>