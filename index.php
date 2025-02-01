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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Educativo</title>
    <link rel="stylesheet" href="/dwes-t2-tarea/css/styles.css"> <!-- ✅ Enlace al archivo CSS -->
</head>
<body>
<?php include 'menu.php'; ?>

<h1>Centro Educativo</h1>

<!-- Lista de alumnos -->
<h2>Alumnos</h2>
<ul>
    <?php foreach ($alumnos as $alumno) { echo "<li>$alumno</li>"; } ?>
</ul>

<!-- Lista de profesores -->
<h2>Profesores</h2>
<ul>
    <?php foreach ($profesores as $profesor) { echo "<li>$profesor</li>"; } ?>
</ul>

<!-- Lista de asignaturas -->
<h2>Asignaturas</h2>
<ul>
    <?php foreach ($asignaturas as $asignatura) { echo "<li>{$asignatura->getNombre()}</li>"; } ?>
</ul>

<!-- Lista de alumnos menores de 23 años -->
<h2>Alumnos menores de 23 años</h2>
<ul>
    <?php
    $alumnosMenores = array_filter($alumnos, fn($a) => $a->getEdad() < 23);
    foreach ($alumnosMenores as $alumno) { echo "<li>$alumno</li>"; }
    ?>
</ul>

<!-- Lista de alumnos con al menos dos asignaturas -->
<h2>Alumnos con al menos dos asignaturas</h2>
<ul>
    <?php
    $alumnosDosAsignaturas = array_filter($alumnos, fn($a) => count($a->getAsignaturas()) >= 2);
    foreach ($alumnosDosAsignaturas as $alumno) { echo "<li>$alumno</li>"; }
    ?>
</ul>

<!-- Lista de asignaturas con al menos un alumno matriculado -->
<h2>Asignaturas con al menos un alumno matriculado</h2>
<ul>
    <?php
    $asignaturasConAlumnos = [];
    foreach ($alumnos as $alumno) {
        foreach ($alumno->getAsignaturas() as $asignatura) {
            $asignaturasConAlumnos[$asignatura->getNombre()] = $asignatura;
        }
    }
    foreach ($asignaturasConAlumnos as $asignatura) { echo "<li>{$asignatura->getNombre()}</li>"; }
    ?>
</ul>

</body>
</html>
