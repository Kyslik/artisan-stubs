<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\RequestMakeCommand as RequestMakeCommandOriginal;

class RequestMakeCommand extends RequestMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/request.stub');
    }
}
