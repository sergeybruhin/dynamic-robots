<?php

namespace SergeyBruhin\DynamicRobots\Facades;

use Illuminate\Support\Facades\Facade;

class DynamicRobots extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'dynamic-robots';
    }
}
