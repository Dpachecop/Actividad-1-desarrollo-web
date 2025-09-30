<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Command\LoginCommand;
use Src\Application\Users\Port\In\ILoginUseCase;
use Src\Application\Users\Port\Out\IUsuarioRepository;

class LoginService implements ILoginUseCase
{
    private IUsuarioRepository $repository;

    public function __construct(IUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function login(LoginCommand $command): bool
    {
        // Lógica para validar credenciales e iniciar sesión.
        return false;
    }
}