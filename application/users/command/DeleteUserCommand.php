<?php
namespace Src\Application\Users\Command;

class DeleteUserCommand {
    public function __construct(public readonly int $id) {}
}