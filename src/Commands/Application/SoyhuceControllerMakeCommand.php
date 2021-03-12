<?php

namespace Soyhuce\SoyhuceStubs\Commands\Application;

use Soyhuce\SoyhuceStubs\Commands\SoyhuceApplicationCommand;

class SoyhuceControllerMakeCommand extends SoyhuceApplicationCommand
{
    /** @var string */
    protected $name = 'soyhuce:controller';

    /** @var string */
    protected $description = 'Generate a SoyHuCe Controller class';

    /** @var string */
    protected $type = 'Controller';
}
