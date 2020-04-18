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
 * Strings for component 'atto_styles', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   atto_styles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config'] = 'Configuración de Estilos';
$string['config_desc'] = 'Configuración para el widget de estilos para Atto en formato JSON.
<hr />
Por ejemplo:<br />
{<br />
    "title": "Caja azul",<br />
    "type": "block",<br />
    "classes": "box blue"<br />
    "preview": true<br />
},{<br />
    "title": "Texto rojo",<br />
    "type": "inline",<br />
    "classes": "red"<br />
    "preview": true<br />
}<br />
<hr />
El atributo <em>title</em> (título) define el nombre para estilo dentro del widget de estilos de Atto.<br />
<br />
Un title también puede soportar el filtro multi-idiomas de Moodle (si estuviera habilitado), pero se necesitarán escapar comillas dobles con una diagonal invertida.<br />
Por favor revise el archivo README para un ejemplo.<br />
<hr />
El atributo <em>type</em> (tipo) puede contener uno o dos valores: "block" o "inline".<br />
<br />
"block" (bloque) creará un \'\'div tag\'\' con la(s) class(es) dadas y actuará como un elemento de nivel de bloque estándar. Esto cubrirá el elemento de nivel del bloque activo y puede aplicar para más que solamente el texto seleccionado actualmente.<br />
<br />
"inline" (en-línea) creará una \'\'span tag\'\' con la(s) class(es) dada(s) y actuará como un elemento en-línea estándar. Esto solamente aplicará al texto seleccionado actualmente.
<hr />
El atributo <em>classes</em> toma el nombre de clase CSS que será aplicado al texto en-línea / del bloque.<br />
<br />
Pueden ser definidas múltiples classes para cada ítem, separadas por un espacio. Todas ellas serán aplicadas al texto en-línea / del bloque.<br />
<br />
Las definiciones de class CSS no pueden ser hechas dentro de este plugin. Usted tendrá que añadir sus definiciones de class CSS a sus configuraciones del tema o HTML adicional.
<hr />
El atributo <em>preview</em> (previsualizar) toma los valores booleanos verdadero o falso (predeterminado). Si este valor se configura a verdadero, entonces el ítem de estilo tendrá una previsualización real del estilo. En caso contrario, el ítem de estilo solamente mostrará su título en texto simple.<br />
<br />
Por favor tenga en cuenta que, si elige mostrar la vista previa para un ítem de estilo, esta clase tiene que estar definida en CSS de forma tal que pueda ser aplicada a \'\'span tags\'\', aun y cuando el ítem del estilo mismo sea un elemento de nivel bloque.
<hr />
En instalaciones Moodle con temas basados en bootstrap (especialmente <em>Boost</em>, <em>More</em> y <em>Clean</em>, Usted también puede crear estilos con clases CSS bootstrap en lugar de definir sus propias clases.
<br /><br />
Por ejemplo:<br />
{<br />
    "title": "Alerta éxito",<br />
    "type": "block",<br />
    "classes": "alert alert-success"<br />
},{<br />
    "title": "Info insignia",<br />
    "type": "inline",<br />
    "classes": "badge badge-info"<br />
},{<br />
    "title": "Advertencia insignia",<br />
    "type": "inline",<br />
    "classes": "badge badge-warning"<br />
}<br /><br />
Para más información sobre clases bootstrap, por favor visite los enlaces siguientes en la documentación de  Bootstrap 2.3  (para <em>Clean</em> y <em>More</em>):
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Bootstrap labels and badges</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Bootstrap alerts</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Bootstrap helper classes</a></li>
</ul>
o en la documentación de  Bootstrap 4 (para <em>Boost</em>):
<ul>
<li><a href="http://v4-alpha.getbootstrap.com/components/badge/">Bootstrap badges</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/components/alerts/">Bootstrap alerts</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/utilities/">Bootstrap utilities</a></li>
</ul>';
$string['inlinehint'] = 'Seleccione primero un texto para aplicarle este estilo';
$string['nostyle'] = 'Sin Estilo';
$string['pluginname'] = 'Estilos';
$string['privacy:metadata'] = 'El plugin atto_styles no almacena ningún dato personal.';
$string['settings'] = 'Configuraciones de Estilos';
