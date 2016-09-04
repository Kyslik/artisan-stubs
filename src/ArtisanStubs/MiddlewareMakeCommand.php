<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Routing\Console\MiddlewareMakeCommand as MiddlewareMakeCommandOriginal;

/**
 * Class MiddlewareMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class MiddlewareMakeCommand extends MiddlewareMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/routing/middleware.stub');
    }
}
