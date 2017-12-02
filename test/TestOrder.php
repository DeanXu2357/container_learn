<?php

use App\Order;
use PHPUnit\Framework\TestCase;
use \Mockery;

/**
 * OrderTest
 *
 * @group group
 */
class OrderTest extends TestCase
{
    protected $target;

    public function setUp()
    {
        // set up
        $mockery = Mockery::mock('\App\deliver\BlackCat');
        $mockery->shouldReceive('sendBy')->once()->andReturn('blackcat');
        $this->target = new Order($mockery);
    }

    /**
     * ＠test
     * @covers class::(Order)
     */
    public function test測試取得運送方法()
    {
        // arrange
        $order = $this->target;
        $expect = 'blackcat';

        // act
        $actual = $order->showDeliverType();

        // assert
        $this->assertEquals($actual, $expect);
    }
}

