<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ConsoleMakeCommand as ConsoleMakeCommandOriginal;

class ConsoleMakeCommand extends ConsoleMakeCommandOriginal
{
    public function getStubPath()
    {
        return resource_path() . '/stubs/console.stub';
    }
}
