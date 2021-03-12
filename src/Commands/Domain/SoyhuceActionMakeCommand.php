<?php

namespace Soyhuce\SoyhuceStubs\Commands\Domain;

use Illuminate\Support\Str;
use Soyhuce\SoyhuceStubs\Commands\SoyhuceDomainCommand;

class SoyhuceActionMakeCommand extends SoyhuceDomainCommand
{
    /** @var string */
    protected $name = 'soyhuce:action';

    /** @var string */
    protected $description = 'Generate a SoyHuCe Action class';

    /** @var string */
    protected $type = 'Action';

    /**
     * Get the destination class path.
     *
     * @param string $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = (string) Str::of($name)->finish($this->type);

        return parent::getPath($name);
    }
}
