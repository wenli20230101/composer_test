<?php

use PHPUnit\Framework\TestCase;
use Src\MyGreeter;

class MyGreeterTest extends TestCase
{
    private MyGreeter $greeter;

    public function setUp(): void
    {
        $this->greeter = new MyGreeter();
    }

    public function test_init()
    {

        $this->assertInstanceOf(
            MyGreeter::class,
            $this->greeter
        );
    }

    public function test_greeting()
    {
        //var_dump($this->greeter->greeting());exit;
        $this->assertTrue(
            strlen($this->greeter->greeting()) > 0
        );
    }

    public function testNewMethod(){
        //测试内容
        $obj = new MyGreeter();
        $timeRes = $obj->greeting();
        var_dump($timeRes);
    }
}
