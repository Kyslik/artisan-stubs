<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\TestMakeCommand as TestMakeCommandOriginal;

class TestMakeCommand extends TestMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/test.stub');
    }
}
