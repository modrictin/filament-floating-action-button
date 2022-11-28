<?php

namespace Modrictin\FilamentFab\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Modrictin\FilamentFab\FloatingActionButton
 */
class FloatingActionButton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Modrictin\FilamentFab\FloatingActionButton::class;
    }

}
