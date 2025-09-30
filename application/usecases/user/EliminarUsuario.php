<?php

namespace Src\Application\UseCases;

use Src\Domain\Repositories\IUsuarioRepository;

class EliminarUsuario {
    private IUsuarioRepository $repositorio;

    public function __construct(IUsuarioRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(int $id): void {
        $this->repositorio->eliminar($id);
    }
}