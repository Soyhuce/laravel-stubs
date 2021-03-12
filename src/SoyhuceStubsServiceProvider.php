<?php

namespace Soyhuce\SoyhuceStubs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soyhuce\SoyhuceStubs\Commands\SoyhuceStubsCommand;

class SoyhuceStubsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-stubs')
            ->hasCommand(SoyhuceStubsCommand::class);
    }
}
