<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Routing\Console\MiddlewareMakeCommand as MiddlewareMakeCommandOriginal;

class MiddlewareMakeCommand extends MiddlewareMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/routing/middleware.stub');
    }
}
