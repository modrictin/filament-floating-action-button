<?php

namespace Modrictin\FilamentFab;

use Filament\Facades\Filament;
use Filament\Forms\Components\Concerns\CanBeHidden;
use Filament\Support\Concerns\EvaluatesClosures;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Modrictin\FilamentFab\Components\FabType;

class FloatingActionButton
{
    use CanBeHidden;
    use EvaluatesClosures;


    private FabType|null $typeComponent = null;

    public function __construct()
    {
        $this->disableByDefault();
    }

    public function boot(): void
    {
        $this->registerLivewireComponent();
        $this->injectFAB();
    }

    public function make(FabType $typeComponent): self
    {
        $this->typeComponent = $typeComponent;

        $this->enableOnMake();

        return $this;
    }

    // Enable component when User makes one
    private function enableOnMake(): void
    {
        $this->isVisible = true;
        $this->isHidden = false;
    }

    // Disable component before user makes one
    private function disableByDefault(): void
    {
        $this->isVisible = false;
        $this->isHidden = true;
    }

    private function registerLivewireComponent(): void
    {
        Livewire::component('filament-fab.fab-component', \Modrictin\FilamentFab\Http\Livewire\FloatingActionButton::class);
    }

    private function injectFAB(): void
    {
        if ($this->typeComponent && $this->isHidden() ) {
            return;
        }

        Filament::registerRenderHook('body.end', fn(): string => Blade::render("@livewire('filament-fab.fab-component')"));
    }

    public function getTypeComponent(): ?FabType
    {
        return $this->typeComponent;
    }

    public function renderComponent(): \Illuminate\Contracts\View\View
    {
        return $this->typeComponent->render();
    }


}
