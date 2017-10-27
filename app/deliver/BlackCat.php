<?php

namespace App\deliver;

class BlackCat implements Deliver
{
    public function __construct()
    {}

    public function sendBy(): String
    {
        return 'send by Black Cat !!';
    }
}
