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

$GLOBALS['TL_LANG']['tl_style']['invisible'] = array('Invisible', 'No exportar la definición de formato.');
$GLOBALS['TL_LANG']['tl_style']['selector'] = array('Selector', 'Un selector define a qué elemento HTML o grupo de elementos se aplica un formato definido. Puede introducir uno o mas selectores separados por comas.');
$GLOBALS['TL_LANG']['tl_style']['category'] = array('Categoría', 'Utiliza categorías para agrupar tus definiciones de formato y hacer un seguimiento.');
$GLOBALS['TL_LANG']['tl_style']['comment'] = array('Comentarios', 'Los comentarios se mostraran encima del formato definido correspondiente.');
$GLOBALS['TL_LANG']['tl_style']['size'] = array('Tamaño y posición', 'Editar el tamaño y posición (ancho, altura, posición, overflow, float, clear, display).');
$GLOBALS['TL_LANG']['tl_style']['width'] = array('Ancho', 'Por favor introduce el ancho del elemento y su unidad.');
$GLOBALS['TL_LANG']['tl_style']['height'] = array('Altura', 'Por favor introduce la altura del elemento y su unidad.');
$GLOBALS['TL_LANG']['tl_style']['minwidth'] = array('Ancho mínimo', 'Aquí puede ingresar el ancho mínimo del elemento.');
$GLOBALS['TL_LANG']['tl_style']['minheight'] = array('Altura mínima', 'Aquí puede ingresar la altura mínima del elemento.');
$GLOBALS['TL_LANG']['tl_style']['maxwidth'] = array('Ancho máximo', 'Aquí puede ingresar el ancho máximo del elemento.');
$GLOBALS['TL_LANG']['tl_style']['maxheight'] = array('Altura máxima', 'Aquí puede ingresar la altura máxima del elemento.');
$GLOBALS['TL_LANG']['tl_style']['positioning'] = array('Posición', 'Definir atributos CSS: position, floar, clear, overflow y display.');
$GLOBALS['TL_LANG']['tl_style']['trbl'] = array('Posición', 'Por favor introduce la posición superior, derecha, inferior y izquierda y su unidad.');
$GLOBALS['TL_LANG']['tl_style']['position'] = array('Tipo de posición', 'Especifica el tipo de posición.');
$GLOBALS['TL_LANG']['tl_style']['floating'] = array('Float', 'Permite que un elemento se sobreponga.');
$GLOBALS['TL_LANG']['tl_style']['clear'] = array('Clear', 'Continua el texto por debajo de un elemento sobrepuesto.');
$GLOBALS['TL_LANG']['tl_style']['overflow'] = array('Overflow', '\'Define como se muestra un elemento cuando el contenido supera su tamaño.');
$GLOBALS['TL_LANG']['tl_style']['display'] = array('Display', 'Define como se muestra un elemento.');
$GLOBALS['TL_LANG']['tl_style']['alignment'] = array('Margen, padding y alineación', 'Editar el margen, padding y alineación (margin, padding, align, text-align, vertical-align).');
$GLOBALS['TL_LANG']['tl_style']['margin'] = array('Margen', 'Por favor introduce el margen superior, derecho, inferior y izquierdo y su unidad. El margen es la distancia entre un elemento y los elementos que lo rodean.');
$GLOBALS['TL_LANG']['tl_style']['padding'] = array('Padding', 'Por favor introduce el padding superior, derecho, inferior y izquierdo y su unidad. Padding es la distancia entre el contenido del elemento y sus márgenes.');
$GLOBALS['TL_LANG']['tl_style']['align'] = array('Alineación del elemento', 'Para poder alinear un elemento el valor de su margen izquierdo o derecho será omitido.');
$GLOBALS['TL_LANG']['tl_style']['verticalalign'] = array('Alineación vertical', 'Define la alineación vertical.');
$GLOBALS['TL_LANG']['tl_style']['textalign'] = array('Alineación de texto', 'Define la alineación horizontal del texto.');
$GLOBALS['TL_LANG']['tl_style']['background'] = array('Fondo', 'Edita las propiedades del fondo (color, imagen, posición, repeat).');
$GLOBALS['TL_LANG']['tl_style']['bgcolor'] = array('Color de fondo', 'Por favor introduce un valor hexadecimal para el color de fondo (por ejemplo ff0000 para rojo).');
$GLOBALS['TL_LANG']['tl_style']['bgimage'] = array('Imagen de fondo', 'Puede introducir la ruta para la imagen de fondo.');
$GLOBALS['TL_LANG']['tl_style']['bgposition'] = array('Posición de fondo', 'Por favor selecciona la posición de la imagen de fondo.');
$GLOBALS['TL_LANG']['tl_style']['bgrepeat'] = array('Repetir fondo', 'Por favor selecciona el modo de repetición.');
$GLOBALS['TL_LANG']['tl_style']['shadowsize'] = array('Tamaño de sombra', 'Aquí puede ingresar el desfase X y Y, el tamaño opcional de difuminado, y un radio opcional de propagación.');
$GLOBALS['TL_LANG']['tl_style']['shadowcolor'] = array('Color de sombra', 'Aquí puede ingresar un número hexadecimal de color (p.e. ff0000 para rojo) y un porcentaje de transparencia opcional (p.e. 75).');
$GLOBALS['TL_LANG']['tl_style']['gradientAngle'] = array('Ángulo de gradiente', 'Aquí puede ingresar el ángulo de gradiente (p.e. <em>-45deg</em>) o el punto inicial (p.e. <em>top</em> para el borde superior, o <em>left bottom</em> para la esquina inferior izquierda).');
$GLOBALS['TL_LANG']['tl_style']['gradientColors'] = array('Colores de gradiente', 'Aquí puede ingresar hasta cuatro colores con un porcentaje opcional (p.e. <em>ffc 10%| f90 | f00</em>).');
$GLOBALS['TL_LANG']['tl_style']['border'] = array('Bordes', 'Edita las propiedades de los bordes (ancho, estilo, color, collapse).');
$GLOBALS['TL_LANG']['tl_style']['borderwidth'] = array('Ancho de borde', 'Por favor introduce el borde superior, derecho, inferior y izquierdo y su unidad.');
$GLOBALS['TL_LANG']['tl_style']['borderstyle'] = array('Estilo de borde', 'Por favor selecciona el estilo de borde.');
$GLOBALS['TL_LANG']['tl_style']['bordercolor'] = array('Color de borde', 'Por favor introduce un color para el borde en formato hexadecimal (por ejemplo ff0000 para rojo).');
$GLOBALS['TL_LANG']['tl_style']['borderradius'] = array('Radio de borde', 'Aquí puede ingresar el radio de los bordes superior, derecho, inferior e izquierdo.');
$GLOBALS['TL_LANG']['tl_style']['bordercollapse'] = array('Manejo de bordes', 'Por favor define si los bordes de las celdas adyacentes se muestran como un borde o como dos bordes separados.');
$GLOBALS['TL_LANG']['tl_style']['borderspacing'] = array('Espaciado de bordes', 'Aquí puede ingresar el espaciado de los bordes.');
$GLOBALS['TL_LANG']['tl_style']['font'] = array('Tipografía', 'Edita las propiedades de la tipografía (tipos, tamaño, estilo, color, interlineado, espaciado).');
$GLOBALS['TL_LANG']['tl_style']['fontfamily'] = array('Tipos de tipografía', 'Por favor introduce una lista de tipos de tipografías separadas por comas. Utiliza comillas si los nombres de la tipografías contienen espacios en blanco y por lo menos incluye una familia de tipografía genérica (por ejemplo <em>sans-serif</em>).');
$GLOBALS['TL_LANG']['tl_style']['fontsize'] = array('Tamaño de tipografía', 'Por favor introduce el tamaño de la tipografía y su unidad.');
$GLOBALS['TL_LANG']['tl_style']['fontcolor'] = array('Font color', 'Aquí puedes insertar un color de fuente hexadecimal (p.e. ff0000 para rojo).');
$GLOBALS['TL_LANG']['tl_style']['lineheight'] = array('Interlineado', 'Aquí puedes definir la altura de linea.');
$GLOBALS['TL_LANG']['tl_style']['fontstyle'] = array('Estilo de tipografía', 'Por favor selecciona uno o más estilos de tipografía.');
$GLOBALS['TL_LANG']['tl_style']['whitespace'] = array('Desactivar saltos de linea automáticos', 'Si seleccionas esta opción, se desactiva el salto de linea automático (word wrapping).');
$GLOBALS['TL_LANG']['tl_style']['texttransform'] = array('Transformación de texto', 'Aquí puede seleccionar la modalidad de transformación de texto.');
$GLOBALS['TL_LANG']['tl_style']['textindent'] = array('Sangrado de texto', 'Aquí puede ingresar el sangrado de texto.');
$GLOBALS['TL_LANG']['tl_style']['letterspacing'] = array('Espaciado entre letras', 'Aquí puede modificar el espaciado entre letras (valor predeterminado: 0px).');
$GLOBALS['TL_LANG']['tl_style']['wordspacing'] = array('Espaciado entre palabras', 'Aquí puede modificar el espaciado entre palabras (valor predeterminado: 0px).');
$GLOBALS['TL_LANG']['tl_style']['list'] = array('Lista', 'Edita las propiedades de la lista (estilo, tipo, imagen).');
$GLOBALS['TL_LANG']['tl_style']['liststyletype'] = array('Símobolo de lista', 'Por favor selecciona un símbolo de lista.');
$GLOBALS['TL_LANG']['tl_style']['liststyleimage'] = array('Símbolo personalizado', 'Aquí puedes introducir la ruta a un símbolo personalizado.');
$GLOBALS['TL_LANG']['tl_style']['own'] = array('Código CSS personalizado', 'Aquí puedes introducir código CSS personalizado.');
$GLOBALS['TL_LANG']['tl_style']['selector_legend'] = 'Selector y categoría';
$GLOBALS['TL_LANG']['tl_style']['size_legend'] = 'Tamaño';
$GLOBALS['TL_LANG']['tl_style']['position_legend'] = 'Posición';
$GLOBALS['TL_LANG']['tl_style']['align_legend'] = 'Márgenes y alineación';
$GLOBALS['TL_LANG']['tl_style']['background_legend'] = 'Ajustes de background';
$GLOBALS['TL_LANG']['tl_style']['border_legend'] = 'Ajustes de bordes';
$GLOBALS['TL_LANG']['tl_style']['font_legend'] = 'Ajustes de tipografia';
$GLOBALS['TL_LANG']['tl_style']['list_legend'] = 'Ajustes de listado';
$GLOBALS['TL_LANG']['tl_style']['custom_legend'] = 'Código personalizado';
$GLOBALS['TL_LANG']['tl_style']['normal'] = 'normal';
$GLOBALS['TL_LANG']['tl_style']['bold'] = 'negrita';
$GLOBALS['TL_LANG']['tl_style']['italic'] = 'itálica';
$GLOBALS['TL_LANG']['tl_style']['underline'] = 'subrayado';
$GLOBALS['TL_LANG']['tl_style']['notUnderlined'] = 'no subrayado';
$GLOBALS['TL_LANG']['tl_style']['line-through'] = 'tachado';
$GLOBALS['TL_LANG']['tl_style']['overline'] = 'sobre linea';
$GLOBALS['TL_LANG']['tl_style']['small-caps'] = 'mayúsculas reducidas (small-caps)';
$GLOBALS['TL_LANG']['tl_style']['disc'] = 'punto';
$GLOBALS['TL_LANG']['tl_style']['circle'] = 'círculo';
$GLOBALS['TL_LANG']['tl_style']['square'] = 'cuadrado';
$GLOBALS['TL_LANG']['tl_style']['decimal'] = 'figuras';
$GLOBALS['TL_LANG']['tl_style']['upper-roman'] = 'mayúsculas (figuras latinas)';
$GLOBALS['TL_LANG']['tl_style']['lower-roman'] = 'minúsculas (figuras latinas)';
$GLOBALS['TL_LANG']['tl_style']['upper-alpha'] = 'mayúsculas (caracteres)';
$GLOBALS['TL_LANG']['tl_style']['lower-alpha'] = 'minúsculas (caracteres)';
$GLOBALS['TL_LANG']['tl_style']['uppercase'] = 'mayúsculas';
$GLOBALS['TL_LANG']['tl_style']['lowercase'] = 'minúsculas';
$GLOBALS['TL_LANG']['tl_style']['capitalize'] = 'iniciales mayúsculas';
$GLOBALS['TL_LANG']['tl_style']['none'] = 'sin punto (bullet)';
$GLOBALS['TL_LANG']['tl_style']['new'] = array('Definición de formato nuevo', 'Crear una definición de formato nuevo');
$GLOBALS['TL_LANG']['tl_style']['show'] = array('Detalles de definición de formato', 'Mostrar detalles de la definición de formato con ID %s');
$GLOBALS['TL_LANG']['tl_style']['edit'] = array('Editar definición de formato', 'Editar definición de formato con ID %s');
$GLOBALS['TL_LANG']['tl_style']['cut'] = array('Mover definición de formato', 'Mover definición de formato con ID %s');
$GLOBALS['TL_LANG']['tl_style']['copy'] = array('Duplicar definición de formato', 'Duplicar definición de formato con ID %s');
$GLOBALS['TL_LANG']['tl_style']['delete'] = array('Eliminar definición de formato', 'Eliminar definición de formato con ID %s');
$GLOBALS['TL_LANG']['tl_style']['editheader'] = array('Editar encabezado de hoja de estilo', 'Editar el encabezado de esta hoja de estilo');
$GLOBALS['TL_LANG']['tl_style']['pasteafter'] = array('Pegar al inicio', 'Pegar después de la definición de formato con ID %s');
$GLOBALS['TL_LANG']['tl_style']['pastenew'] = array('Crear una definición de formato nuevo al inicio', 'Crear un definición de formato nuevo después de la definición de formato con ID %s');
$GLOBALS['TL_LANG']['tl_style']['toggle'] = array('Alternar visibilidad', 'Alternar la visibilidad de definiciones de formato con ID %s');

?>