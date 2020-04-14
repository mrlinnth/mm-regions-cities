<?php

namespace Mrlinnth\Mmrc\Facades;

use Illuminate\Support\Facades\Facade;

class Mmrc extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mmrc';
    }
}
