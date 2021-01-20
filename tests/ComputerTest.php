<?php

use LateStatic\Computer;
use LateStatic\Mac;
use PHPUnit\Framework\TestCase;

class ComputerTest extends TestCase
{
    public function test_if_late_static_binding_works(): void
	{
        $pc = Computer::getBrand();
        self::assertEquals('PC', $pc);
        $name = Mac::getBrand();
        self::assertEquals('Mac', $name);
    }
}
