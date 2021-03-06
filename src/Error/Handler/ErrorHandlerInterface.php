<?php

namespace Digia\GraphQL\Error\Handler;

use Digia\GraphQL\Execution\ExecutionContext;
use Digia\GraphQL\Execution\ExecutionException;

interface ErrorHandlerInterface
{
    /**
     * @param \Throwable $exception
     */
    public function handleError(\Throwable $exception): void;

    /**
     * @param ExecutionException    $exception
     * @param ExecutionContext $context
     */
    public function handleExecutionError(ExecutionException $exception, ExecutionContext $context): void;
}
