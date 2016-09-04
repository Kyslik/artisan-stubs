<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\MailMakeCommand as MailMakeCommandOriginal;

class MailMakeCommand extends MailMakeCommandOriginal
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return resource_path('/stubs/mail.stub');
    }
}
