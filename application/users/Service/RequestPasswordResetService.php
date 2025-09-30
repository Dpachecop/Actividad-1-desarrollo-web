<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Command\RequestPasswordResetCommand;
use Src\Application\Users\Port\In\IRequestPasswordResetUseCase;
use Src\Application\Users\Port\Out\IUsuarioRepository;

class RequestPasswordResetService implements IRequestPasswordResetUseCase
{
    private IUsuarioRepository $repository;

    public function __construct(IUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function requestPasswordReset(RequestPasswordResetCommand $command): void
    {
        // Lógica para solicitar el restablecimiento de contraseña (ej. enviar email).
    }
}