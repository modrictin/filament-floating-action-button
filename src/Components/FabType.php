<?php

namespace Modrictin\FilamentFab\Components;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\CanBeHidden;
use Filament\Forms\Concerns\HasComponents;
use Filament\Support\Components\ViewComponent;
use Filament\Support\Concerns\Configurable;
use Modrictin\FilamentFab\Concerns\IsButton;

abstract class FabType extends ViewComponent
{
    use HasExtraInputAttributes;
    use CanBeHidden;
    use IsButton;

    public static function make(): FabType
    {
        return new static;
    }


}
