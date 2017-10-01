<?php

use PHPUnit\Framework\Testcase;
require_once './src/mixedCaseNames.php';


class MixedCaseNamesTest extends TestCase
{

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new MixedCaseNames(["Spock", "Paula", "PICARD"]);
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testMixedCaseNames()
    {
        $this->assertEquals('Hello, Spock and Paula. AND HELLO PICARD!', $this->greeter->greet($this->name));
    }
}