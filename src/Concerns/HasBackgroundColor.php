<?php

namespace Modrictin\FilamentFab\Concerns;

use Closure;

trait HasBackgroundColor
{
    private string|Closure $bgColorClasses = 'bg-primary-500';

    private string|Closure $darkBgColorClasses = 'bg-primary-500';

    public function setDarkBgColorClasses(string|Closure $darkBgColorClasses): self
    {
        $this->darkBgColorClasses = $darkBgColorClasses;

        return $this;
    }

    public function setBgColorClasses(string|Closure $bgColorClasses): self
    {
        $this->bgColorClasses = $bgColorClasses;

        return $this;
    }

    public function getDarkBgColorClasses(): string|Closure
    {
        return $this->darkBgColorClasses;
    }

    public function getBgColorClasses(): string|Closure
    {
        return $this->bgColorClasses;
    }
}
