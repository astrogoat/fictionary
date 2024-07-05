<?php

namespace Astrogoat\Fictionary;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Fictionary\Fictionary
 */
class FictionaryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fictionary';
    }
}
