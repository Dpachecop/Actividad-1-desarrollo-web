<?php
namespace Src\Application\Users\Port\In;
use Src\Application\Users\Query\ListUsersQuery;
use Src\Application\Users\Response\UserListResponse;

interface IListUsersUseCase {
    public function listUsers(ListUsersQuery $query): UserListResponse;
}