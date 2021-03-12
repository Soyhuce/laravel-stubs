<?php

namespace Soyhuce\SoyhuceStubs;

use Soyhuce\SoyhuceStubs\Commands\Application\SoyhuceControllerMakeCommand;
use Soyhuce\SoyhuceStubs\Commands\Domain\SoyhuceActionMakeCommand;
use Soyhuce\SoyhuceStubs\Commands\Domain\SoyhuceDTOMakeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SoyhuceStubsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-stubs')
            ->hasCommands([
                SoyhuceControllerMakeCommand::class,
                SoyhuceActionMakeCommand::class,
                SoyhuceDTOMakeCommand::class,
            ]);
    }
}
