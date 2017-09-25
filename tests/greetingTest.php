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
        $this->assertEquals('Hello, Bob', $this->greeting->greet('Bob'));
    }

    public function testGreetingNull()
    {
        $this->assertEquals('Hello, my friend.', $this->greeting->greet(null));

    }

    public function testGreetingShout()
    {
        $this->assertEquals('HELLO JERRY', $this->greeting->greet('JERRY'));

    }
    public function testGreetingSplat()
    {
        $names = ['Ryan', 'Paula'];
        $this->assertEquals('Hello, Ryan and Paula', $this->greeting->greet($names));
    }

    public function testGreeting3Names()
    {
        $names = ['Ryan', 'Paula', 'Spock'];
        $this->assertEquals('Hello, Ryan, Paula, and Spock.', $this->greeting->greet($names));
    }

    public function testMixedCaseNames()
    {
        $names = ['Amy', 'BRIAN', 'Charlotte'];
        $this->assertEquals('Hello, Amy and Charlotte. AND HELLO BRIAN!', $this->greeting->greet($names));
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

    public function testCommaInString()
    {
        $names = ['Ryan', 'Paula, Spock'];
        $this->assertEquals('Hello, Ryan, Paula, and Spock.', $this->greeting->greet($names));
    }

}

?>