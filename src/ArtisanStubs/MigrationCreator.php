<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Database\Migrations\MigrationCreator as MigrationCreatorOriginal;

class MigrationCreator extends MigrationCreatorOriginal
{
    public function getStubPath()
    {
        return resource_path() . '/stubs/migrations';
    }
}
