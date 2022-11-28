<?php

namespace Modrictin\FilamentFab\Components;

use Filament\Support\Actions\Concerns\HasIcon;
use Filament\Support\Components\ViewComponent;
use Modrictin\FilamentFab\Concerns\IsButton;

class FabItem extends ViewComponent
{
    use HasIcon;
    use IsButton;

    protected string $view = 'filament-fab::types.fab-item';

    public static function make()
    {
        return new self();
    }
}
