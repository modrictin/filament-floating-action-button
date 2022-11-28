<?php

namespace Modrictin\FilamentFab\Concerns;

use Closure;

trait HasIconColor
{
    private string|Closure $iconColorClasses = 'bg-primary-500';

    private string|Closure $darkIconColorClasses = 'bg-primary-500';

    public function setDarkIconColorClasses(string|Closure $darkIconColorClasses): self
    {
        $this->darkIconColorClasses = $darkIconColorClasses;

        return $this;
    }

    public function setIconColorClasses(string|Closure $iconColorClasses): self
    {
        $this->iconColorClasses = $iconColorClasses;

        return $this;
    }

    public function getDarkIconColorClasses(): string|Closure
    {
        return $this->darkIconColorClasses;
    }

    public function getIconColorClasses(): string|Closure
    {
        return $this->iconColorClasses;
    }
}
