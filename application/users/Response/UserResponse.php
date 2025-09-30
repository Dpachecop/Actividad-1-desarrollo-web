<?php
namespace Src\Application\Users\Response;

class UserResponse {
    public function __construct(
        public readonly int $id,
        public readonly string $nombre,
        public readonly string $correo,
        public readonly string $rol
    ) {}
}