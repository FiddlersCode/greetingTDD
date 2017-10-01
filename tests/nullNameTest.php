<?php

use PHPUnit\Framework\Testcase;

require_once  './src/nullName.php';

class NullNameTest extends TestCase {

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new NullName();
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testNullNameGreeting()
    {
        $this->assertEquals("Hello, my friend.", $this->greeter->greet());
    }
}