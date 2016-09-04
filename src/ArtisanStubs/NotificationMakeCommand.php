<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\NotificationMakeCommand as NotificationMakeCommandOriginal;

class NotificationMakeCommand extends NotificationMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/notification.stub');
    }
}
