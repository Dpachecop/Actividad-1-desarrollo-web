<?php
namespace Src\Application\Users\Port\In;
use Src\Application\Users\Command\LoginCommand;

interface ILoginUseCase {
    public function login(LoginCommand $command): bool; // Retorna true si es exitoso
}