<?php
namespace Src\Application\Users\Command;

class CreateUserCommand {
    public function __construct(
        public readonly string $nombre,
        public readonly string $correo,
        public readonly string $contrasena,
        public readonly string $rol
    ) {}
}