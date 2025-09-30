<?php
namespace Src\Application\Users\Service;

use Src\Application\Users\Port\In\ILogoutUseCase;

class LogoutService implements ILogoutUseCase
{
    public function __construct()
    {
        // Puede que no necesite dependencias.
    }

    public function logout(): void
    {
        // Lógica para cerrar la sesión del usuario.
    }
}