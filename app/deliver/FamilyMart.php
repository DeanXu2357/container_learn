<?php

namespace App\deliver;

class FamilyMart implements Deliver
{
    public function __construct()
    {}

    public function sendBy(): String
    {
        return 'send by FamilyMart !!';
    }
}
