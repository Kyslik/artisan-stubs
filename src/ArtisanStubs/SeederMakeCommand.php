<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Database\Console\Seeds\SeederMakeCommand as SeederMakeCommandOriginal;

class SeederMakeCommand extends SeederMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/seeder.stub');
    }
}
