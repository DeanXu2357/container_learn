<?php

use App\Order;
use PHPUnit\Framework\TestCase;
use \Mockery;
use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

/**
 * OrderTest
 *
 * @group group
 */
class OrderTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    /**
     * ＠test
     * @covers class::(Order)
     */
    public function 測試取得運送方法()
    {
        $mockery = Mockery::mock('\App\deliver\BlackCat');
        $mockery->shouldReceive('sendBy')->once()->andReturn('blackcat');

        $order = new Order($mockery);
        $expect = 'blackcat';
        $actual = $order->showDeliverType();
        $this->assertEquals($actual, $expect);
    }

}

