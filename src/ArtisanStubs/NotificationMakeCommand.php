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
        if ($this->option('markdown')) {
            return $this->checkStub('/stubs/markdown-notification.stub');
        }

        return $this->checkStub('/stubs/notification.stub');
    }
}
