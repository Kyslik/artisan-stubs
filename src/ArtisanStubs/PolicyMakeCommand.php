<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\PolicyMakeCommand as PolicyMakeCommandOriginal;

class PolicyMakeCommand extends PolicyMakeCommandOriginal
{
    protected function getStub()
    {
        if ($this->option('model')) {
            return resource_path('/stubs/policy.stub');
        }

        return resource_path('/stubs/policy.plain.stub');
    }
}
