<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\NotificationMakeCommand as NotificationMakeCommandOriginal;

/**
 * Class NotificationMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class NotificationMakeCommand extends NotificationMakeCommandOriginal
{
    use CheckStub;

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->checkStub('/stubs/notification.stub');
    }
}
