<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ModelMakeCommand as ModelMakeCommandOriginal;

/**
 * Class ModelMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class ModelMakeCommand extends ModelMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/model.stub');
    }
}
