<?php
require_once 'greeter.php';

class UppercaseName {

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return 'HELLO ' . $this->name . '!';

    }
}