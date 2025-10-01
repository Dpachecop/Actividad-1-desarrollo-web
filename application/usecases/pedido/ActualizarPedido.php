<?php

namespace Src\Application\UseCases;

use Src\Domain\Entities\Pedido;
use Src\Domain\Repositories\IPedidoRepository;

class ActualizarPedido {
    private IPedidoRepository $repositorio;

    public function __construct(IPedidoRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(Pedido $pedido): void {
        $this->repositorio->actualizar($pedido);
    }
}