<?php

namespace Modrictin\FilamentFab\Components\Single;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Concerns\CanBeHidden;
use Filament\Support\Components\ViewComponent;
use Modrictin\FilamentFab\Components\FabItem;
use Modrictin\FilamentFab\Components\FabType;
use Modrictin\FilamentFab\Concerns\IsButton;

class FabSingle extends FabType
{


    protected string $view = 'filament-fab::types.fab-single';

}
