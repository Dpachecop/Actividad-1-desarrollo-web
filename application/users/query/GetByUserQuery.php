<?php
namespace Src\Application\Users\Query;

class GetUserByIdQuery {
    public function __construct(public readonly int $id) {}
}