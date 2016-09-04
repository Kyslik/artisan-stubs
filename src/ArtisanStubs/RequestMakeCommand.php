<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\RequestMakeCommand as RequestMakeCommandOriginal;

class RequestMakeCommand extends RequestMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/request.stub');
    }
}
