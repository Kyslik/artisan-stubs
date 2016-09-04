<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Routing\Console\ControllerMakeCommand as ControllerMakeCommandOriginal;

class ControllerMakeCommand extends ControllerMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('resource')) {
            return resource_path('/stubs/routing/controller.stub');
        }

        return resource_path('/stubs/routing/controller.plain.stub');
    }
}
