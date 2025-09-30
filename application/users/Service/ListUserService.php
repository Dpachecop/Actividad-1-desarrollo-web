<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Port\In\IListUsersUseCase;
use Src\Application\Users\Port\Out\IUsuarioRepository;
use Src\Application\Users\Query\ListUsersQuery;
use Src\Application\Users\Response\UserListResponse;

class ListUsersService implements IListUsersUseCase
{
    private IUsuarioRepository $repository;

    public function __construct(IUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listUsers(ListUsersQuery $query): UserListResponse
    {
        // Lógica para obtener todos los usuarios y devolverlos.
        return new UserListResponse([]);
    }
}