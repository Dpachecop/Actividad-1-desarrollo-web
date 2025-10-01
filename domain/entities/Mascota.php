<?php

namespace Src\Domain\Entities;

class Mascota{

    private int $id;
    private string $nombre;
    private string $genero;
    private float $peso;
    private float $tamano;
    private string $color;
    private string $raza;
    private string $especie;
    private string $fechanacimiento;
    private string $propietario;
    private string $domesticoOsalvaje;
    private string $tieneVacunas;
    private string $veterinario;

    //Constructor Vacio
    public function __Construct() {}

    /*
     * TODO ESTO SON GETTERS
     */

    public function getId(): int{
        return $this->id;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getGenero(): string{
        return $this->genero;
    }

    public function getPeso(): float{
        return $this->peso;
    }

    public function getTamano(): float{
        return $this->tamano;
    }

    public function getColor(): string{
        return $this->color;
    }

    public function getRaza(): string{
        return $this->raza;
    }

    public function getEspecie(): string{
        return $this->especie;
    }


    public function getFechanacimiento(): string{
        return $this->fechanacimiento;
    }

    public function getPropietario(): string{
        return $this->propietario;
    }

    public function getDomesticoOsalvaje(): string{
        return $this->domesticoOsalvaje;
    }

    public function getTieneVacunas(): string{
        return $this->tieneVacunas;
    }

    public function getVeterinario(): string{
        return $this->veterinario;
    }


    /*
     * TODO ESTO SON SETTERS
     */

    public function setId(int $id): void{
        $this->id = $id;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }

    public function setGenero(string $genero): void{
        $this->genero = $genero;
    }

    public function setPeso(float $peso): void{
        $this->peso = $peso;
    }

    public function setTamano(float $tamano): void{
        $this->tamano = $tamano;
    }

    public function setColor(string $color): void{
        $this->color = $color;
    }

    public function setRaza(string $raza): void{
        $this->raza = $raza;
    }

    public function setEspecie(string $especie): void{
        $this->especie = $especie;
    }


    public function setFechanacimiento(string $fechanacimiento): void{
        $this->fechanacimiento = $fechanacimiento;
    }

    public function setPropietario(string $propietario): void{
        $this->propietario = $propietario;
    }

    public function setDomesticoOsalvaje(string $domesticoOsalvaje): void{
        $this->domesticoOsalvaje = $domesticoOsalvaje;
    }

    public function setTieneVacunas(string $tieneVacunas): void{
        $this->tieneVacunas = $tieneVacunas;
    }


    public function setVeterinario(string $veterinario): void{
        $this->veterinario = $veterinario;
    }

}