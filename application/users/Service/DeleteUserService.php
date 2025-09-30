<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Command\DeleteUserCommand;
use Src\Application\Users\Port\In\IDeleteUserUseCase;
use Src\Application\Users\Port\Out\IUsuarioRepository;

class DeleteUserService implements IDeleteUserUseCase
{
    private IUsuarioRepository $repository;

    public function __construct(IUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function deleteUser(DeleteUserCommand $command): void
    {
        // Lógica para eliminar un usuario por su ID.
    }
}