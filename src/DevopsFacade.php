<?php

namespace Robmellett\Devops;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Robmellett\Devops\Skeleton\SkeletonClass
 */
class DevopsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'devops';
    }
}
