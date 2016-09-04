<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Database\Console\Seeds\SeederMakeCommand as SeederMakeCommandOriginal;

/**
 * Class SeederMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class SeederMakeCommand extends SeederMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/seeder.stub');
    }
}
