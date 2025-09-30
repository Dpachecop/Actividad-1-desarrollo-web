<?php

namespace Src\Application\UseCases;

use Src\Domain\Repositories\IUsuarioRepository;

class ListarUsuarios {
    private IUsuarioRepository $repositorio;

    public function __construct(IUsuarioRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(): array {
        return $this->repositorio->listar();
    }
}