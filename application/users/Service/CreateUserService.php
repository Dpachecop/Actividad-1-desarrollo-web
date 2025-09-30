<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Command\CreateUserCommand;
use Src\Application\Users\Port\In\ICreateUserUseCase;
use Src\Application\Users\Port\Out\IUsuarioRepository;

class CreateUserService implements ICreateUserUseCase
{
    private IUsuarioRepository $repository;

    public function __construct(IUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createUser(CreateUserCommand $command): void
    {
        // Lógica para crear un nuevo usuario y guardarlo.
    }
}