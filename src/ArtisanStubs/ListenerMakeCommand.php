<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ListenerMakeCommand as ListenerMakeCommandOriginal;

class ListenerMakeCommand extends ListenerMakeCommandOriginal
{
    protected function getStub()
    {
        if ($this->option('queued')) {
            return resource_path('/stubs/listener-queued.stub');
        } else {
            return resource_path('/stubs/listener.stub');
        }
    }
}
