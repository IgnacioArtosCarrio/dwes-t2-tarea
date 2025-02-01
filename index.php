<?php
require_once "clases/Alumno.php";
require_once "clases/Profesor.php";
require_once "clases/Asignatura.php";

use Clases\Alumno;
use Clases\Profesor;
use Clases\Asignatura;

// Crear los datos de muestra
$asignaturas = Asignatura::crearAsignaturasDeMuestra();
$profesores = Profesor::crearProfesoresDeMuestra();
$alumnos = Alumno::crearAlumnosDeMuestra();

// Matricular alumnos
$alumnos[0]->matricularseEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularseEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularseEnAsignatura($asignaturas[1]);
$alumnos[2]->matricularseEnAsignatura($asignaturas[0]);
$alumnos[2]->matricularseEnAsignatura($asignaturas[2]);
$alumnos[3]->matricularseEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularseEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularseEnAsignatura($asignaturas[1]);
$alumnos[4]->matricularseEnAsignatura($asignaturas[2]);
$alumnos[5]->matricularseEnAsignatura($asignaturas[0]);
$alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
$alumnos[7]->matricularseEnAsignatura($asignaturas[2]);
$alumnos[8]->matricularseEnAsignatura($asignaturas[1]);
$alumnos[9]->matricularseEnAsignatura($asignaturas[0]);

echo "<h1>Centro Educativo</h1>";

// Lista alumnos
echo "<h2>Alumnos</h2><ul>";
foreach ($alumnos as $alumno) {
    echo "<li>$alumno</li>";
}
echo "</ul>";

// Lista profesores
echo "<h2>Profesores</h2><ul>";
foreach ($profesores as $profesor) {
    echo "<li>$profesor</li>";
}
echo "</ul>";

// Lista asignatura
echo "<h2>Asignaturas</h2><ul>";
foreach ($asignaturas as $asignatura) {
    echo "<li>{$asignatura->getNombre()}</li>";
}
echo "</ul>";

// Lista alumnos menores de 23 años
$alumnosMenores = array_filter($alumnos, fn($a) => $a->getEdad() < 23);
echo "<h2>Alumnos menores de 23 años</h2><ul>";
foreach ($alumnosMenores as $alumno) {
    echo "<li>$alumno</li>";
}
echo "</ul>";

// Lista alumnos con al menos dos asignaturas
$alumnosDosAsignaturas = array_filter($alumnos, fn($a) => count($a->getAsignaturas()) >= 2);
echo "<h2>Alumnos con al menos dos asignaturas</h2><ul>";
foreach ($alumnosDosAsignaturas as $alumno) {
    echo "<li>$alumno</li>";
}
echo "</ul>";

// Lista asignaturas con al menos un alumno matriculado
$asignaturasConAlumnos = [];
foreach ($alumnos as $alumno) {
    foreach ($alumno->getAsignaturas() as $asignatura) {
        $asignaturasConAlumnos[$asignatura->getNombre()] = $asignatura;
    }
}

echo "<h2>Asignaturas con al menos un alumno matriculado</h2><ul>";
foreach ($asignaturasConAlumnos as $asignatura) {
    echo "<li>{$asignatura->getNombre()}</li>";
}
echo "</ul>";
