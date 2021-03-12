<?php

namespace Soyhuce\SoyhuceStubs\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

abstract class SoyhuceApplicationCommand extends GeneratorCommand
{
    public function handle(): void
    {
        $this->name = $this->ask('What is your application domain?');

        parent::handle();
    }

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/' . Str::lower($this->type) . '.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\{$this->name}\\" . Str::plural($this->type);
    }
}
