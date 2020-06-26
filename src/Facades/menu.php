<?php

namespace smsalem\menu\Facades;

use Illuminate\Support\Facades\Facade;

class menu extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'menu';
    }
}
