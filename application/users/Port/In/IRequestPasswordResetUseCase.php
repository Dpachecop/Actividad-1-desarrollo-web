<?php
namespace Src\Application\Users\Port\In;
use Src\Application\Users\Command\RequestPasswordResetCommand;

interface IRequestPasswordResetUseCase {
    public function requestPasswordReset(RequestPasswordResetCommand $command): void;
}