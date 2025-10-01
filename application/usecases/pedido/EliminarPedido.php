<?php

namespace Src\Application\UseCases;

use Src\Domain\Repositories\IPedidoRepository;

class EliminarPedido {
    private IPedidoRepository $repositorio;

    public function __construct(IPedidoRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(int $id): void {
        $this->repositorio->eliminar($id);
    }
}