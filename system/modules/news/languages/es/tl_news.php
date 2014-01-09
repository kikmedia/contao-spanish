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

$GLOBALS['TL_LANG']['tl_news']['headline'] = array('Titular', 'Por favor introduce el titular de la noticia.');
$GLOBALS['TL_LANG']['tl_news']['alias'] = array('Alias de noticia', 'Un alias de noticia es una referencia única a una noticia, puede ser utilizado como la ID de la noticia.');
$GLOBALS['TL_LANG']['tl_news']['author'] = array('Autor', 'Puedes cambiar el autor de la noticia.');
$GLOBALS['TL_LANG']['tl_news']['date'] = array('Fecha', 'Por favor introduce la fecha de la noticia.');
$GLOBALS['TL_LANG']['tl_news']['time'] = array('Hora', 'Por favor introduce la hora de la noticia.');
$GLOBALS['TL_LANG']['tl_news']['subheadline'] = array('Subtitular', 'Puedes introducir un subtitular aqui.');
$GLOBALS['TL_LANG']['tl_news']['teaser'] = array('Texto breve', 'El texto breve se muestra en vez de la noticia entera. Le sigue un enlance con "leer más..."');
$GLOBALS['TL_LANG']['tl_news']['text'] = array('Texto de noticia', 'Por favor introduce el texto de la noticia.');
$GLOBALS['TL_LANG']['tl_news']['addImage'] = array('Añadir una imagen', 'Si seleccionas esta opción, una imagen será añadida a la noticia.');
$GLOBALS['TL_LANG']['tl_news']['addEnclosure'] = array('Añadir archivo', 'Añadir un archivo a la noticia');
$GLOBALS['TL_LANG']['tl_news']['enclosure'] = array('Añadir RSS', 'Por favor selecciona el archivo que quieres añadir al RSS feed.');
$GLOBALS['TL_LANG']['tl_news']['source'] = array('Página fuente', 'Por favor selecciona si la noticia enlaza con una página interna o externa.');
$GLOBALS['TL_LANG']['tl_news']['default'] = array('Utilizar valor por defecto', 'Al hacer clic en "leer más..." los visitantes serán redirigidos a una página por defecto del archivo de noticias.');
$GLOBALS['TL_LANG']['tl_news']['internal'] = array('Página interna', 'Al hacer clic en "leer más..." los visitantes serán redirigidos a una página interna donde podrán leer la noticia entera.');
$GLOBALS['TL_LANG']['tl_news']['article'] = array('Artículo', 'Al hacer clc en el botón "leer más...", los visitantes serán redirigidos a un artículo.');
$GLOBALS['TL_LANG']['tl_news']['external'] = array('Web externa', 'Al hacer clic en "leer más..." los visitantes serán redirigidos a una web externa donde podrán leer la noticia entera.');
$GLOBALS['TL_LANG']['tl_news']['jumpTo'] = array('Saltar a página', 'Por favor selecciona la página a la que será redirigidos los visitantes. Recuerda que la página de destino debe incluir el plugin "Lector de noticias" para poder mostrar la noticia.');
$GLOBALS['TL_LANG']['tl_news']['articleId'] = array('Artículo', 'Seleccione el artículo al que serán redirigidos los visitantes después de hacer clic en el elemento de noticias.');
$GLOBALS['TL_LANG']['tl_news']['cssClass'] = array('Clase CSS', 'Aqui puedes introducir una o más clases CSS.');
$GLOBALS['TL_LANG']['tl_news']['noComments'] = array('Deshabilitar comentarios', 'Deshabilitar comentarios para este artículo de noticias.');
$GLOBALS['TL_LANG']['tl_news']['featured'] = array('Artículo destacado', 'Mostrar este artículo en la lista de noticias destacadas.');
$GLOBALS['TL_LANG']['tl_news']['published'] = array('Publicado', 'La noticia no será visible en la web hasta que esté publicada.');
$GLOBALS['TL_LANG']['tl_news']['start'] = array('Mostrar desde', 'No mostrar esta noticia antes del día seleccionado.');
$GLOBALS['TL_LANG']['tl_news']['stop'] = array('Mostrar hasta', 'No mostrar esta noticia después del día seleccionado.');
$GLOBALS['TL_LANG']['tl_news']['title_legend'] = 'Título y autor';
$GLOBALS['TL_LANG']['tl_news']['date_legend'] = 'Fecha y hora';
$GLOBALS['TL_LANG']['tl_news']['teaser_legend'] = 'Subtítulo y destacado';
$GLOBALS['TL_LANG']['tl_news']['text_legend'] = 'Texto notícia';
$GLOBALS['TL_LANG']['tl_news']['image_legend'] = 'Imágen artículo';
$GLOBALS['TL_LANG']['tl_news']['enclosure_legend'] = 'Documentos adjuntos';
$GLOBALS['TL_LANG']['tl_news']['source_legend'] = 'Destino redirección';
$GLOBALS['TL_LANG']['tl_news']['expert_legend'] = 'Ajustes avanzados';
$GLOBALS['TL_LANG']['tl_news']['publish_legend'] = 'Publicar ajustes';
$GLOBALS['TL_LANG']['tl_news']['new'] = array('Nueva noticia', 'Crear una noticia nueva');
$GLOBALS['TL_LANG']['tl_news']['show'] = array('Detalles de noticia', 'Mostrar los detalles de la noticia con ID %s');
$GLOBALS['TL_LANG']['tl_news']['edit'] = array('Editar noticia', 'Editar noticia con ID %s');
$GLOBALS['TL_LANG']['tl_news']['copy'] = array('Copiar noticia', 'Copiar noticia con ID %s');
$GLOBALS['TL_LANG']['tl_news']['cut'] = array('Mover noticia', 'Mover noticia con ID %s');
$GLOBALS['TL_LANG']['tl_news']['delete'] = array('Eliminar noticia', 'Eliminar noticia con ID %s');
$GLOBALS['TL_LANG']['tl_news']['toggle'] = array('Publicar/retirar artículo', 'Publicar/retirar el artículo de noticas con ID %s');
$GLOBALS['TL_LANG']['tl_news']['feature'] = array('Resaltar artículo', 'Resaltar o no el artículo de noticias con ID %s.');
$GLOBALS['TL_LANG']['tl_news']['editheader'] = array('Editar encabezado de noticia', 'Editar el encabezado de este archivo');
$GLOBALS['TL_LANG']['tl_news']['pasteafter'] = array('Pegar en este archivo', 'Colocar después del artículo de noticias con ID %s');

?>