<?php

namespace Src\Domain\Entities;

class Pedido {

    private int $id;
    private string $fecha;
    private string $fechaEnvio;
    private string $fechaEntrega;
    private string $cliente;
    private string $proveedor;
    private float $valor;
    private string $estado;
    private string $pais;
    private string $departamento;
    private string $ciudad;
    private string $nomenclaturaVivienda;
    private float $propina;

    // Constructor Vacío
    public function __construct() {}

    /*
     * GETTERS
     */

    public function getId(): int {
        return $this->id;
    }

    public function getFecha(): string {
        return $this->fecha;
    }

    public function getFechaEnvio(): string {
        return $this->fechaEnvio;
    }

    public function getFechaEntrega(): string {
        return $this->fechaEntrega;
    }

    public function getCliente(): string {
        return $this->cliente;
    }

    public function getProveedor(): string {
        return $this->proveedor;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function getEstado(): string {
        return $this->estado;
    }

    public function getPais(): string {
        return $this->pais;
    }

    public function getDepartamento(): string {
        return $this->departamento;
    }

    public function getCiudad(): string {
        return $this->ciudad;
    }

    public function getNomenclaturaVivienda(): string {
        return $this->nomenclaturaVivienda;
    }

    public function getPropina(): float {
        return $this->propina;
    }

    /*
     * SETTERS
     */

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setFecha(string $fecha): void {
        $this->fecha = $fecha;
    }

    public function setFechaEnvio(string $fechaEnvio): void {
        $this->fechaEnvio = $fechaEnvio;
    }

    public function setFechaEntrega(string $fechaEntrega): void {
        $this->fechaEntrega = $fechaEntrega;
    }

    public function setCliente(string $cliente): void {
        $this->cliente = $cliente;
    }

    public function setProveedor(string $proveedor): void {
        $this->proveedor = $proveedor;
    }

    public function setValor(float $valor): void {
        $this->valor = $valor;
    }

    public function setEstado(string $estado): void {
        $this->estado = $estado;
    }

    public function setPais(string $pais): void {
        $this->pais = $pais;
    }

    public function setDepartamento(string $departamento): void {
        $this->departamento = $departamento;
    }

    public function setCiudad(string $ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function setNomenclaturaVivienda(string $nomenclaturaVivienda): void {
        $this->nomenclaturaVivienda = $nomenclaturaVivienda;
    }

    public function setPropina(float $propina): void {
        $this->propina = $propina;
    }
}