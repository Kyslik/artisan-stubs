<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ProviderMakeCommand as ProviderMakeCommandOriginal;

class ProviderMakeCommand extends ProviderMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/provider.stub');
    }
}
