<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\EventMakeCommand as EventMakeCommandOriginal;

class EventMakeCommand extends EventMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/event.stub');
    }
}
