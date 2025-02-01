<?php
namespace clases;

require_once __DIR__ . "/Miembro.php";
require_once __DIR__ . "/Asignatura.php";

class Profesor extends Miembro {
    private bool $titular = false;
    private Asignatura $asignatura;

    public function __construct(int $id, string $nombre, string $apellidos, string $email, Asignatura $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->asignatura = $asignatura;
    }

    public function getAsignatura(): Asignatura {
        return $this->asignatura;
    }

    public function esTitular(): bool {
        return $this->titular;
    }

    public function hacerTitular(): void {
        $this->titular = true;
    }

    public static function crearProfesoresDeMuestra(): array {
        return [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", new Asignatura(1, "DWES", 7)),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", new Asignatura(3, "DIW", 4)),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", new Asignatura(2, "DWEC", 6)),
            new Profesor(4, "Rasmus", "Lerdorf", "rasmus@php.com", new Asignatura(4, "DAW", 4))
        ];
    }

    public function __toString(): string {
        $estado = $this->titular ? "Titular" : "No titular";
        return "$this->nombre $this->apellidos - {$this->asignatura->getNombre()} ($estado)";
    }
}
