<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\JobMakeCommand as JobMakeCommandOriginal;

class JobMakeCommand extends JobMakeCommandOriginal
{
    protected function getStub()
    {
        if ($this->option('sync')) {
            return resource_path('/stubs/job.stub');
        } else {
            return resource_path('/stubs/job-queued.stub');
        }
    }
}
