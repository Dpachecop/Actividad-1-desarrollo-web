<?php

namespace Src\Domain\Repositories;

use Src\Domain\Entities\Usuario;

/**
 * Puerto (Interfaz) para la persistencia de Usuarios
 */
interface IUsuarioRepository {
    public function crear(Usuario $usuario): void;
    public function consultar(int $id): ?Usuario;
    public function actualizar(Usuario $usuario): void;
    public function eliminar(int $id): void;
    public function listar(): array;
    public function buscarPorCorreo(string $correo): ?Usuario;
}