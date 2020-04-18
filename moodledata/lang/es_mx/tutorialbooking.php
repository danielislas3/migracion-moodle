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
 * Strings for component 'tutorialbooking', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   tutorialbooking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addstudents'] = 'Añadir Estudiantes';
$string['adminblockinghelp'] = 'Activar esto permitirá bloquear el que se apunten para usuario sseleccionados';
$string['adminblockingprompt'] = 'Activar funcionalidad de Bloqueo';
$string['adminiconhelp'] = 'Si está desactivado, todos los enlaces serán entexto, no se mostrarán íconos';
$string['adminiconprompt'] = '¿Usar íconos¡?';
$string['adminlockhelp'] = 'Seleccionar para hacer rodos los tutoriales bloqueados por defecto';
$string['adminlockprompt'] = 'Seleccionar para bloquear tutoriales por defecto';
$string['adminnumbershelp'] = 'Ingrese el número de aistentes por defecto a los tutoriales - puede ser anulado al configurar los tutoriales';
$string['adminnumbersprompt'] = 'Sleccionar número de asistentes por defecto';
$string['adminservicehelp'] = 'AVISO: El activar esto significa que las notificaciones por email se enviarán a los apuntados - cuando está desactivado los administradore principales (id=2) reciben notificaciones';
$string['adminserviceprompt'] = 'Marcar esta instancia como un servicio Moodle en vivo';
$string['adminwaitinghelp'] = 'El activar esto permitirá listas de espera en sesiones de horarios';
$string['adminwaitingprompt'] = 'Activar fincionalidad de Lista de Espera';
$string['after'] = 'Después de {$a->session}';
$string['ajax_invalid_slots'] = 'Los horarios no están en la actividad de reservación de tutorial correcta';
$string['ajax_slots_not_exist'] = 'El horario no existe';
$string['alreadysignedup'] = 'Usted ya se ha inscrito a una sesión.';
$string['attendcoltitle'] = 'Asistencia';
$string['attendees'] = 'Actualmente apuntado(s)';
$string['availabletoadd'] = 'Disponible para añadir';
$string['backtosession'] = 'Mensaje enviado; hacer clic aquí para regresar a Lista de Apuntados';
$string['blockedtotal'] = 'incluyr {$a} usuario(s) bloqueado(s)';
$string['blockedusermessage'] = 'Usted tiene bloqueado el apuntarse a estas sesiones - por favor vea al coordinador para las razones de ello';
$string['blockuserprompt'] = 'Apuntado - Hacer clic para bloquear usuario';
$string['cancel'] = 'Cancelar';
$string['completionsignedup'] = 'Los estudiantes deben de apuntarse a un grupo de tutorial en esta actividad para completarla.';
$string['completionsignedupgroup'] = 'Requerir inscribirse';
$string['confirm'] = 'Confirmar';
$string['confirmmessage'] = '¿Está Usted seguro de querer quitar a {$a->name} de {$a->timeslot}?';
$string['confirmremovefromslot'] = '¿Está Usted seguro de querer quitar su apuntado de la reservación de tutorial?';
$string['confirmusersignupremoval'] = 'Confirmar remoción de inscripción';
$string['copysession'] = 'Copiar espacio de Tiempo';
$string['coursefullname'] = 'Nombre_Completo_del_Curso';
$string['cronfixduplicates'] = 'Corregir apuntados suplicados de reservación de tutorial';
$string['defaultdescription'] = 'Horario {$a}';
$string['deletepageheader'] = 'Confirmar Eliminar';
$string['deletesession'] = 'Eliminar';
$string['deletetutorialprompt'] = 'Eliminar esta lista de apuntados';
$string['deletewarningtext'] = '¿Está Usted seguro de querer eliminar "{$a}" ?';
$string['editsession'] = 'Editar/Mover/Copiar';
$string['editsessionheading'] = 'Editar Horario Existente';
$string['editsessionhelp'] = 'Para modificar el horario, por favor llene el formato inferior.';
$string['editspaceserror'] = 'ERROR: Usted no puede reducir el número de espacios ({$a->spaces}) a menos que el número de apuntados ({$a->signedup})';
$string['edittutorialprompt'] = 'Editar esta lista de apuntados';
$string['emailgroupprompt'] = 'Mandar Email a grupo';
$string['emailpagetitle'] = 'Mandar Email a grupo';
$string['eventsessionadded'] = 'Sesión añadida';
$string['eventsessiondeleted'] = 'Sesión eliminada';
$string['eventsessionmessage'] = 'Usuarios mensajeados en la sesión';
$string['eventsessionupdated'] = 'Sesión actualizada';
$string['eventsignupadded'] = 'Inscripción';
$string['eventsignupcapabilityremoved'] = 'Capacidad para inscribirse perdida';
$string['eventsignupremoved'] = 'Inscripción  quitada';
$string['eventsignupteacheradded'] = 'Inscripción forzada';
$string['eventsignupteacherremoved'] = 'Inscripción revocada';
$string['exportcsvlistallprompt'] = 'Exportar todos los apuntados a tutorial en este curso como CSV';
$string['exportcsvlistprompt'] = 'Exportar como CSV';
$string['exportlistprompt'] = 'Exportar esta lista de apuntados';
$string['first'] = 'Primero';
$string['freespaces'] = 'Espacios libres';
$string['hidesession'] = 'Visible - Ocultar Horario';
$string['idnumber'] = 'Número_ID';
$string['indexnoid'] = 'Debe estipularse una ID del curso para ver todos los tutoriales';
$string['instancedesc'] = 'Notas de la Lista de Apuntados';
$string['instancedeschelp'] = 'Información que necesitan conocer los estudiantes al apuntarse, como por ejemplo la duración de la sesión.';
$string['instanceheading'] = 'Configuraciones Generales';
$string['instancenamehelp'] = 'por ejemplo, Tutorial 1 o Laboratorios de Cómputo o Tutoriales quincenales';
$string['instancetitle'] = 'Título de Lista de Apuntados';
$string['last'] = 'Último';
$string['linktomanagetext'] = 'Gestionar Lista de Apuntados';
$string['liveservicemsg'] = 'Servicio en-vivo reconocido; se está enviando notificación a todos los apuntados';
$string['locked'] = 'Des-bloquear tutorial';
$string['lockederror'] = 'El tutorial está bloqueado. Usted no puede apuntarse en este momento.';
$string['lockedprompt'] = 'Bloqueado';
$string['lockhelp'] = 'Si se bloquea, los estudiantes no pueden apuntarse (o des-apuntarse) de cualquier horario en este tutorial.
El bloquearlo ahora efectivamente congelará las listas de apuntados en su estado actual.';
$string['lockwarning'] = 'Este tutorial ha sido bloqueado por el supervisor. Usted no puede apuntarse (o quitarse Usted mismo) de ningún horario.';
$string['messageprompt'] = 'Mensaje';
$string['messageprovider:notify'] = 'Notificación de Tutorial';
$string['messagessent'] = 'Mensajes enviados';
$string['messagewillbesent'] = 'Mensaje a estudiantes siendo removido';
$string['moduleadminname'] = 'Reservación de Tutorial';
$string['modulename'] = 'Reservación de Tutorial';
$string['modulename_help'] = 'La actividad de reservación de tutorial le permite a los estudiantes el apuntarse a un solo evento.

Los profesores pueden:

* Configurar los nombres de otras personas que se han apuntado a un evento, para que sean visibles u ocultos a los estudiantes.
* Imprimir registros de estudiantes apuntados a los horarios.
* Generar un archivo CSV de los apuntados.
* Añadir y quitar manualmente estudiantes de horarios.
* Bloquear y desbloquear la habilidad para apuntarse.
* Enviar un mensaje a todos los apuntados a un horario.';
$string['modulenameplural'] = 'Reservaciones de Tutorial';
$string['movedownsession'] = 'Mover Abajo';
$string['moveslot'] = 'Arrastrar este horario para moverlo.';
$string['moveupsession'] = 'Mover Arriba';
$string['newsessionheading'] = 'Nuevo Horario';
$string['newsessionhelp'] = 'Para crear un nuevo horario en la lista de apuntarse superior, por favor llene el formato inferior:';
$string['newtimslotprompt'] = 'Añadir un nuevo Horario a esta lista para apuntarse';
$string['nosignup'] = 'Usted no está apuntado a la reservación de tutorial.';
$string['noslots'] = 'No hay horarios en esta reservación de tutorial.';
$string['notimeslotediting'] = 'Dado que este es un tutorial nuevo, por favor guarde esta página y regrese para crear listas de apuntados; recuerde configurar la visibilidad para ocultar esto y evitar que se use antes de que se haya  configurado completamente el tutorial.';
$string['numbersline'] = '{$a->total} lugares disponibles en total ({$a->taken} tomados, {$a->left} libres)';
$string['numbersline_oversubscribed'] = '{$a->total} lugares disponibles en total ({$a->taken} tomados, sobre-suscritos por {$a->left})';
$string['option_spaces_high'] = 'El número de espacios debe ser menor a 65536';
$string['option_spaces_low'] = 'El número de espacios debe ser mayor a 0';
$string['oversubscribed'] = 'Hay {$a->freeslots} lugares disponibles en {$a->timeslotname}. Usted intentó añadir {$a->numbertoadd} estudiante(s).';
$string['oversubscribedby'] = 'Sobre suscrito por';
$string['pagecrumb'] = 'Horarios';
$string['pagetitle'] = 'Reservación de Tutorial';
$string['pluginadministration'] = 'Reservación de Tutorial';
$string['pluginname'] = 'Reservación de Tutorial';
$string['positionfirst'] = 'Parte superior de la Página';
$string['positionlast'] = 'Fondo de la Página';
$string['positionprompt'] = 'Posición';
$string['privacy'] = 'Privacidad';
$string['privacy:export:messages'] = 'Mensajes';
$string['privacy:export:signups'] = 'Inscripciones';
$string['privacy:metadata:core_message'] = 'Mensajes enviados a estudiantes vía el sistema de mensajería';
$string['privacy:metadata:tutorialbooking_messages'] = 'Almacena mensajes enviados a usuarios mediante el plugin de reservaciones a tutoral';
$string['privacy:metadata:tutorialbooking_messages:message'] = 'El mensaje que fue enviado';
$string['privacy:metadata:tutorialbooking_messages:sentby'] = 'El usuario quien envió el mensaje';
$string['privacy:metadata:tutorialbooking_messages:senttime'] = 'La hora de cuando fue enviado el mensaje';
$string['privacy:metadata:tutorialbooking_messages:sentto'] = 'El usuario a quien se envió el mensaje';
$string['privacy:metadata:tutorialbooking_messages:subject'] = 'El asunto del mensaje';
$string['privacy:metadata:tutorialbooking_signups'] = 'Almacena las inscripciones que los usuarios hayan hecho a las actividades de reservación de tutoral';
$string['privacy:metadata:tutorialbooking_signups:sessionid'] = 'La sesión a la cual el usuario se inscribió';
$string['privacy:metadata:tutorialbooking_signups:signupdate'] = 'La fecha en la cual el usuario se inscribió';
$string['privacy:metadata:tutorialbooking_signups:userid'] = 'El usuario que se incribió';
$string['privacy_showall'] = 'Los estudiantes pueden ver a todos los que se apuntaron';
$string['privacy_showown'] = 'Los estudiantes solamente pueden ver a lo qe cada uno de ellos se apuntó';
$string['realname'] = 'NombreReal';
$string['reasonrequired'] = 'Usted debe de proporcionar la razón por la que está quitando al estudiante.';
$string['registerdateline'] = 'Por favor escriba la Fecha del Tutorial (dd/mm/aa):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_&nbsp;_&nbsp;&nbsp;_&nbsp;_&nbsp;&nbsp;_&nbsp; _';
$string['registerfooter'] = 'Por favor firme junto a su nombre para indicar asistencia. Si su nombre no está en la lista, por favor NO lo añada sin antes preguntar primeramente.';
$string['registerprintdate'] = 'Imprimir Registro (Por Apuntado)';
$string['registerprintname'] = 'Imprimir Registro (Por Nombre)';
$string['removalmessagesubject'] = 'Usted ha sido removido de {$a->timeslot}';
$string['removalreason'] = 'Razón para remoción';
$string['remove'] = 'Confirmar remoción';
$string['removefromslot'] = 'Removerme (quitarme) de este horario';
$string['removeuserfromslot'] = 'remover (quitar) de este horario';
$string['reset'] = 'Deshacer';
$string['save'] = 'Guardar';
$string['saveasnew'] = 'Guardar como un nuevo horario';
$string['search:activity'] = 'Reservación de tutorial - información de actividad';
$string['search:session'] = 'Reservación de tutorial - información de horario';
$string['sendmessage'] = 'Enviar Mensaje';
$string['sentby'] = 'Remitente';
$string['senttime'] = 'Enviado en';
$string['sentto'] = 'Destinatarios';
$string['sessiondescriptionhelp'] = 'Fecha, Hora y Lugar; por ejemplo, 10:00am del Jueves 14 de Agosto en el salón B35, de la Escuela de Administración, o 10:00am de los Jueves 14 y 21 de Agosto y el 4 de Septiembre en el salón B35 de la Escuela de Administración.';
$string['sessiondescriptionhelp2'] = '¡Por favor asegúrese de que ha incluido el nombre del edificio!<br/>
¡Los Convocantes del Módulo deben de asegurarse de que han reservado el salón!';
$string['sessiondescriptionprompt'] = 'Título';
$string['sessionerror'] = '{$a}';
$string['sessionfull'] = 'No quedan espacios; por favor elija otra sesión.';
$string['sessionpagetitle'] = 'Gestión de Hora de cita';
$string['sessionsummaryprompt'] = 'Detalles';
$string['showallmessages'] = 'Mostrar todos los mensajes';
$string['showalltutorialbookings'] = 'Índice de reservación de tutorial';
$string['showmymessages'] = 'Mostrar solamente mis mensajes';
$string['showsession'] = 'Ocultar - Hacer visible';
$string['signupforslot'] = 'Apuntarme ara este horario';
$string['signuprequired'] = 'Apuntarse al tutorial';
$string['spacesprompt'] = 'Número Máximo de Estudiantes';
$string['statsline'] = '({$a->places} horarios, {$a->signedup} tomados)';
$string['studentcoltitle'] = 'Nombre del Estudiante';
$string['subjecttitleprompt'] = 'Asunto';
$string['testservicemsg'] = 'Servicio no-en-vivo - notificación siendo enviada a Administradores (id=2)';
$string['thereareno'] = 'No hay tutoriales en este curso';
$string['timeslotheading'] = 'Gestión de Lista de Apuntados';
$string['timeslottitle'] = 'Título_de_Horario';
$string['totalspaces'] = 'Espacios totales';
$string['tutorialbooking'] = 'Reservación_de_Tutorial';
$string['tutorialbooking:addinstance'] = 'Permitirle a un usuario que añada esta actividad a un curso (no se usa en Moodle 2.2)';
$string['tutorialbooking:adduser'] = 'Permitirle al usuario a{adir estudiantes a un grupo de apuntados.';
$string['tutorialbooking:editsignuplist'] = 'Permitirle a usuarios añadir, quitar y editar las listas de apuntados.';
$string['tutorialbooking:export'] = 'Permitirle al usuario exportar apuntados a tutorial';
$string['tutorialbooking:exportallcoursetutorials'] = 'Necesario para exportar lista para todos los apuntados a tutorial en un curso.';
$string['tutorialbooking:message'] = 'Permitirle al usuario enviarle mensajes a estudiantes via la actividad reservación_de_tutorial.';
$string['tutorialbooking:oversubscribe'] = 'Permitirle al usuario que añada estudiantes a un grupo, aunque esto sobrepase su límite de usuarios.';
$string['tutorialbooking:printregisters'] = 'Permitirle al usuario imprimir registros de la actividad.';
$string['tutorialbooking:removeuser'] = 'Permitir quiatr estudiantes de un grupo apuntado.';
$string['tutorialbooking:submit'] = 'Necesario para apuntarse a una sesión de reservación de tutorial.';
$string['tutorialbooking:viewadminpage'] = 'Permitirle al usuario que vea la página de administración de la actividad.';
$string['tutorialbooking:viewallmessages'] = 'Necesario para ver mensajes que otros usuarios enviaron en una sesión de reservación de tutorial.';
$string['unauthorised'] = 'Usted no tiene permiso para inscribir(se).';
$string['unblockuserprompt'] = 'Usuarios Bloqueados - Hacer clic para des-bloquear Usuario';
$string['unlocked'] = 'Bloquear Tutorial';
$string['usedspaces'] = 'Espacios usados';
$string['useralreadysignedup'] = 'El usuario {$a->id} ya está inscrito para una sesión.';
$string['userdisplay'] = '{$a->name} ({$a->username})';
$string['username'] = 'Nombre_del_usuario';
$string['viewmessages'] = 'Ver mensajes enviados';
$string['you'] = 'Usted';
$string['yousignedup'] = 'Usted está apuntado para este horario';
