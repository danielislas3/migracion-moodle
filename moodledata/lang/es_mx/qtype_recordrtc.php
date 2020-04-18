<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_recordrtc', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   qtype_recordrtc
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audio'] = 'Audio';
$string['audiobitrate'] = 'Tasa de muestreo (bitrate) del audio';
$string['audiobitrate_desc'] = 'Calidad de la grabación de audio (un número mayor significa mayor calidad)';
$string['err_timliemit'] = 'El límite de tiempo no puede ser mayor de {$a}.';
$string['err_timliemitzero'] = 'El límite de tiempo no puede ser cero.';
$string['filex'] = 'Archivo {$a}';
$string['gumabort'] = 'Pasó algo extraño que impidió que se usara la webcam / el micrófono.';
$string['gumabort_title'] = 'Algo pasó';
$string['gumnotallowed'] = 'El usuario debe permitirle al navegador de internet el acceso a la cámara web / el micrófono';
$string['gumnotallowed_title'] = 'Permisos equivocados';
$string['gumnotfound'] = 'No hay un dispositivo de entrada conectado o habilitado';
$string['gumnotfound_title'] = 'Dispositivo faltante';
$string['gumnotreadable'] = 'Algo le está impidiendo al navegador el acceso a la webcam / el micrófono';
$string['gumnotreadable_title'] = 'Error del equipo (hardware)';
$string['gumnotsupported'] = 'Su navegador de internet no soporta la grabación sobre una conexión insegura y debe cerrar el plugin.';
$string['gumnotsupported_title'] = 'Sin soporte para conexión insegura';
$string['gumoverconstrained'] = 'La webcam / el micrófono actual no puede producir un flujo de datos con las restricciones requeridas';
$string['gumoverconstrained_title'] = 'Problema con restricciones';
$string['gumsecurity'] = 'Su navegador no soporta la grabación sobre una conexión insegura y debe cerrar el plugin.';
$string['gumsecurity_title'] = 'Sin soporte para conexión insegura';
$string['gumtype'] = 'Intentó obtener flujo de datos de la webcam / el micrófono, pero no fueron especificadas restricciones.';
$string['gumtype_title'] = 'Sin restricciones especificadas';
$string['insecurewarning'] = 'Su navegador podría no permitir que este plugin funcione a menos que sea usado, ya sea sobre HTTPS, o desde localhost.';
$string['insecurewarningtitle'] = 'Conexión insegura';
$string['mediatype'] = 'Tipo de medio';
$string['mediatype_dec'] = 'Actualmente esto solamente funciona con audio, pero pronto se añadirá video.';
$string['mediatype_help'] = 'Si es que al estudiante se le pide grabar audio o video.';
$string['nearingmaxsize'] = 'Usted ha agotado el límite de tamaño máximo para subidas de archivo';
$string['nearingmaxsize_title'] = 'Grabación detenida';
$string['norecording'] = 'Sin grabación';
$string['nowebrtc'] = 'Su navegador todavía ofrece soporte limitado o ningún soporte para las tecnologías WebRTC, y no puede ser usado con este tipo de pregunta. Por favor cambie o actualice su navegador de internet.';
$string['nowebrtctitle'] = 'WebRTC no soportado';
$string['pleaserecordsomething'] = 'Por favor grabe algo.';
$string['pluginname'] = 'Grabar audio';
$string['pluginnameadding'] = 'Añadiendo una pregunta de grabar audio';
$string['pluginnameediting'] = 'Editando una pregunta de grabar audio';
$string['pluginname_help'] = 'Los estudiantes responden grabando algún audio directamente en su navegador web, el cual puede ser entonces calificado manualmente.';
$string['pluginnamesummary'] = 'Los estudiantes responden grabando algún audio directamente en su navegador web, el cual puede ser entonces calificado manualmente.';
$string['privacy:metadata'] = 'El plugin para el tipo de pregunta de grabar audio no almacena ningún dato personal.';
$string['recordagain'] = 'Grabar de nuevo';
$string['recordingfailed'] = 'Falló grabación; inténtelo nuevamente';
$string['startrecording'] = 'Iniciar grabación';
$string['stoprecording'] = 'Detener grabación';
$string['timelimit'] = 'Duración máxima de grabación';
$string['timelimit_desc'] = 'Tiempo máximo que un autor de pregunta puede configurar para la duración de la grabación.';
$string['timelimit_help'] = 'Duración máxima de grabación que puede hacer el estudiante.';
$string['uploadaborted'] = 'Grabación abortada';
$string['uploadcomplete'] = 'Grabación guardada';
$string['uploadfailed'] = 'Falló el guardado de la grabación';
$string['uploadfailed404'] = 'Falló el guardado de la grabación; probablemente el archivo sea demasiado grande';
$string['uploadpreparing'] = 'Preparándose para guardar ...';
$string['uploadprogress'] = 'Guardando grabación ({$a}) ...';
$string['video'] = 'Video';
$string['videobitrate'] = 'Tasa de muestreo (bitrate) del video';
$string['videobitrate_desc'] = 'Calidad de la grabación de video (un número mayor significa mayor calidad)';
