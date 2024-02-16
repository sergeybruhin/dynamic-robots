<?php

namespace SergeyBruhin\DynamicRobots\Exceptions;

use Exception;
use Throwable;

class DynamicRobotsException extends Exception
{
    public function __construct(string $message = "", int $code = 500, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
