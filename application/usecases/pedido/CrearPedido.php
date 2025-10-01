<?php

namespace Src\Application\UseCases;

use Src\Domain\Entities\Pedido;
use Src\Domain\Repositories\IPedidoRepository;

class CrearPedido {
    private IPedidoRepository $repositorio;

    public function __construct(IPedidoRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(Pedido $pedido): void {
        // Aquí podrías agregar lógica de negocio antes de crear
        $this->repositorio->crear($pedido);
    }
}