<?php

namespace Src\Domain\Repositories;

use Src\Domain\Entities\Pedido;

/**
 * Puerto (Interfaz) para la persistencia de Pedidos
 */
interface IPedidoRepository {
    public function crear(Pedido $pedido): void;
    public function consultar(int $id): ?Pedido;
    public function actualizar(Pedido $pedido): void;
    public function eliminar(int $id): void;
    public function listar(): array;
}