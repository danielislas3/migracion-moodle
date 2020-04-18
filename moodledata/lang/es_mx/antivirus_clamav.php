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
 * Strings for component 'antivirus_clamav', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV no se ha ejecutado. El mensaje de error de retorno es {$a}. Ésta es la salida de Clam:';
$string['clamfailureonupload'] = 'Cuando falle ClamAV';
$string['configclamactlikevirus'] = 'Tratar los archivos como si efectivamente fueran virus';
$string['configclamdonothing'] = 'Tratar los archivos como si estuvieran OK';
$string['configclamfailureonupload'] = 'Si Usted ha configurado Clam para que revise los archivos subidos, pero estuviera configurado incorrectamente, o no corriera por alguna razón desconocida, ¿cómo debería de comportarse? Si Usted elige \'Tratar archivos como virus\', serán movidos adentro del área de cuarentena, o serán eliminados. Si Usted elige \'Tratar archivos como OK\', los archivos serán movidos al directorio de destino como normalmente. En cualquier caso, los administradores serán alertados de que Clam ha fallado. Si Usted elige \'Tratar archivos como virus\' y por alguna razón Clam no funcionara (usualmente debido a que Usted ha ingresado una ruta-hacia-Clam inválida), TODOS los archivos que sean subidos serán movidos al área dada de cuarentena, o serán eliminados. Sea cuidadoso con esta configuración.';
$string['errorcantopensocket'] = 'La conexión al socket de dominio Unix resultó en error {$a}';
$string['errorclamavnoresponse'] = 'ClamAV no responde; revise el estado de corrida del demonio (daemon).';
$string['errornounixsocketssupported'] = 'El transporte del socket del dominio Unix no está soportado en este sistema. Por favor, use en su lugar la opción de línea de comando.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ejecutar Clam al cargar un archivo, pero la ruta para Clam AV, {$a}, no es válida.';
$string['pathtoclam'] = 'Línea de comando';
$string['pathtoclamdesc'] = 'Si el método de corrida está configurado a "línea de comando", ingrese aquí la ruta hacia ClamAV. En Linux esto será /usr/bin/clamscan o /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Socket de dominio Unix';
$string['pathtounixsocketdesc'] = 'Si el método de corrida se configura a "Socket de dominio Unix", ingrese aquí la ruta hacia el socket Unix de ClamAV. En Linux Debian esto será /var/run/clamav/clamd.ctl. Por favor asegúrese que el demonio (daemon) de clamav tiene acceso de lectura a los archivos subidos; la manera más fácil de asegurar esto es añadir el usuario \'clamav\' a su grupo webserver (\'www-data\' en Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'El plugin ClamAV Antivirus no almacena ningún dato personal.';
$string['quarantinedir'] = 'Directorio de cuarentena';
$string['runningmethod'] = 'Método de corrida';
$string['runningmethodcommandline'] = 'Línea de comando';
$string['runningmethoddesc'] = 'Método de correr ClamAV. Por defecto se usa la línea de comando; sin embargo, en sistemas Unix se puede obtener mejor desempeño al usar sockets del sistema.';
$string['runningmethodunixsocket'] = 'Socket de dominio Unix';
$string['unknownerror'] = 'Se ha producido un error desconocido con Clam.';
