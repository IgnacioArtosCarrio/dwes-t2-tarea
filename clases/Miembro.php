<?php
namespace clases;

abstract class Miembro {
    protected int $id;
    protected string $nombre;
    protected string $apellidos;
    protected string $email;

    public function __construct(int $id, string $nombre, string $apellidos, string $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function __toString(): string {
        return "$this->nombre $this->apellidos ($this->email)";
    }
}
