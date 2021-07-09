<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
 
class AddressFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Address';
    }
}