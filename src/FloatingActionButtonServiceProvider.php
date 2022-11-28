<?php

namespace Modrictin\FilamentFab;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Modrictin\FilamentFab\Commands\FloatingActionButtonCommand;
use Spatie\LaravelPackageTools\Package;

class FloatingActionButtonServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-fab-stylesheet' => __DIR__ . '/../dist/filament-fab.css',
    ];


    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-fab')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-fab_table')
            ->hasCommand(FloatingActionButtonCommand::class);
    }

    public function packageRegistered():void
    {
        parent::packageRegistered();

        $this->app->singleton(FloatingActionButton::class, function () {
            return new FloatingActionButton();
        });
    }

    public function packageBooted(): void
    {
        parent::packageBooted();

        Filament::serving(function () {
            \Modrictin\FilamentFab\Facades\FloatingActionButton::boot();
        });
    }


}
