<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\RequestMakeCommand as RequestMakeCommandOriginal;

/**
 * Class RequestMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class RequestMakeCommand extends RequestMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/request.stub');
    }
}
