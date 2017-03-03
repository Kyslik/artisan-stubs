<?php

namespace Kyslik\ArtisanStubs;

use Illuminate\Foundation\Console\MailMakeCommand as MailMakeCommandOriginal;

/**
 * Class MailMakeCommand
 * @package Kyslik\ArtisanStubs
 */
class MailMakeCommand extends MailMakeCommandOriginal
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
            return $this->checkStub('/stubs/markdown-mail.stub');
        }

        return $this->checkStub('/stubs/mail.stub');
    }
}
