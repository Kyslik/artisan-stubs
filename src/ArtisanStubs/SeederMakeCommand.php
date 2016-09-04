<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Database\Console\Seeds\SeederMakeCommand as SeederMakeCommandOriginal;

class SeederMakeCommand extends SeederMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/seeder.stub');
    }
}
