<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ConsoleMakeCommand as ConsoleMakeCommandOriginal;

/**
 * Class ConsoleMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class ConsoleMakeCommand extends ConsoleMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/console.stub');
    }
}
