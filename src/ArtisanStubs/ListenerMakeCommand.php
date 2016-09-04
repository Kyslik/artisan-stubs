<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ListenerMakeCommand as ListenerMakeCommandOriginal;

/**
 * Class ListenerMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class ListenerMakeCommand extends ListenerMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('queued')) {
            return $this->checkStub('/stubs/listener-queued.stub');
        } else {
            return $this->checkStub('/stubs/listener.stub');
        }
    }
}
