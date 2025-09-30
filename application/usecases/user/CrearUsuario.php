<?php

namespace Src\Application\UseCases;

use Src\Domain\Entities\Usuario;
use Src\Domain\Repositories\IUsuarioRepository;

class CrearUsuario {
    private IUsuarioRepository $repositorio;

    public function __construct(IUsuarioRepository $repositorio) {
        $this->repositorio = $repositorio;
    }

    public function execute(Usuario $usuario): void {
        // Aquí podrías agregar lógica de negocio, como validar que el correo no exista
        $this->repositorio->crear($usuario);
    }
}