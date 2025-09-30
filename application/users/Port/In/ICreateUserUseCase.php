<?php
namespace Src\Application\Users\Port\In;
use Src\Application\Users\Command\CreateUserCommand;

interface ICreateUserUseCase {
    public function createUser(CreateUserCommand $command): void;
}