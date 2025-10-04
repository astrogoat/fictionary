<?php

namespace Astrogoat\Fictionary\Traits;

use Astrogoat\Fictionary\FictionaryServiceProvider;
use Closure;

trait HasContentVariations
{
    protected static Closure|null $cssForShowingPerVariation = null;
    protected static Closure|null $cssForHidingPerVariation = null;

    public function cssForShowingPerVariation(string $variation): string
    {
        if (! is_null(static::$cssForShowingPerVariation)) {
            return call_user_func(static::$cssForShowingPerVariation, $variation);
        }

        if (! is_null(FictionaryServiceProvider::$cssForShowingPerVariation)) {
            return call_user_func(FictionaryServiceProvider::$cssForShowingPerVariation, $variation);
        }

        return '';
    }

    public function cssForHidingPerVariation(string $variation): string
    {
        if (! is_null(static::$cssForHidingPerVariation)) {
            return call_user_func(static::$cssForHidingPerVariation, $variation);
        }

        if (! is_null(FictionaryServiceProvider::$cssForHidingPerVariation)) {
            return call_user_func(FictionaryServiceProvider::$cssForHidingPerVariation, $variation);
        }

        return '';
    }
}
