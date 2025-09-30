<?php

namespace Src\Domain\Entities;

class Usuario{
    private int $id;
    private string $nombre;
    private string $correo;
    private string $contrasena;
    private string $rol;

    //constructor vacio
    public function __Construct(){}

    /**
     * TODO ESTO SON GETTERS
     */

    public function getId(): int{
        return $this->id;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getCorreo(): string {
        return $this->correo;
    }

    public function getContrasena(): string {
        return $this->contrasena;
    }

    public function getRol(): string{
        return $this->rol;
    }

    /*
     * TODO ESTO SON SETTERS
     */


    public function setId(int $id): void  {
        $this->id = $id;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function setCorreo(string $correo): void{
        $this->correo = $correo;
    }

    public function setContrasena(string $contrasena): void{
        $this->contrasena = $contrasena;
    }

    public function setRol(string $rol): void{
        $this->rol = $rol;
    }

}