<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class IsPdf extends Facade{
    protected static function getFacadeAccessor() { return 'IsPdf'; }
}
