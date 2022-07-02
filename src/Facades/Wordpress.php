<?php

namespace RickWest\Wordpress\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RickWest\Wordpress\SportsPress
 */
class Wordpress extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-wordpress-api';
    }
}