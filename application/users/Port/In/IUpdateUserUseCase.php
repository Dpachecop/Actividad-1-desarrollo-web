<?php
namespace Src\Application\Users\Port\In;
use Src\Application\Users\Command\UpdateUserCommand;

interface IUpdateUserUseCase {
    public function updateUser(UpdateUserCommand $command): void;
}