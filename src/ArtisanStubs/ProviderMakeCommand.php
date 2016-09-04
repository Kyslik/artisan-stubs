<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ProviderMakeCommand as ProviderMakeCommandOriginal;

class ProviderMakeCommand extends ProviderMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/provider.stub');
    }
}
