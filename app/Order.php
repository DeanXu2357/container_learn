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

    public function showDeliverType()
    {
        return $this->deliver->sendBy();
    }
}