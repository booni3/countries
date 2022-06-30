<?php

namespace Booni3\Countries;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Booni3\Countries\Skeleton\SkeletonClass
 */
class CountriesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'countries';
    }
}
