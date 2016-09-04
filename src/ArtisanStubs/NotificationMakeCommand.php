<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\NotificationMakeCommand as NotificationMakeCommandOriginal;

class NotificationMakeCommand extends NotificationMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/notification.stub');
    }
}
