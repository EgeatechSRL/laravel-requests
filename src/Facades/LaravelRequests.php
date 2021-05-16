<?php

namespace Egeatech\LaravelRequests\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelRequests extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-requests';
    }
}
