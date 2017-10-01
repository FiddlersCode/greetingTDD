<?php

use PHPUnit\Framework\Testcase;

require_once  './src/greeter.php';
require_once  './src/simpleName.php';

class greetingTest extends TestCase {

    protected $greeting;
    protected $name;

    protected function setUp()
    {
        $this->nameObject = new SimpleName("Spock");
        $this->greeting = new Greeter();
    }

    public function testNameCanBeAddedToNamesArray()
    {
        $this->greeting->addName($this->nameObject);
        $this->assertEquals("Spock", $this->greeting->names[0]->name);
    }
}