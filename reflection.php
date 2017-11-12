<?php

class B
{
}

class A
{
    public function __construct(B $args)
    {
        echo 'here is A\'s construct';
    }

    public function dosomething()
    {
        echo 'hello world';
    }
}

$b = new B();
$reflection = new ReflectionClass('A');
// 為A創建實例 要帶入class B 因為class A 依賴注入class B
$instance = $reflection->newInstanceArgs([$b]);
// $instance為A的反射實例 因此也同樣擁有方法dosomething()
$instance->dosomething();

$constructor = $reflection->getConstructor();
$dependencies = $constructor->getParameters();

var_dump($constructor);

var_dump($dependencies);
