<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\TestMakeCommand as TestMakeCommandOriginal;

class TestMakeCommand extends TestMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/test.stub');
    }
}
