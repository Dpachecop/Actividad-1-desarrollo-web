<?php

namespace Src\Application\UseCases;

use Src\Domain\Repositories\IPedidoRepository;

class ListarPedidos {
    private IPedidoRepository $repositorio;

    public function __construct(IPedidoRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(): array {
        return $this->repositorio->listar();
    }
}