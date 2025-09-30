<?php

namespace Src\Application\UseCases;

use Src\Domain\Entities\Usuario;
use Src\Domain\Repositories\IUsuarioRepository;

class ActualizarUsuario {
    private IUsuarioRepository $repositorio;

    public function __construct(IUsuarioRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(Usuario $usuario): void {
        $this->repositorio->actualizar($usuario);
    }
}