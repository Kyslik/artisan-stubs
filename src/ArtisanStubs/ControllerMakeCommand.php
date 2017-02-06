<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Routing\Console\ControllerMakeCommand as ControllerMakeCommandOriginal;

/**
 * Class ControllerMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class ControllerMakeCommand extends ControllerMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        if ($this->option('model')) {
            return $this->checkStub('/stubs/routing/controller.model.stub');
        } elseif ($this->option('resource')) {
            return $this->checkStub('/stubs/routing/controller.stub');
        }

        return $this->checkStub('/stubs/routing/controller.plain.stub');
    }
}
