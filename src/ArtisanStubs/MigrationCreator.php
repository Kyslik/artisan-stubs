<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Database\Migrations\MigrationCreator as MigrationCreatorOriginal;

class MigrationCreator extends MigrationCreatorOriginal
{
    /**
     * Get the path to the stubs.
     *
     * @return string
     */
    public function getStubPath()
    {
        return resource_path('/stubs/migrations');
    }
}
