<?php
namespace Src\Application\Users\Command;

class LoginCommand {
    public function __construct(
        public readonly string $correo,
        public readonly string $contrasena
    ) {}
}