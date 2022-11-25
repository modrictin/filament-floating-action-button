<?php

namespace Modrictin\FilamentFab\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modrictin\FilamentFab\FilamentFabServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Modrictin\\FilamentFab\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentFabServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-fab_table.php.stub';
        $migration->up();
        */
    }
}
