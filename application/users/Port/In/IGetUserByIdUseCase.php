<?php
namespace Src\Application\Users\Port\In;
use Src\Application\Users\Query\GetUserByIdQuery;
use Src\Application\Users\Response\UserResponse;

interface IGetUserByIdUseCase {
    public function getUserById(GetUserByIdQuery $query): ?UserResponse;
}