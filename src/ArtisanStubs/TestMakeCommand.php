<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\TestMakeCommand as TestMakeCommandOriginal;

/**
 * Class TestMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class TestMakeCommand extends TestMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        //TODO: markdown change in L5.4
        if ($this->option('unit')) {
            return $this->checkStub('/stubs/unit-test.stub');
        }

        return $this->checkStub('/stubs/test.stub');
    }
}
