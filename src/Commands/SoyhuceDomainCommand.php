<?php

namespace Soyhuce\SoyhuceStubs\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

abstract class SoyhuceDomainCommand extends GeneratorCommand
{
    protected string $domain;

    public function handle(): void
    {
        $this->domain = $this->ask('What is your domain?');

        parent::handle();
    }

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/' . Str::lower($this->type) . '.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\{$this->domain}\\" . $this->lastLevelName();
    }

    protected function lastLevelName(): string
    {
        return Str::plural($this->type);
    }

    protected function rootNamespace()
    {
        return 'Domain\\';
    }

    /**
     * Get the destination class path.
     *
     * @param string $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return $this->laravel->basePath('/app/Domain/') . str_replace('\\', '/', $name) . '.php';
    }
}
