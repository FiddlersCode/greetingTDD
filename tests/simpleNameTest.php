<?php

use PHPUnit\Framework\Testcase;
require_once './src/simpleName.php';

class SimpleNameTest extends TestCase {

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new SimpleName("Spock");
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testSimpleNameGreeting()
    {
        $this->assertEquals("Hello, Spock.", $this->greeter->greet());
    }
}