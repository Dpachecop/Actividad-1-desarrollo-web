<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Port\In\IGetUserByIdUseCase;
use Src\Application\Users\Port\Out\IUsuarioRepository;
use Src\Application\Users\Query\GetUserByIdQuery;
use Src\Application\Users\Response\UserResponse;

class GetUserByIdService implements IGetUserByIdUseCase
{
    private IUsuarioRepository $repository;

    public function __construct(IUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getUserById(GetUserByIdQuery $query): ?UserResponse
    {
        // Lógica para buscar un usuario y devolver sus datos.
        return null;
    }
}