<?php

use PHPUnit\Framework\Testcase;

require_once './src/greeting.php';
require_once  './src/SimpleName.php';

class SimpleNameTest extends TestCase {

    protected $greeting;
    protected $name;

    protected function setUp()
    {
        $this->nameObject = new SimpleName("Spock");
        $this->name = $this->nameObject->name;

    }

    public function testSimpleNameGreeting()
    {
        $this->assertEquals("Hello, Spock.", $this->nameObject->greet($this->name));
    }

//    public function testNullNameGreeting()
//    {
//        $this->assertEquals("Hello, my friend.", $this->greeting->greet(null));
//    }
}