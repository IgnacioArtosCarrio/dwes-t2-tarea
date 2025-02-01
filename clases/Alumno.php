<?php
namespace clases;

require_once __DIR__ . "/Miembro.php";
require_once __DIR__ . "/Asignatura.php"; // 🔹



class Alumno extends Miembro {
    private int $edad;
    private array $asignaturas = [];
    private bool $cursoAbonado = false;

    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getAsignaturas(): array {
        return $this->asignaturas;
    }

    public function abonarCurso(): void {
        $this->cursoAbonado = true;
    }

    public function matricularseEnAsignatura(Asignatura $asignatura): void {
        foreach ($this->asignaturas as $a) {
            if ($a->getId() === $asignatura->getId()) {
                return; // Evita duplicados
            }
        }
        $this->asignaturas[] = $asignatura;
    }

    public static function crearAlumnosDeMuestra(): array {
        return [
            new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
            new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
            new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
            new Alumno(4, "Ana", "Fernández", "ana.fernandez@email.com", 21),
            new Alumno(5, "David", "Pérez", "david.perez@email.com", 26),
            new Alumno(6, "Elena", "Rodríguez", "elena.rodriguez@email.com", 23),
            new Alumno(7, "Mario", "Gómez", "mario.gomez@email.com", 20),
            new Alumno(8, "Lucía", "Díaz", "lucia.diaz@email.com", 19),
            new Alumno(9, "Pablo", "Navarro", "pablo.navarro@email.com", 22),
            new Alumno(10, "Carmen", "Santos", "carmen.santos@email.com", 24)
        ];
    }


    public function __toString(): string {
        return "$this->nombre $this->apellidos, Edad: $this->edad, Email: $this->email";
    }
}
