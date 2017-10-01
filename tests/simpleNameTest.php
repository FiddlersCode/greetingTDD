<?php

use PHPUnit\Framework\Testcase;
require_once './src/simpleName.php';

class SimpleNameTest extends TestCase {

    protected $greeter;
    protected $nameObject;
    // Do these properties need to be declared?

    protected function setUp()
    {
        $this->nameObject = new SimpleName("Spock");
        $this->greeter = new Greeter();
        $this->greeter->addName($this->nameObject);

    }

    public function testSimpleNameGreeting()
    {
        $this->assertEquals("Hello, Spock.", $this->greeter->greet());
    }
}