<?php

namespace Modrictin\FilamentFab\Concerns;

use Closure;
use Filament\Support\Actions\Concerns\HasIcon;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

trait IsButton
{
    use HasExtraAlpineAttributes;
    use HasIcon;
    use HasBackgroundColor;
    use HasIconColor;

    private Closure $action;

    public function setAction(Closure $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function getAction(): Closure
    {
        return $this->action;
    }

}
