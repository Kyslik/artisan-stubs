<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ModelMakeCommand as ModelMakeCommandOriginal;

class ModelMakeCommand extends ModelMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/model.stub');
    }
}
