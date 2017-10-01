<?php

use PHPUnit\Framework\Testcase;
require_once './src/uppercaseName.php';

class UppercaseNameTest extends TestCase {

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new UppercaseName("SPOCK");
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testUppercaseNameGreeting()
    {
        $this->assertEquals("HELLO SPOCK!", $this->greeter->greet());
    }
}