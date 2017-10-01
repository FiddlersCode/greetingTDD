<?php

use PHPUnit\Framework\Testcase;

require_once  './src/greeting.php';

class greetingTest extends TestCase {

    protected $greeting;
    protected $name;

    protected function setUp()
    {
        $this->nameObject = new SimpleName("Spock");
        $this->name = $this->nameObject->name;
        $this->greeting = new Greeting("Paula");
    }

    public function testGreetingCanBeInstantiatedWithName()
    {
        $this->assertEquals("Paula", $this->greeting->names[0]);

    }

    public function testNameCanBeAddedToNamesArray()
    {
        $this->greeting->addName($this->name);
        $this->assertEquals("Spock", $this->greeting->names[1]);
    }
}