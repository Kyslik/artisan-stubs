<?php

namespace Kyslik\ArtisanStubs;

/**
 * Class CheckStub
 * @package Kyslik\ArtisanStubs
 */
trait CheckStub
{

    /**
     * @param $stub
     * @return string
     */
    public function checkStub($stub)
    {
        return (file_exists(resource_path($stub))) ? resource_path($stub) : __DIR__ . '/../' . $stub;
    }
}
