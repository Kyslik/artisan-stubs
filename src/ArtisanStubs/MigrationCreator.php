<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Database\Migrations\MigrationCreator as MigrationCreatorOriginal;

/**
 * Class MigrationCreator
 * @package Kyslik\ArtisanStubs
 */
class MigrationCreator extends MigrationCreatorOriginal
{
    use CheckStub;

    public function stubPath()
    {
        return $this->getStubPath();
    }

    /**
     * Get the path to the stubs.
     *
     * @return string
     */
    public function getStubPath()
    {
        return $this->checkStub('/stubs/migrations');
    }
}
