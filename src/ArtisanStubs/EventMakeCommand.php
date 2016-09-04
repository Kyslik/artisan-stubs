<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\EventMakeCommand as EventMakeCommandOriginal;

/**
 * Class EventMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class EventMakeCommand extends EventMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/event.stub');
    }
}
