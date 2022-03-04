<?php

namespace Coderflex\Comments\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Coderflex\Comments\Comments
 */
class Comments extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'comments';
    }
}
