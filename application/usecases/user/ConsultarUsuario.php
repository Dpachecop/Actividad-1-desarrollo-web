<?php

namespace Src\Application\UseCases;

use Src\Domain\Repositories\IUsuarioRepository;

class ConsultarUsuario {
    private IUsuarioRepository $repositorio;

    public function __construct(IUsuarioRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(int $id): ?\Src\Domain\Entities\Usuario {
        return $this->repositorio->consultar($id);
    }
}