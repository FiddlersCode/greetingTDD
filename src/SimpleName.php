<?php
require_once 'greeter.php';

class SimpleName {

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return 'Hello, ' . $this->name . '.';

    }
}