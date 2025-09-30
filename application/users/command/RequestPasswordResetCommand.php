<?php
namespace Src\Application\Users\Command;

class RequestPasswordResetCommand {
    public function __construct(public readonly string $correo) {}
}