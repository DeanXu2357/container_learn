<?php

namespace App\pay;

class VisaPay implements PayInterface
{
    public function __construct() {}

    public function pay() {
        echo 'pay by visa';
    }
}
