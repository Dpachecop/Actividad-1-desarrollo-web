<?php

namespace Src\Application\UseCases;

use Src\Domain\Repositories\IPedidoRepository;
use Src\Domain\Entities\Pedido;

class ConsultarPedido {
    private IPedidoRepository $repositorio;

    public function __construct(IPedidoRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(int $id): ?Pedido {
        return $this->repositorio->consultar($id);
    }
}