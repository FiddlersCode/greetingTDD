<?php

use PHPUnit\Framework\TestCase;
require_once './src/twoNames.php';

class TwoNamesTest extends TestCase {

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new TwoNames(["Spock", "Paula"]);
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testTwoNamesGreeting()
    {
        $this->assertEquals("Hello, Spock and Paula.", $this->greeter->greet($this->name));
    }
}