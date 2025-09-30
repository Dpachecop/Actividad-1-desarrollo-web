<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Command\UpdateUserCommand;
use Src\Application\Users\Port\In\IUpdateUserUseCase;
use Src\Application\Users\Port\Out\IUsuarioRepository;

class UpdateUserService implements IUpdateUserUseCase
{
    private IUsuarioRepository $repository;

    public function __construct(IUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function updateUser(UpdateUserCommand $command): void
    {
        // Lógica para encontrar un usuario y actualizar sus datos.
    }
}