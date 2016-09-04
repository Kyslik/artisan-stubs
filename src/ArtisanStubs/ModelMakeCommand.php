<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ModelMakeCommand as ModelMakeCommandOriginal;

class ModelMakeCommand extends ModelMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/model.stub');
    }
}
