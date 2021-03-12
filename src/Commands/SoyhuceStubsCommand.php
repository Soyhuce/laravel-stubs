<?php

namespace Soyhuce\SoyhuceStubs\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class SoyhuceStubsCommand extends Command
{
    /** @var string */
    protected $signature = 'soyhuce:stub-publish {--force : Overwrite any existing files}';

    /** @var string|null */
    protected $description = 'Publish all stubs that are available for customization';

    public function handle(): void
    {
        if (!is_dir($stubsPath = $this->laravel->basePath('stubs'))) {
            (new Filesystem())->makeDirectory($stubsPath);
        }

        $files = [
            '../../stubs/cast.stub' => $stubsPath . '/cast.stub',
            '../../stubs/job.queued.stub' => $stubsPath . '/job.queued.stub',
            '../../stubs/job.stub' => $stubsPath . '/job.stub',
            '../../stubs/model.pivot.stub' => $stubsPath . '/model.pivot.stub',
            '../../stubs/model.stub' => $stubsPath . '/model.stub',
            '../../stubs/observer.stub' => $stubsPath . '/observer.stub',
            '../../stubs/observer.plain.stub' => $stubsPath . '/observer.plain.stub',
            '../../stubs/request.stub' => $stubsPath . '/request.stub',
            '../../stubs/resource.stub' => $stubsPath . '/resource.stub',
            '../../stubs/resource-collection.stub' => $stubsPath . '/resource-collection.stub',
            '../../stubs/test.stub' => $stubsPath . '/test.stub',
            '../../stubs/test.unit.stub' => $stubsPath . '/test.unit.stub',
        ];

        foreach ($files as $from => $to) {
            if (!file_exists($to) || $this->option('force')) {
                file_put_contents($to, file_get_contents($from));
            }
        }

        $this->info('SoyHuCe Stubs published successfully.');
    }
}
