<?php

use PHPUnit\Framework\Testcase;
require_once './src/greeting.php';


class GreetingTest extends TestCase {

    protected $greeting;

    protected function setUp()
    {
        $this->greeting = new Greeting();
    }

    public function testGreeting()
    {
        $this->assertEquals($this->greeting->greet('Bob'), 'Hello, Bob');
    }

    public function testGreetingNull()
    {
        $this->assertEquals($this->greeting->greet(null), 'Hello, my friend.');

    }

    public function testGreetingShout()
    {
        $this->assertEquals($this->greeting->greet('JERRY'),'HELLO JERRY');

    }
    public function testGreetingSplat()
    {
        $names = ['Ryan', 'Paula'];
        $this->assertEquals($this->greeting->greet($names), 'Hello, Ryan and Paula');
    }

    public function testGreeting3Names()
    {
        $names = ['Ryan', 'Paula', 'Spock'];
        $this->assertEquals($this->greeting->greet($names), 'Hello, Ryan, Paula, and Spock.');
    }

    public function testMixedCaseNames()
    {
        $names = ['Amy', 'BRIAN', 'Charlotte'];
        $this->assertEquals($this->greeting->greet($names), 'Hello, Amy and Charlotte. AND HELLO BRIAN!');
    }
//
//    public function testMixedCaseNames2()
//    {
//        $names = ['Amy', 'BRIAN', 'Charlotte', 'PAULA'];
//        $this->assertEquals($this->greeting->greet($names), 'Hello, Amy and Charlotte.  AND HELLO BRIAN AND PAULA!');
//    }

//    public function testMixedCaseNames3()
//    {
//        $names = ['Amy', 'BRIAN', 'Charlotte', 'PAULA', 'MARIE'];
//        $this->assertEquals($this->greeting->greet($names), 'Hello, Amy and Charlotte.  AND HELLO BRIAN, PAULA, AND MARIE!');
//
//    }

}

?>