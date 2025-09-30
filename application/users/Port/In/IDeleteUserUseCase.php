<?php
namespace Src\Application\Users\Port\In;
use Src\Application\Users\Command\DeleteUserCommand;

interface IDeleteUserUseCase {
    public function deleteUser(DeleteUserCommand $command): void;
}