<?php
namespace Src\Application\Users\Response;

class UserListResponse {
    /**
     * @param UserResponse[] $users
     */
    public function __construct(public readonly array $users) {}
}