<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ConsoleMakeCommand as ConsoleMakeCommandOriginal;

class ConsoleMakeCommand extends ConsoleMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/console.stub');
    }
}
