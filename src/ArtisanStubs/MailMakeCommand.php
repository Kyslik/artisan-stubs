<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\MailMakeCommand as MailMakeCommandOriginal;

class MailMakeCommand extends MailMakeCommandOriginal
{
    protected function getStub()
    {
        return resource_path('/stubs/mail.stub');
    }
}
