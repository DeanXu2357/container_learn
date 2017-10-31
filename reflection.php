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
$instance = $reflection->newInstanceArgs([$b]);

$instance->dosomething();

$constructor = $reflection->getConstructor();
$dependencies = $constructor->getParameters();

var_dump($constructor);

var_dump($dependencies);
