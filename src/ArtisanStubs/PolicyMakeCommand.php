<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\PolicyMakeCommand as PolicyMakeCommandOriginal;

/**
 * Class PolicyMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class PolicyMakeCommand extends PolicyMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('model')) {
            return $this->checkStub('/stubs/policy.stub');
        }

        return $this->checkStub('/stubs/policy.plain.stub');
    }
}
