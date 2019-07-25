<?php

namespace Oedu\Oeduhelper\Facades;

use Illuminate\Support\Facades\Facade;

class Oeduhelper extends Facade
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
