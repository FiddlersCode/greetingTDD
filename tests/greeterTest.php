<?php

use PHPUnit\Framework\Testcase;

class GreeterTest extends TestCase {

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->nameObject = new SimpleName("Spock");
        $this->greeter = new Greeter();
    }

    public function testNameCanBeAddedToNamesArray()
    {
        $this->greeter->addName($this->nameObject);
        $this->assertEquals("Spock", $this->greeter->names[0]->name);
    }
}