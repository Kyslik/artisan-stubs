<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\ProviderMakeCommand as ProviderMakeCommandOriginal;

/**
 * Class ProviderMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class ProviderMakeCommand extends ProviderMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/provider.stub');
    }
}
