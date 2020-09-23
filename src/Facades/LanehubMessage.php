<?php

namespace Lanehub\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 门面
 * Class LanehubMessage
 * @package Lanehub\Facades
 */
class LanehubMessage extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'LanehubMessage';
    }
}