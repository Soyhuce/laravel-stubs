<?php

namespace Soyhuce\SoyhuceStubs\Commands\Domain;

use Illuminate\Support\Str;
use Soyhuce\SoyhuceStubs\Commands\SoyhuceDomainCommand;

class SoyhuceDTOMakeCommand extends SoyhuceDomainCommand
{
    /** @var string */
    protected $name = 'soyhuce:dto';

    /** @var string */
    protected $description = 'Generate a SoyHuCe DTO class';

    /** @var string */
    protected $type = 'DTO';

    protected function lastLevelName(): string
    {
        return $this->type;
    }

    protected function getPath($name): string
    {
        $name = (string) Str::of($name)->finish($this->type);

        return parent::getPath($name);
    }
}
