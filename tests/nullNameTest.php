<?php

use PHPUnit\Framework\Testcase;

require_once  './src/nullName.php';

class NullNameTest extends TestCase {

    protected $greeting;
    protected $name;

    protected function setUp()
    {
        $this->nameObject = new NullName();

    }

    public function testNullNameGreeting()
    {
        $this->assertEquals("Hello, my friend.", $this->nameObject->greet());
    }
}