<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\JobMakeCommand as JobMakeCommandOriginal;

/**
 * Class JobMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class JobMakeCommand extends JobMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('sync')) {
            return $this->checkStub('/stubs/job.stub');
        }

        return $this->checkStub('/stubs/job-queued.stub');
    }
}
