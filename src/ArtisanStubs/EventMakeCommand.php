<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\EventMakeCommand as EventMakeCommandOriginal;

class EventMakeCommand extends EventMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/event.stub');
    }
}
