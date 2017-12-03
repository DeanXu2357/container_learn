<?php

require __DIR__ . '/vendor/autoload.php';

// use App\container\BasicContainer;
// use App\deliver\BlackCat;
// use App\deliver\Deliver;
// use App\Order;

// echo 'success';
// $deliver = new BlackCat();
// $order = new Order($deliver);

// echo($order->showDeliverType());

// $app = new BasicContainer();
// $app->bind(\App\deliver\Deliver, BlackCat());
// $app->bind('getSendType', Order());
// $order = $app->make('getSendType');
// $order->showDeliverType();

class A
{
    protected $name;

    public function __construct()
    {
        $this->name = $this;
    }

    public function getName()
    {
        return $this->name;
    }
}
echo '123';
// $a = new A();
// echo $a->jerk->getName();
