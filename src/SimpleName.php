<?php
require_once 'greeter.php';

class SimpleName extends Greeter {

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return 'Hello, ' . $this->name . '.';

    }
}