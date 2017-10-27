<?php

namespace App\deliver;

class OneDay implements Deliver
{
    public function __construct()
    {}

    public function sendBy(): String
    {
        return 'send by 24H deliver !!';
    }
}
