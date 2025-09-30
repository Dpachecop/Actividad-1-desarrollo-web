<?php
namespace Src\Application\Users\Port\In;

interface ILogoutUseCase {
    public function logout(): void;
}