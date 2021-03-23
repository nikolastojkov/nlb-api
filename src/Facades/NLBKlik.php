<?php

namespace NikolaStojkov\NLBKlik\Facades;

use Illuminate\Support\Facades\Facade;

class NLBKlik extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nlbklik';
    }
}

