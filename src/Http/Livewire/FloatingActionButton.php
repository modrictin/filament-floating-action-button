<?php

namespace Modrictin\FilamentFab\Http\Livewire;

use Filament\Forms\Concerns\HasComponents;
use Livewire\Component;

class FloatingActionButton extends Component
{





    public function getTypeInstanceProperty(): ?\Modrictin\FilamentFab\Components\FabType
    {
        return \Modrictin\FilamentFab\Facades\FloatingActionButton::getTypeComponent();
    }

    public function render()
    {
        return view('filament-fab::livewire.floating-action-button');
    }
}
