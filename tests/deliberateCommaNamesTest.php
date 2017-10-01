<?php

use PHPUnit\Framework\Testcase;
require_once './src/deliberateCommaNames.php';


class DeliberateCommaNamesTest extends TestCase {

    protected $greeter;
    protected $name;

    protected function setUp()
    {
        $this->name = new DeliberateCommaNames(["Spock", "\"Paula, Picard\""]);
        $this->greeter = new Greeter();
        $this->greeter->addName($this->name);

    }

    public function testEscapedCommas()
    {
        $this->assertEquals('Hello, Spock and Paula, Picard.', $this->greeter->greet($this->name));
    }


}

?>