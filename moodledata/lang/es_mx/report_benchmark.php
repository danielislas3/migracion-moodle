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
 * Strings for component 'report_benchmark', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   report_benchmark
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Benchmark (Comparativo) del Sistema';
$string['benchfail'] = '<b>¡ Advertencia !</b><br />El desempeño de su Moodle no es óptimo.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Ver el reporte del Benchmark';
$string['benchshare'] = 'Compartir mi puntaje en el foro (en idioma francés)';
$string['benchsuccess'] = 'b>¡Felicitaciones!</b><br />El desempeño de su Moodle parece perfecto.';
$string['cloadmoreinfo'] = 'Cargar el archivo de configuración  "config.php"';
$string['cloadname'] = 'Tiempo para cargar Moodle';
$string['coursereadmoreinfo'] = 'Leer un curso varias veces para revisar la velocidad de lectura de la base de datos';
$string['coursereadname'] = 'Desempeño de lectura del curso';
$string['coursewritemoreinfo'] = 'Escribir un curso varias veces para revisar la velocidad de escritura de la base de datos';
$string['coursewritename'] = 'Desempeño de escritura del curso';
$string['description'] = 'Descripción';
$string['duration'] = '{$a} s';
$string['during'] = 'Tiempo (segundos)';
$string['filereadmoreinfo'] = 'Leer un archivo varias veces para revisar la velocidad de lectura de la carpeta temporal de Moodle';
$string['filereadname'] = 'Desempeño de lectura de archivos';
$string['filewritemoreinfo'] = 'Escribir un archivo varias veces para revisar la velocidad de escritura de la carpeta temporal de Moodle';
$string['filewritename'] = 'Desempeño de escritura de archivos';
$string['info'] = 'Esta prueba de Comparativo no debe demorar más de un minuto; se detiene a los 2 minutos. Por favor, espere hasta que aparezcan los resultados.';
$string['infoaverage'] = 'Se recomienda tomar esta prueba varias veces para obtener un promedio significativo.';
$string['infodisclaimer'] = 'No se recomienda invocar este benchmark en una plataforma de producción.';
$string['infodisclamer'] = 'No es recomendable el correr esta prueba de Benchmark (Comparativos) en una plataforma en producción.';
$string['limit'] = 'Límite aceptable';
$string['loginguestmoreinfo'] = 'Revisar el tiempo usado para cargar la página de ingreso de la cuenta de invitado';
$string['loginguestname'] = 'Desempeño del tiempo para conectarse con la cuenta de invitado';
$string['loginusermoreinfo'] = 'Midiendo el tiempo usado para cargar la página de ingreso de una cuenta falsa de usuario';
$string['loginusername'] = 'Tiempo para conectarse para una cuenta de usuario falsa';
$string['modulename'] = 'Benchmark (Comparativo) de Moodle';
$string['modulenameplural'] = 'Benchmarks (Comparativos) de Moodle';
$string['over'] = 'Límite crítico';
$string['pluginname'] = 'Benchmark (Comparativo) de Moodle';
$string['points'] = '{$a} puntos';
$string['privacy:no_data_reason'] = 'El plugin de Report benchmark no almacena datos por sí mismo. Solamente accede a datos de otros plugins.';
$string['processormoreinfo'] = 'Se llama a una función PHP en un bucle para probar la velocidad del procesador';
$string['processorname'] = 'Velocidad de procesamiento del procesador';
$string['querytype1moreinfo'] = 'Ejecutar una consulta SQL compleja para probar la velocidad de la Base de datos';
$string['querytype1name'] = 'Desempeño de Base de Datos (#1)';
$string['querytype2moreinfo'] = 'Ejecutar una consulta SQL compleja para probar la velocidad de la Base de datos';
$string['querytype2name'] = 'Desempeño de Base de Datos (#2)';
$string['redo'] = 'Iniciar nuevamente la revisión';
$string['score'] = 'Puntuación';
$string['scoremsg'] = 'Puntuación del Benchmark:';
$string['seconde'] = '{$a} segundos';
$string['slowdatabaselabel'] = 'La Base de Datos es demasiado lenta.';
$string['slowdatabasesolution'] = '<ul><li>Revise <a href="http://dev.mysql.com/doc/refman/5.7/en/mysqlcheck.html" target="_blank"> la integridad de la Base de Datos</a></li><li>Optimize <a href="http://dev.mysql.com/doc/refman/5.7/en/server-parameters.html" target="_blank"> la Base de datos</a></li></ul>';
$string['slowharddrivelabel'] = 'El disco duro parece ser demasiado lento.';
$string['slowharddrivesolution'] = '<ul><li>Revise el estado del Disco Duro o de la carpeta temporal</li><li>Cambie el Disco Duro o la carpeta Temporal</li></ul>';
$string['slowprocessorlabel'] = 'Su procesador es demasiado lento.';
$string['slowprocessorsolution'] = '<ul><li>Revisar que su configuración del equipo sea lo suficientemente alta para correr Moodle.</li></ul>';
$string['slowserverlabel'] = 'Su servidor web es demasiado lento.';
$string['slowserversolution'] = '<ul><li>Configure su Apache en modo <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multi-processing</a>o active  <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>Si su Moodle está instalado  en su computadora, Usted puede intentar desactivar su antivirus en donde se encuentra Moodle. Hágalo con precaución.</li></ul>';
$string['slowweblabel'] = 'La página de ingreso es demasiado lenta para cargar.';
$string['slowwebsolution'] = '<ul><li><a href="/admin/purgecaches.php" target="_blank">Purgar la caché de Moodle</a>.</li></ul>';
$string['start'] = 'Iniciar la revisión';
$string['total'] = 'Tiempo total';
