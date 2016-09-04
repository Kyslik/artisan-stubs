<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Routing\Console\MiddlewareMakeCommand as MiddlewareMakeCommandOriginal;

class MiddlewareMakeCommand extends MiddlewareMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/routing/middleware.stub');
    }
}
