<?php

use PHPUnit\Framework\Testcase;
require_once './src/multipleNames.php';


class MultipleNamesTest extends TestCase
{

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new MultipleNames(["Spock", "Paula", "Picard"]);
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testGreeting3Names()
    {
        $this->assertEquals('Hello, Spock, Paula, and Picard.', $this->greeter->greet($this->name));
    }
}