<?php

namespace App;

use App\deliver\Deliver;

class Order
{
    private $deliver;

    public function __construct(Deliver $deliver)
    {
        $this->deliver = $deliver;
    }

    public function showDeliverType() : string
    {
        return $this->deliver->sendBy();
    }
}