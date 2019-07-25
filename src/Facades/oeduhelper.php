<?php

namespace oedu\oeduhelper\Facades;

use Illuminate\Support\Facades\Facade;

class oeduhelper extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'oeduhelper';
    }
}
