<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ConsoleMakeCommand as ConsoleMakeCommandOriginal;

class ConsoleMakeCommand extends ConsoleMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/console.stub');
    }
}
