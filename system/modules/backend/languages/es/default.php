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

$GLOBALS['TL_LANG']['ERR']['general'] = '¡Ha ocurrido un error!';
$GLOBALS['TL_LANG']['ERR']['unique'] = '¡Dato duplicado en el campo "%s"!';
$GLOBALS['TL_LANG']['ERR']['mandatory'] = '¡El campo "%s no debe estar vacío!';
$GLOBALS['TL_LANG']['ERR']['mdtryNoLabel'] = '¡Este campo no debe estar vacío!';
$GLOBALS['TL_LANG']['ERR']['minlength'] = '¡El campo "%s" debe tener al menos %d caracteres!';
$GLOBALS['TL_LANG']['ERR']['maxlength'] = '¡La longitud del campo "%s" no puede exceder %d caracteres!';
$GLOBALS['TL_LANG']['ERR']['digit'] = '¡Por favor, introduce sólo números!';
$GLOBALS['TL_LANG']['ERR']['prcnt'] = '¡Por favor, introduce un porcentaje entre 0 y 100!';
$GLOBALS['TL_LANG']['ERR']['alpha'] = '¡Por favor, introduce letras solamente¡';
$GLOBALS['TL_LANG']['ERR']['alnum'] = '¡Por favor, introduce letras y números solamente!';
$GLOBALS['TL_LANG']['ERR']['phone'] = '¡Por favor, introduce un número de teléfono válido!';
$GLOBALS['TL_LANG']['ERR']['extnd'] = '¡Por motivos de seguridad, no puedes emplear aquí los siguientes caracteres: (=<>&/()#)!';
$GLOBALS['TL_LANG']['ERR']['email'] = '¡Por favor, introduce un e-mail válido!';
$GLOBALS['TL_LANG']['ERR']['emails'] = 'Por lo menos hay una dirección de e-mail inválida!';
$GLOBALS['TL_LANG']['ERR']['url'] = '¡Por favor introduce una URL válida y codifica los caracteres especiales!';
$GLOBALS['TL_LANG']['ERR']['date'] = '¡Por favor introduce la fecha como "%s"!';
$GLOBALS['TL_LANG']['ERR']['time'] = '¡Por favor introduce la hora como "%s"!';
$GLOBALS['TL_LANG']['ERR']['dateTime'] = '¡Por favor introduce la fecha y hora como "%s"!';
$GLOBALS['TL_LANG']['ERR']['noSpace'] = '¡El campo "%s" no debe contener caracteres de espacio en blanco!';
$GLOBALS['TL_LANG']['ERR']['filesize'] = '¡El tamaño máximo para subir archivos es de %s! (Contao o configuración de php.ini)';
$GLOBALS['TL_LANG']['ERR']['filetype'] = '¡No esta permitido subir archivos del tipo "%s"!';
$GLOBALS['TL_LANG']['ERR']['filepartial'] = '¡El archivo %s solo se ha podido transferir parcialmente!';
$GLOBALS['TL_LANG']['ERR']['filewidth'] = '¡El archivo %s excede el ancho máximo de %d pixels!';
$GLOBALS['TL_LANG']['ERR']['fileheight'] = '¡El archivo %s excede la altura máxima de %d pixels!';
$GLOBALS['TL_LANG']['ERR']['invalidReferer'] = '¡Acceso denegado! ¡La dirección del host actual (%s) no coincide con la del referrer host (%s)!';
$GLOBALS['TL_LANG']['ERR']['invalidPass'] = '¡Contraseña no válida!';
$GLOBALS['TL_LANG']['ERR']['passwordLength'] = '¡La contraseña debe ser de al menos %d caracteres!';
$GLOBALS['TL_LANG']['ERR']['passwordName'] = '¡El usuario y la contraseña no pueden ser iguales!';
$GLOBALS['TL_LANG']['ERR']['passwordMatch'] = '¡Las contraseñas no coinciden!';
$GLOBALS['TL_LANG']['ERR']['accountLocked'] = '¡La cuenta ha sido bloqueada. Prueba a acceder pasados %d minutos!';
$GLOBALS['TL_LANG']['ERR']['invalidLogin'] = '¡Datos de acceso erróneos!';
$GLOBALS['TL_LANG']['ERR']['invalidColor'] = '¡Formato de color inválido!';
$GLOBALS['TL_LANG']['ERR']['all_fields'] = '¡Por favor selecciona al menos un campo!';
$GLOBALS['TL_LANG']['ERR']['aliasExists'] = '¡El alias "%s" ya existe!';
$GLOBALS['TL_LANG']['ERR']['importFolder'] = '!No se puede importar la carpeta "%s"!';
$GLOBALS['TL_LANG']['ERR']['notWriteable'] = '¡El archivo "%s" no es modificable, sus cambios no tendran efecto!';
$GLOBALS['TL_LANG']['ERR']['invalidName'] = '¡Este nombre de archivo o carpeta no es válido!';
$GLOBALS['TL_LANG']['ERR']['invalidFile'] = '¡Este archivo o carpeta no es válido!';
$GLOBALS['TL_LANG']['ERR']['fileExists'] = '¡El archivo "%s" ya existe!';
$GLOBALS['TL_LANG']['ERR']['circularReference'] = '¡Objetivo de redirección no válido (referencia circular)!';
$GLOBALS['TL_LANG']['ERR']['ie6warning'] = '%s<strong>¡Atención!</strong> Su navegador esta %sobsoleto%s y <strong>no puede utilizar todas las características de este sitio web</strong>.%s';
$GLOBALS['TL_LANG']['ERR']['noFallbackEmpty'] = 'Ninguna de las páginas principales de los sitios activos sin DNS explícito tienen establecida la opción de idioma de respaldo, esto significa que estos sitios están disponibles únicamente en el idioma definido en las características de la página. Los visitantes y buscadores que no entiendan dicho idioma no podrán navegar el sitio.';
$GLOBALS['TL_LANG']['ERR']['noFallbackDns'] = 'Ninguna de las páginas principales para <strong>%s</strong> tienen establecida la opción de idioma de respaldo, esto significa que estos sitios están disponibles únicamente en el idioma definido en las características de la página. Los visitantes y buscadores que no entiendan dicho idioma no podrán navegar el sitio.';
$GLOBALS['TL_LANG']['ERR']['multipleFallback'] = 'Solo puede definir una página raíz por dominio como página de reserva de idioma.';
$GLOBALS['TL_LANG']['ERR']['topLevelRoot'] = 'Páginas de nivel superior deben ser páginas raíz del sitio web!';
$GLOBALS['TL_LANG']['ERR']['topLevelRegular'] = 'Hay páginas en el nivel superior, que no son páginas raíz del sitio web. Creando sitios web sin una página principal ya no es soportado, así que por favor asegúrate de que todas las páginas estén correctamente agrupadas.';
$GLOBALS['TL_LANG']['PTY']['regular'] = array('Página básica', 'Una página básica contiene artículos y elementos de contenido. Es el tipo de página por defecto.');
$GLOBALS['TL_LANG']['PTY']['redirect'] = array('Redirige a una URL externa', 'Esta página redirige los visitantes automáticamente a una URL externa. Funciona como un enlace.');
$GLOBALS['TL_LANG']['PTY']['forward'] = array('Redirige a una URL interna', 'Esta página redirige los visitantes a otra página de nuestra web. La redirección se hace a través del ID de la página o su alias.');
$GLOBALS['TL_LANG']['PTY']['root'] = array('Raíz de sitio', 'Este tipo de página marca el punto de inicio de un sitio dentro de la estructura general. Una página raíz contiene una entrada DNS o un idioma, o ambos.');
$GLOBALS['TL_LANG']['PTY']['error_403'] = array('Estatus 403 (acceso denegado)', 'Si un usuario intenta acceder a una página protegida sin tener el permiso se carga la página de error 403 a cambio.');
$GLOBALS['TL_LANG']['PTY']['error_404'] = array('Estatus 404 (página no encontrada)', 'Si un usuario intenta acceder a una página no existente se carga la página de error 404 a cambio.');
$GLOBALS['TL_LANG']['FOP']['fop'] = array('Permisos de archivos', 'Aquí puedes elegir las operaciones de archivos que quieres permitir.');
$GLOBALS['TL_LANG']['FOP']['f1'] = 'Subir archivos al servidor';
$GLOBALS['TL_LANG']['FOP']['f2'] = 'Editar, copiar o mover archivos y carpetas';
$GLOBALS['TL_LANG']['FOP']['f3'] = 'Eliminar un archivo o carpetas vacías';
$GLOBALS['TL_LANG']['FOP']['f4'] = 'Eliminar carpetas incluyendo todos sus archivos y subcarpetas (!)';
$GLOBALS['TL_LANG']['FOP']['f5'] = 'Editar archivos en el editor de código fuente';
$GLOBALS['TL_LANG']['CHMOD']['editpage'] = 'Editar página';
$GLOBALS['TL_LANG']['CHMOD']['editnavigation'] = 'Editar jerarquía de páginas';
$GLOBALS['TL_LANG']['CHMOD']['deletepage'] = 'Eliminar página';
$GLOBALS['TL_LANG']['CHMOD']['editarticles'] = 'Editar artículos';
$GLOBALS['TL_LANG']['CHMOD']['movearticles'] = 'Editar jerarquía de artículos';
$GLOBALS['TL_LANG']['CHMOD']['deletearticles'] = 'Eliminar artículos';
$GLOBALS['TL_LANG']['CHMOD']['cuser'] = 'Usuario';
$GLOBALS['TL_LANG']['CHMOD']['cgroup'] = 'Grupo';
$GLOBALS['TL_LANG']['CHMOD']['cworld'] = 'Todos';
$GLOBALS['TL_LANG']['DAYS'][0] = 'Domingo';
$GLOBALS['TL_LANG']['DAYS'][1] = 'Lunes';
$GLOBALS['TL_LANG']['DAYS'][2] = 'Martes';
$GLOBALS['TL_LANG']['DAYS'][3] = 'Miércoles';
$GLOBALS['TL_LANG']['DAYS'][4] = 'Jueves';
$GLOBALS['TL_LANG']['DAYS'][5] = 'Viernes';
$GLOBALS['TL_LANG']['DAYS'][6] = 'Sábado';
$GLOBALS['TL_LANG']['DAYS_SHORT'][0] = 'Dom';
$GLOBALS['TL_LANG']['DAYS_SHORT'][1] = 'Lun';
$GLOBALS['TL_LANG']['DAYS_SHORT'][2] = 'Mar';
$GLOBALS['TL_LANG']['DAYS_SHORT'][3] = 'Mie';
$GLOBALS['TL_LANG']['DAYS_SHORT'][4] = 'Jue';
$GLOBALS['TL_LANG']['DAYS_SHORT'][5] = 'Vie';
$GLOBALS['TL_LANG']['DAYS_SHORT'][6] = 'Sab';
$GLOBALS['TL_LANG']['MONTHS'][0] = 'Enero';
$GLOBALS['TL_LANG']['MONTHS'][1] = 'Febrero';
$GLOBALS['TL_LANG']['MONTHS'][2] = 'Marzo';
$GLOBALS['TL_LANG']['MONTHS'][3] = 'Abril';
$GLOBALS['TL_LANG']['MONTHS'][4] = 'Mayo';
$GLOBALS['TL_LANG']['MONTHS'][5] = 'Junio';
$GLOBALS['TL_LANG']['MONTHS'][6] = 'Julio';
$GLOBALS['TL_LANG']['MONTHS'][7] = 'Agosto';
$GLOBALS['TL_LANG']['MONTHS'][8] = 'Septiembre';
$GLOBALS['TL_LANG']['MONTHS'][9] = 'Octubre';
$GLOBALS['TL_LANG']['MONTHS'][10] = 'Noviembre';
$GLOBALS['TL_LANG']['MONTHS'][11] = 'Diciembre';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][0] = 'Ene';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][1] = 'Feb';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][2] = 'Mar';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][3] = 'Abr';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][4] = 'May';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][5] = 'Jun';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][6] = 'Jul';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][7] = 'Ago';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][8] = 'Sep';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][9] = 'Oct';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][10] = 'Nov';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][11] = 'Dic';
$GLOBALS['TL_LANG']['MSC']['dayShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['monthShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['weekOffset'] = '0';
$GLOBALS['TL_LANG']['MSC']['titleFormat'] = 'l, dS de F Y';
$GLOBALS['TL_LANG']['MSC']['url'] = array('Destino de enlace', 'Por favor introduce una dirección WEB (ejemplo: em>http://www.dominio.com</em>). Para hacer un link a una dirección de e-mail introduce <em>mailto:nombre@dominio.com</em>. También puedes añadir etiquetas (ejemplo: <em>link_url</em>).');
$GLOBALS['TL_LANG']['MSC']['target'] = array('Abrir en una ventana nueva', 'Si seleccionas esta opción, la URL de destino se abrirá en una ventana nueva.');
$GLOBALS['TL_LANG']['MSC']['decimalSeparator'] = '.';
$GLOBALS['TL_LANG']['MSC']['thousandsSeparator'] = ',';
$GLOBALS['TL_LANG']['MSC']['separator'] = array('Separador', 'Por favor selecciona el carácter para separar los campos.');
$GLOBALS['TL_LANG']['MSC']['source'] = array('Archivos fuente', 'Por favor selecciona los archivos CSV que deseas importar desde el directorio de archivos.');
$GLOBALS['TL_LANG']['MSC']['comma'] = 'Coma';
$GLOBALS['TL_LANG']['MSC']['semicolon'] = 'Punto y coma';
$GLOBALS['TL_LANG']['MSC']['tabulator'] = 'Tabulador';
$GLOBALS['TL_LANG']['MSC']['linebreak'] = 'Salto de linea';
$GLOBALS['TL_LANG']['MSC']['lw_import'] = array('Importar CSV', 'Importar una lista de elementos desde un archivo CSV');
$GLOBALS['TL_LANG']['MSC']['lw_copy'] = 'Duplicar el elemento';
$GLOBALS['TL_LANG']['MSC']['lw_up'] = 'Mover el elemento una posición arriba';
$GLOBALS['TL_LANG']['MSC']['lw_down'] = 'Mover el elemento una posición abajo';
$GLOBALS['TL_LANG']['MSC']['lw_delete'] = 'Eliminar el elemento';
$GLOBALS['TL_LANG']['MSC']['tw_import'] = array('Importar CSV', 'Importar elementos de la tabla desde un archivo CSV');
$GLOBALS['TL_LANG']['MSC']['tw_expand'] = 'Incrementar el tamaño del campo de entrada';
$GLOBALS['TL_LANG']['MSC']['tw_shrink'] = 'Reducir el tamaño del campo de entrada';
$GLOBALS['TL_LANG']['MSC']['tw_rcopy'] = 'Duplicar la fila';
$GLOBALS['TL_LANG']['MSC']['tw_rup'] = 'Mover la fila una posición arriba';
$GLOBALS['TL_LANG']['MSC']['tw_rdown'] = 'Mover la fila una posición abajo';
$GLOBALS['TL_LANG']['MSC']['tw_rdelete'] = 'Eliminar la fila';
$GLOBALS['TL_LANG']['MSC']['tw_ccopy'] = 'Duplicar la columna';
$GLOBALS['TL_LANG']['MSC']['tw_cmovel'] = 'Mover la columna una posición a la izquierda';
$GLOBALS['TL_LANG']['MSC']['tw_cmover'] = 'Mover la columna una posición a la derecha';
$GLOBALS['TL_LANG']['MSC']['tw_cdelete'] = 'Eliminar la columna';
$GLOBALS['TL_LANG']['MSC']['ow_copy'] = 'Duplicar la fila';
$GLOBALS['TL_LANG']['MSC']['ow_up'] = 'Mover la fila una posición arriba';
$GLOBALS['TL_LANG']['MSC']['ow_down'] = 'Mover la fila una posición abajo';
$GLOBALS['TL_LANG']['MSC']['ow_delete'] = 'Eliminar la fila';
$GLOBALS['TL_LANG']['MSC']['ow_value'] = 'Valor';
$GLOBALS['TL_LANG']['MSC']['ow_label'] = 'Etiqueta';
$GLOBALS['TL_LANG']['MSC']['ow_key'] = 'Llave';
$GLOBALS['TL_LANG']['MSC']['ow_default'] = 'Por defecto';
$GLOBALS['TL_LANG']['MSC']['ow_group'] = 'Grupo';
$GLOBALS['TL_LANG']['MSC']['mw_copy'] = 'Duplicar la fila';
$GLOBALS['TL_LANG']['MSC']['mw_up'] = 'Mover la fila una posición arriba';
$GLOBALS['TL_LANG']['MSC']['mw_down'] = 'Mover la fila una posición abajo';
$GLOBALS['TL_LANG']['MSC']['mw_delete'] = 'Eliminar la fila';
$GLOBALS['TL_LANG']['MSC']['mw_module'] = 'Módulo';
$GLOBALS['TL_LANG']['MSC']['mw_column'] = 'Columna';
$GLOBALS['TL_LANG']['MSC']['relative'] = 'Dimensiones relativas';
$GLOBALS['TL_LANG']['MSC']['proportional'] = array('Proporcional', 'El tamaño más largo de la imágen será ajustado a las dimensiones introducidas y la imágen será ajustada proporcionalmente.');
$GLOBALS['TL_LANG']['MSC']['box'] = array('Ajustar a la caja', 'El tamaño más corto de la imágen será ajustado a las dimensiones introducidas y la imágen será ajustada proporcionalmente.');
$GLOBALS['TL_LANG']['MSC']['crop'] = 'Dimensiones exactas';
$GLOBALS['TL_LANG']['MSC']['left_top'] = array('Superior izquierdo', 'Conserva la parte izquierda de una imágen panorámica y la parte superior de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['center_top'] = array('Centro superior', 'Conserva el centro de una imágen panorámica y la parte superior de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['right_top'] = array('Superior derecho', 'Conserva la parte derecha de una imágen panorámica y la parte superior de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['left_center'] = array('Centro izquierdo', 'Conserva la parte izquierda de una imágen panorámica y la parte central de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['center_center'] = array('Centro central', 'Conserva el centro de una imágen panorámica y la parte central de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['right_center'] = array('Centro derecho', 'Conserva la parte derecha de una imágen panorámica y la parte central de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['left_bottom'] = array('Izquierda inferior', 'Conserva la parte izquierda de una imágen panorámica y la parte inferior de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['center_bottom'] = array('Centro inferior', 'Conserva la parte central de una imágen panorámica y la parte inferior de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['right_bottom'] = array('Centro derecho', 'Conserva la parte derecha de una imágen panorámica y la parte inferior de una imágen retrato.');
$GLOBALS['TL_LANG']['MSC']['id'] = array('ID', 'Un ID es un número identificador único de un registro de una tabla. Las ID normalmente se generan automáticamente. Como las ID se utilizan para relacionar registros, cambiarlas podría afectar a la consistencia de los datos!');
$GLOBALS['TL_LANG']['MSC']['pid'] = array('Parent ID', 'Una Parent ID es un número de identificación de un registro superior, al cual el registro actual esta relacionado. Las Parent ID normalmente se generan automáticamente. Como las ID se utilizan para relacionar registros, cambiarlas podría afectar a la consistencia de los datos!');
$GLOBALS['TL_LANG']['MSC']['sorting'] = array('Valor de orden', 'Un valor de orden se utiliza para ordenar los registros según un orden concreto. Los valores de orden normalmente se generan automáticamente.');
$GLOBALS['TL_LANG']['MSC']['all'] = array('Editar varios', 'Editar varios registros');
$GLOBALS['TL_LANG']['MSC']['all_fields'] = array('Campos disponibles', 'Por favor selecciona los campos que quieres editar.');
$GLOBALS['TL_LANG']['MSC']['password'] = array('Contraseña', 'Por favor, especifica una contraseña.');
$GLOBALS['TL_LANG']['MSC']['confirm'] = array('Confirma la contraseña', 'Por favor, confirma la contraseña.');
$GLOBALS['TL_LANG']['MSC']['dateAdded'] = array('Fecha agregada', 'Fecha agregada: %s');
$GLOBALS['TL_LANG']['MSC']['lastLogin'] = array('Ultimo inicio de sesión', 'Ultimo inicio de sesión: %s');
$GLOBALS['TL_LANG']['MSC']['move_up'] = array('Subir', 'Mover el elemento una posición hacia arriba');
$GLOBALS['TL_LANG']['MSC']['move_down'] = array('Bajar', 'Mover el elemento una posición hacia abajo');
$GLOBALS['TL_LANG']['MSC']['staticFiles'] = array('URL de archivos', 'La URL de archivos aplica al directorio <em>tl_files</em> y a todas las imágenes miniatura (optimización de descarga de páginas).');
$GLOBALS['TL_LANG']['MSC']['staticSystem'] = array('URL de script', 'La URL de script aplica a todos los archivos JavaScript y CSS, incluyendo las imágenes de fondo embebidas (optimización de descarga de páginas).');
$GLOBALS['TL_LANG']['MSC']['staticPlugins'] = array('URL de plugins', 'La URL de plugins aplica a todos los recursos en el directorio <em>plugins</em> (optimización de descarga de páginas).');
$GLOBALS['TL_LANG']['MSC']['shortcuts'] = array('Teclas de acceso rápido del Backend', 'Aprende más sobre accelerar tu proceso de trabajo usando <a href="http://www.contao.org/keyboard-shortcuts.html" target="_blank">keyboard shortcuts</a>.');
$GLOBALS['TL_LANG']['MSC']['feLink'] = 'Ir al front end';
$GLOBALS['TL_LANG']['MSC']['fePreview'] = 'Front end vista preliminar';
$GLOBALS['TL_LANG']['MSC']['feUser'] = 'Usuario del front end';
$GLOBALS['TL_LANG']['MSC']['backToTop'] = 'Volver arriba';
$GLOBALS['TL_LANG']['MSC']['home'] = 'Inicio';
$GLOBALS['TL_LANG']['MSC']['user'] = 'Usuario';
$GLOBALS['TL_LANG']['MSC']['loginTo'] = 'Login a %s';
$GLOBALS['TL_LANG']['MSC']['loginBT'] = 'Login';
$GLOBALS['TL_LANG']['MSC']['logoutBT'] = 'Desconectar';
$GLOBALS['TL_LANG']['MSC']['backBT'] = 'Volver';
$GLOBALS['TL_LANG']['MSC']['cancelBT'] = 'Cancelar';
$GLOBALS['TL_LANG']['MSC']['deleteConfirm'] = '¿Estas seguro que quieres eliminar la entrada con ID %s?';
$GLOBALS['TL_LANG']['MSC']['delAllConfirm'] = '¿Estas seguro que quiere eliminar los registros seleccionados?';
$GLOBALS['TL_LANG']['MSC']['filterRecords'] = 'Registros';
$GLOBALS['TL_LANG']['MSC']['filterAll'] = 'Todos';
$GLOBALS['TL_LANG']['MSC']['showRecord'] = 'Mostrar detalles del registro %s';
$GLOBALS['TL_LANG']['MSC']['editRecord'] = 'Editar el registro %s';
$GLOBALS['TL_LANG']['MSC']['all_info'] = 'Editar los registros seleccionadas de la tabla %s';
$GLOBALS['TL_LANG']['MSC']['showOnly'] = 'Mostrar';
$GLOBALS['TL_LANG']['MSC']['sortBy'] = 'Ordenar';
$GLOBALS['TL_LANG']['MSC']['filter'] = 'Filtrar';
$GLOBALS['TL_LANG']['MSC']['search'] = 'Buscar';
$GLOBALS['TL_LANG']['MSC']['noResult'] = 'No se encontraron registros.';
$GLOBALS['TL_LANG']['MSC']['save'] = 'Guardar';
$GLOBALS['TL_LANG']['MSC']['saveNclose'] = 'Guardar y cerrar';
$GLOBALS['TL_LANG']['MSC']['saveNedit'] = 'Guardar y editar';
$GLOBALS['TL_LANG']['MSC']['saveNback'] = 'Guardar y volver';
$GLOBALS['TL_LANG']['MSC']['saveNcreate'] = 'Guardar y nuevo';
$GLOBALS['TL_LANG']['MSC']['continue'] = 'Continuar';
$GLOBALS['TL_LANG']['MSC']['skipNavigation'] = 'Saltar navegación';
$GLOBALS['TL_LANG']['MSC']['selectAll'] = 'Seleccionar todos';
$GLOBALS['TL_LANG']['MSC']['pw_change'] = 'Por favor introduzca una nueva contraseña.';
$GLOBALS['TL_LANG']['MSC']['pw_changed'] = 'La contraseña se ha actualizado.';
$GLOBALS['TL_LANG']['MSC']['fallback'] = 'por defecto';
$GLOBALS['TL_LANG']['MSC']['view'] = 'Ver en una ventana nueva';
$GLOBALS['TL_LANG']['MSC']['fullsize'] = 'Mostrar la imagen a tamaño completo en una ventana nueva';
$GLOBALS['TL_LANG']['MSC']['colorpicker'] = 'Paleta de colores (requiere JavaScript)';
$GLOBALS['TL_LANG']['MSC']['pagepicker'] = 'Selector de páginas (requiere Javascript)';
$GLOBALS['TL_LANG']['MSC']['filepicker'] = 'Selector de archivos (requiere Javascript)';
$GLOBALS['TL_LANG']['MSC']['ppHeadline'] = 'Páginas Contao';
$GLOBALS['TL_LANG']['MSC']['fpHeadline'] = 'Archivos Contao';
$GLOBALS['TL_LANG']['MSC']['yes'] = 'sí';
$GLOBALS['TL_LANG']['MSC']['no'] = 'no';
$GLOBALS['TL_LANG']['MSC']['goBack'] = 'Volver';
$GLOBALS['TL_LANG']['MSC']['reload'] = 'Refrescar';
$GLOBALS['TL_LANG']['MSC']['above'] = 'arriba';
$GLOBALS['TL_LANG']['MSC']['below'] = 'abajo';
$GLOBALS['TL_LANG']['MSC']['date'] = 'Fecha';
$GLOBALS['TL_LANG']['MSC']['tstamp'] = 'Fecha de actualización';
$GLOBALS['TL_LANG']['MSC']['entry'] = '%s entrada';
$GLOBALS['TL_LANG']['MSC']['entries'] = '%s entradas';
$GLOBALS['TL_LANG']['MSC']['left'] = 'izquierda';
$GLOBALS['TL_LANG']['MSC']['center'] = 'centro';
$GLOBALS['TL_LANG']['MSC']['right'] = 'derecha';
$GLOBALS['TL_LANG']['MSC']['justify'] = 'justificado';
$GLOBALS['TL_LANG']['MSC']['filetree'] = 'Sistema de archivos';
$GLOBALS['TL_LANG']['MSC']['male'] = 'Masculino';
$GLOBALS['TL_LANG']['MSC']['female'] = 'Femenino';
$GLOBALS['TL_LANG']['MSC']['fileSize'] = 'Tamaño de archivo';
$GLOBALS['TL_LANG']['MSC']['fileCreated'] = 'Creado';
$GLOBALS['TL_LANG']['MSC']['fileModified'] = 'Última modificación';
$GLOBALS['TL_LANG']['MSC']['fileAccessed'] = 'Último acceso';
$GLOBALS['TL_LANG']['MSC']['fileDownload'] = 'Descargar';
$GLOBALS['TL_LANG']['MSC']['fileImageSize'] = 'Ancho/alto en píxeles';
$GLOBALS['TL_LANG']['MSC']['filePath'] = 'Ruta relativa';
$GLOBALS['TL_LANG']['MSC']['version'] = 'Versión';
$GLOBALS['TL_LANG']['MSC']['restore'] = 'Restaurar';
$GLOBALS['TL_LANG']['MSC']['backendModules'] = 'Módulos Back end';
$GLOBALS['TL_LANG']['MSC']['welcomeTo'] = '%s back end';
$GLOBALS['TL_LANG']['MSC']['updateVersion'] = 'Versión %s de Contao ya disponible';
$GLOBALS['TL_LANG']['MSC']['wordWrap'] = 'Ajuste de texto';
$GLOBALS['TL_LANG']['MSC']['saveAlert'] = '¡ATENCIÓN! Se perderán todos los cambios no guardados. ¿Continuar?';
$GLOBALS['TL_LANG']['MSC']['toggleNodes'] = 'Cambiar todos los nodos';
$GLOBALS['TL_LANG']['MSC']['expandNode'] = 'Extender nodo';
$GLOBALS['TL_LANG']['MSC']['collapseNode'] = 'Abrir nodo';
$GLOBALS['TL_LANG']['MSC']['loadingData'] = 'Cargando datos';
$GLOBALS['TL_LANG']['MSC']['deleteSelected'] = 'Borrar';
$GLOBALS['TL_LANG']['MSC']['editSelected'] = 'Editar';
$GLOBALS['TL_LANG']['MSC']['overrideSelected'] = 'Sobreescribir';
$GLOBALS['TL_LANG']['MSC']['moveSelected'] = 'Mover';
$GLOBALS['TL_LANG']['MSC']['copySelected'] = 'Copiar';
$GLOBALS['TL_LANG']['MSC']['changeSelected'] = 'Cambiar selección';
$GLOBALS['TL_LANG']['MSC']['resetSelected'] = 'Restablecer la selección';
$GLOBALS['TL_LANG']['MSC']['fileManager'] = 'Abrir el gestor de archivos en una ventana emergente';
$GLOBALS['TL_LANG']['MSC']['systemMessages'] = 'Mensajes del sistema';
$GLOBALS['TL_LANG']['MSC']['tasksCur'] = '%s tareas pendiente(s)';
$GLOBALS['TL_LANG']['MSC']['tasksCur'] = '%s tareas pendiente(s)';
$GLOBALS['TL_LANG']['MSC']['tasksNew'] = '%s nuevas tarea(s)';
$GLOBALS['TL_LANG']['MSC']['tasksNew'] = '%s nuevas tarea(s)';
$GLOBALS['TL_LANG']['MSC']['tasksDue'] = '%s tarea(s) retrasada(s)';
$GLOBALS['TL_LANG']['MSC']['tasksDue'] = '%s tarea(s) retrasada(s)';
$GLOBALS['TL_LANG']['MSC']['clearClipboard'] = 'Vaciar portapapeles';
$GLOBALS['TL_LANG']['MSC']['hiddenElements'] = 'Elementos no publicados';
$GLOBALS['TL_LANG']['MSC']['hiddenHide'] = 'Esconder';
$GLOBALS['TL_LANG']['MSC']['hiddenShow'] = 'Mostrar';
$GLOBALS['TL_LANG']['MSC']['apply'] = 'Aplicar';
$GLOBALS['TL_LANG']['MSC']['mandatory'] = 'Campo obligatorio';
$GLOBALS['TL_LANG']['MSC']['create'] = 'Crear';
$GLOBALS['TL_LANG']['MSC']['delete'] = 'Borrar';
$GLOBALS['TL_LANG']['MSC']['protected'] = 'protegido';
$GLOBALS['TL_LANG']['MSC']['guests'] = 'solo invitados';
$GLOBALS['TL_LANG']['MSC']['updateMode'] = 'Modo de actualización';
$GLOBALS['TL_LANG']['MSC']['updateAdd'] = 'Agregar los valores seleccionados';
$GLOBALS['TL_LANG']['MSC']['updateRemove'] = 'Eliminar los valores seleccionados';
$GLOBALS['TL_LANG']['MSC']['updateReplace'] = 'Remplazar las entrada existentes';
$GLOBALS['TL_LANG']['MSC']['ascending'] = 'ascendente';
$GLOBALS['TL_LANG']['MSC']['descending'] = 'descendente';
$GLOBALS['TL_LANG']['MSC']['default'] = 'Predeterminado';
$GLOBALS['TL_LANG']['MSC']['helpWizard'] = 'Asistente de ayuda';
$GLOBALS['TL_LANG']['MSC']['noCookies'] = 'Debe permitir el uso de cookies para utilizar Contao.';
$GLOBALS['TL_LANG']['MSC']['copyOf'] = '%s (copia)';
$GLOBALS['TL_LANG']['MSC']['coreOnlyMode'] = 'Contao se está ejecutando en <strong>modo seguro</strong>, en el cuál se cargan solamente los módulos del core. Este modo esta activado por ejemplo tras un Live Update para previnir posibles incompatibilidades con extensiones de terceras partes. Lo puedes desactivar en la configuración del Backend tras haber controlado los extensiones de terceras partes.';
$GLOBALS['TL_LANG']['MSC']['emailAddress'] = 'Dirección de correo electrónico';
$GLOBALS['TL_LANG']['UNITS'][0] = 'Byte';
$GLOBALS['TL_LANG']['UNITS'][1] = 'kB';
$GLOBALS['TL_LANG']['UNITS'][2] = 'MB';
$GLOBALS['TL_LANG']['UNITS'][3] = 'GB';
$GLOBALS['TL_LANG']['UNITS'][4] = 'TB';
$GLOBALS['TL_LANG']['UNITS'][5] = 'PB';
$GLOBALS['TL_LANG']['UNITS'][6] = 'EB';
$GLOBALS['TL_LANG']['UNITS'][7] = 'ZB';
$GLOBALS['TL_LANG']['UNITS'][8] = 'YB';
$GLOBALS['TL_LANG']['DP']['select_a_time'] = 'Selecciona un horario';
$GLOBALS['TL_LANG']['DP']['use_mouse_wheel'] = 'Usa la rueda del ratón para cambiar rápidamente el valor';
$GLOBALS['TL_LANG']['DP']['time_confirm_button'] = 'Aceptar';
$GLOBALS['TL_LANG']['DP']['apply_range'] = 'Aplicar';
$GLOBALS['TL_LANG']['DP']['cancel'] = 'Cancelar';
$GLOBALS['TL_LANG']['DP']['week'] = 'Wk';

?>