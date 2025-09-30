<?php
namespace Src\Application\Users\Command;

class UpdateUserCommand {
    public function __construct(
        public readonly int $id,
        public readonly string $nombre,
        public readonly string $correo,
        public readonly string $rol
    ) {}
}