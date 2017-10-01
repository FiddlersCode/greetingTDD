<?php

use PHPUnit\Framework\Testcase;
require_once './src/itemWithTwoNames.php';


class ItemWithTwoNamesTest extends TestCase
{
    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new ItemWithTwoNames(["Spock", "Paula, Picard"]);
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testCommaInString()
    {
        $this->assertEquals('Hello, Spock, Paula, and Picard.', $this->greeter->greet($this->name));
    }

}