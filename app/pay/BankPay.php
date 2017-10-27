<?php

namespace App\pay;

class BankPay implements PayInterface
{
    public function __construct() {}

    public function pay() {
        echo 'pay by bank';
    }
}
