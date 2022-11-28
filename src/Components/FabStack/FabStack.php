<?php

namespace Modrictin\FilamentFab\Components\FabStack;

use Modrictin\FilamentFab\Components\FabType;

class FabStack extends FabType
{
    private array|\Closure $items;

    protected string $view = 'filament-fab::types.fab-stack';

    public function setItems(array|\Closure $items): FabStack
    {
        $this->items = $items;

        return $this;
    }

    public function getItems(): array
    {
        if (($items = $this->evaluate($this->items)) && is_array($items)) {
            return $items;
        }

        return [];
    }

    public static function make(): FabStack
    {
        return new self();
    }
}
