<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\JobMakeCommand as JobMakeCommandOriginal;

class JobMakeCommand extends JobMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('sync')) {
            return resource_path('/stubs/job.stub');
        } else {
            return resource_path('/stubs/job-queued.stub');
        }
    }
}
