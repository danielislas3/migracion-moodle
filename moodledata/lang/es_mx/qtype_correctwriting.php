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
 * Strings for component 'qtype_correctwriting', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   qtype_correctwriting
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absenthintpenaltyfactor'] = 'Factor de penalización para error de pistas de muestra ausentes';
$string['absenthintpenaltyfactor_help'] = 'Para las pistas, que revelan un texto de muestra, el error de muestra ausente es un caso especial. Otros errores significan que el estudiante al menos trató de escribir algo cercano a esta muestra en cualquier parte de su respuesta, pero una muestra ausente significa que no escribió absolutamente nada. Así que para este error en particular, las pistas revelarán más información. El factor le permite a Usted incrementar el castigo para tales pistas. Si el castigo resultante excediera de 1, se dehabuilitará lapista.';
$string['absentmistakemessage'] = '{$a} está faltando';
$string['absentmistakeweight'] = 'Castigo para muestra ausente';
$string['addedmistakemessage'] = 'existe(n) "{$a}" extra';
$string['addedmistakemessage_notexist'] = '{$a} no debería de estar en la respuesta';
$string['addedmistakeweight'] = 'Castigo para token extra';
$string['allowinvalidsyntaxanswers'] = 'Si es que sintaxis inválida está permitida en respuestas';
$string['and'] = 'y';
$string['answersinstruct'] = 'Escriba una o más respuestas correctas. Cuando Usted intente guardar las preguntas, las respuestas serán covertidas a tokens (\'tokenized\') usando reglas del idioma o lenguaje seleccionado y a Usted se le dará la opción de ingresar descripciones par cada token. La descripción del token se usa en lugar del texto del token en los mensajes de error y en las pistas para no delatarle al alumno el valor actual del token. Si Usted deja vacía la descripción, en su lugar se usará el valor del token. Pero Usted debe de ingresar el número correcto de cadenas de caracteres vacíos como descriptores para asegurase de no olvidar ingresar descripciones cuando se añadan preguntas nuevas.';
$string['caseno'] = 'No, minúsculas/MAYÚSCULAS no son importantes';
$string['casesensitive'] = 'Sensibilidad a minúsculas/MAYÚSCULAS';
$string['caseyes'] = 'Si, minúsculas/MAYÚSCULAS si son importantes';
$string['correctwriting'] = 'Escritura correcta';
$string['enum_analyzer'] = 'Análisis de enumeraciones';
$string['enumeditoraddenumeration'] = 'Añadir enumeración';
$string['enumeditoranswer'] = 'Respuesta:';
$string['enumeditordetermineenumerations'] = 'Auto determinar enumeraciones';
$string['enumeditorelements'] = 'Elementos:';
$string['enumeditorenumerations'] = 'Enumeraciones:';
$string['enumeditorremoveenumeration'] = 'Quitar enumeración';
$string['foundlexicalerrors'] = 'Hay errores léxicos en su respuesta. Por favor considere corregir los siguientes errores:';
$string['foundmistake'] = 'Hay error en su respuesta';
$string['foundmistakes'] = 'Hay errores en su respuesta';
$string['foundsyntaxerrors'] = 'Hay errores de sntaxis en su respuesta. Por favor considere arrwglar los siguientes errores:';
$string['hintgradeborder'] = 'Calificación mínima para que la respuesta muestre errores';
$string['hintgradeborder_help'] = 'Solamente las respuestas con calificación mayor o igual a esta calificación serán consideradas correctas y mostrarán errores y pistas. Las respuestas con calificaciones más bajas serán usadas solamente cuando concuerden exactamente. Usted podría usar una respuesta con la calificación más baja para proporcionar una retroalimentación especialpara ciertos errores.';
$string['hinting'] = 'Opciones de pistas/sugerencias';
$string['hinting_help'] = 'Las opciones de pistas/sugerencias le permiten a Usted configurar disponibilidad y castigo para varias pistas. Para deshabilitar cualquier tipo de pistas, simplemente configure su castigo arriba de 1.';
$string['howtofixpic'] = 'como corregirx {$a} (image)';
$string['howtofixpichintpenalty'] = 'Castigo para la pista de "como corregir" imagen';
$string['howtofixpichintpenalty_help'] = 'La pista de imagen "como corregir" le muestra al estudiante una imagen que visualiza la corrección de erores tipográficos dentro de las fichas (tokens) o separadores faltantes entre dos fichas (tokens). El configurar el castigo arriba de 1 deshabilitará la pista.';
$string['imageanswer'] = 'Respuesta correcta:';
$string['imageresponse'] = 'Su respuesta:';
$string['langid'] = 'Idioma/lenguaje de la respuesta';
$string['langid_help'] = 'Este idioma/lenguaje se usará para \'tokenizar\' las preguntas y las respuestas a las preguntas.';
$string['lexemedescriptions'] = 'Descripción para las fichas (tokens)';
$string['lexical_analyzer'] = 'Análisis de errores tipográficos';
$string['lexical_analyzer_required_for_howtofixpic'] = 'Se requiere análisis de errores tupográficos para la pista de imagen de "como corregirlo"';
$string['lexicalerrorthreshold'] = 'Umbral de error léxico';
$string['lexicalerrorweight'] = 'Castigo para error léxico';
$string['maxmistakepercentage'] = 'Porcentaje máximo de errores';
$string['mistakentokens'] = 'fichas (tokens) equivocadas';
$string['movedmistakemessage'] = '{$a} fuera-de-lugar';
$string['movedmistakemessagenodescription'] = 'el "{$a->value}" en {$a->line}:{$a->position} está puesto fera -de-lugar';
$string['movedmistakeweight'] = 'Castigo para token puesto fuera-de-lugar';
$string['objectname'] = 'pregunta';
$string['pleaseenterananswer'] = 'Por favor, escriba una respuesta';
$string['pluginname'] = 'Escritura correcta';
$string['pluginnameadding'] = 'Añadiendo una pregunta de escritura correcta';
$string['pluginnameediting'] = 'Editando una pregunta de escritura correcta';
$string['pluginname_help'] = 'Escriba la pregunta y la(s) respuesta(s) correcta(s). Cuando trate de guardar la pregunta, la respuesta se partirá en las partes con-sentido más pequeñas de los idiomas elegidos - las fichas (<b>tokens</b>). Usted necesita escribir el rol gramatical de estas fichas (tokens) para mostrarlos en el mensaje de error. Si Usted deja vacía la cadena de descripción. se usará texto simbólico en su lugar para los mensajes de error.';
$string['pluginnamesummary'] = 'Tipo de pregunta que puede encontrar automáticamente errores en l cadena (\'string\') de respuesta y calificarla con castigos. Actualmente soporta errores de secuencia de fichas (tokens): finding misplaced (encontrar fuera_de_lugar), absent (ausente) and extra (extra) tokens (fichas).';
$string['questioneditingheading'] = 'Configuraciones para edición de pregunta';
$string['sequence_analyzer'] = 'Análisis de secuencia detoken';
$string['syntax_analyzer'] = 'Análisis de cobertura de árbol';
$string['toobigfloatvalue'] = 'Este valor debería de ser no mayor de {$a}';
$string['toosmallfloatvalue'] = 'Este valor debería de ser no menor de {$a}';
$string['whatis'] = 'que es {$a}';
$string['whatishint'] = 'el {$a->tokendescr} es "{$a->tokenvalue}"';
$string['whatishintpenalty'] = 'Castigo para la pista de "que es"';
$string['whatishintpenalty_help'] = 'La pista de "que es" les permite a los estudiantes el ver el valor del token en lugar de la descripción en el mensaje del error en comportamiento adaptivo. El configurar castigo arriba de 1 deshabilita la pista.';
$string['wherepichintpenalty'] = 'Castigo para la pista de imagen "donde"';
$string['wherepichintpenalty_help'] = 'La pista de imagen "donde" les muestra a los estudiantes una imagen acerca de un lugar (¿entre cuales tokens?) debería de colocarse un token faltante o mal colocada. Las descripciones del token son usadas cuando sea posible, de lo contrario se usará el valor del token. El configurar el castigo arriba de 1 deshabilitará la pista.';
$string['wheretxthint'] = 'en donde {$a} debería de ser';
$string['wheretxthintpenalty'] = 'Castigo para pista de texto "donde"';
$string['wheretxthintpenalty_help'] = 'La pista de texto "donde" les muestra a los estudiantes un mensaje de texto acerca de un lugar (¿entre cuales tokens?) debería de colocarse un token faltante o mal colocado. Las descripciones del token son usadas cuando sea posible, de lo contrario se usará el valor del token. El configurar el castigo arriba de 1 deshabilitará la pista.';
$string['writelessdescriptions'] = 'La cantidad proporcionada de descripciones es mayor que la cantidad de fichas (tokens)';
$string['writemoredescriptions'] = 'La cantidad proporcionada de descripciones es menor que la cantidad de fichas (tokens)';
