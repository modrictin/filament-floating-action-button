<?php

namespace Modrictin\FilamentFab\Commands;

use Illuminate\Console\Command;

class FloatingActionButtonCommand extends Command
{
    public $signature = 'filament-fab';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
