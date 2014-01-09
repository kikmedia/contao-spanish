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

$GLOBALS['TL_LANG']['tl_article']['title'] = array('Título', 'Por favor introduce el título del artículo.');
$GLOBALS['TL_LANG']['tl_article']['alias'] = array('Alias artículo', 'El alias del artículo es una referencia única al artículo que puede ser llamado en vez de la ID del artículo.');
$GLOBALS['TL_LANG']['tl_article']['author'] = array('Autor', 'Por favor introduce el nombre del autor.');
$GLOBALS['TL_LANG']['tl_article']['inColumn'] = array('Mostrar en', 'Por favor asigna el artículo a una columna, encabezado o pie de página.');
$GLOBALS['TL_LANG']['tl_article']['keywords'] = array('Palabras clave', 'Puedes introducir varias palabras clave. Palabras clave ya no suelen ser relevantes para la mayoría de buscadores (incluido Google)');
$GLOBALS['TL_LANG']['tl_article']['teaserCssID'] = array('Teaser CSS ID/class', 'Aquí puedes introducir una ID de hoja de estilos (atributo id) y una o más clases de hoja de estilos (atributos class) para poder formatear el teaser utilizando CSS.');
$GLOBALS['TL_LANG']['tl_article']['showTeaser'] = array('Mostrar teaser', 'Mostrar el texto teaser en vez del artículo si hay artículos múltiples.');
$GLOBALS['TL_LANG']['tl_article']['teaser'] = array('Teaser', 'El texto de expectativa (teaser) puede mostrarse automáticamente o con el elemento de contenido "artículo teaser".');
$GLOBALS['TL_LANG']['tl_article']['printable'] = array('Imprimible', 'Mostrar el "imprimir como PDF" en la parte superior del artículo. Hojas de estilo con el media type "print" o "all" serán reconocidas.');
$GLOBALS['TL_LANG']['tl_article']['cssID'] = array('ID y clases de hoja de estilos', 'Aquí puedes introducir una ID de hoja de estilos (atributo id) y una o más clases de hoja de estilos (atributos class) para poder formatear el artículo utilizando CSS.');
$GLOBALS['TL_LANG']['tl_article']['space'] = array('Espaciado antes y después', 'Por favor introduce el espaciado en píxeles que quieras antes y después del artículo.');
$GLOBALS['TL_LANG']['tl_article']['published'] = array('Publicado', 'Si esta opción no esta marcada el artículo no será visible para los visitantes de tu web.');
$GLOBALS['TL_LANG']['tl_article']['start'] = array('Visible a partir de', 'Si introduces una fecha aquí el artículo actual no será visible en la web antes de la fecha introducida.');
$GLOBALS['TL_LANG']['tl_article']['stop'] = array('Visible hasta', 'Si introduces una fecha aquí el artículo actual no será visible en la web después de la fecha introducida.');
$GLOBALS['TL_LANG']['tl_article']['tstamp'] = array('Fecha de modificación', 'Fecha y hora de la última modificación');
$GLOBALS['TL_LANG']['tl_article']['title_legend'] = 'Título y autor';
$GLOBALS['TL_LANG']['tl_article']['layout_legend'] = 'Sección y palabras clave';
$GLOBALS['TL_LANG']['tl_article']['teaser_legend'] = 'Texto destacado';
$GLOBALS['TL_LANG']['tl_article']['expert_legend'] = 'Configuración avanzada';
$GLOBALS['TL_LANG']['tl_article']['publish_legend'] = 'Publicar configuración';
$GLOBALS['TL_LANG']['tl_article']['print'] = 'Imprimir la página';
$GLOBALS['TL_LANG']['tl_article']['pdf'] = 'Exportar como PDF';
$GLOBALS['TL_LANG']['tl_article']['facebook'] = 'Compartir en Facebook';
$GLOBALS['TL_LANG']['tl_article']['twitter'] = 'Compartir en Twitter';
$GLOBALS['TL_LANG']['tl_article']['header'] = 'Cabecera';
$GLOBALS['TL_LANG']['tl_article']['left'] = 'Columna izquierda';
$GLOBALS['TL_LANG']['tl_article']['main'] = 'Columna principal';
$GLOBALS['TL_LANG']['tl_article']['right'] = 'Columna derecha';
$GLOBALS['TL_LANG']['tl_article']['footer'] = 'Pie';
$GLOBALS['TL_LANG']['tl_article']['new'] = array('Artículo nuevo', 'Crear un artículo nuevo');
$GLOBALS['TL_LANG']['tl_article']['show'] = array('Detalles del artículo', 'Ver los detalles del artículo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['edit'] = array('Editar artículo', 'Editar artículo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['editheader'] = array('Editar opciones del artículo', 'Editar las opciones del articulo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['copy'] = array('Duplicar artículo', 'Duplicar artículo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['cut'] = array('Mover artículo', 'Mover artículo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['delete'] = array('Eliminar artículo', 'Eliminar artículo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['toggle'] = array('Publicar/despublicar articulo', 'Publicar/despublicar articulo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['pasteafter'] = array('Pegar después', 'Pegar después del artículo con ID %s');
$GLOBALS['TL_LANG']['tl_article']['pasteinto'] = array('Pegar dentro', 'Pegar dentro de la página con ID %s');

?>