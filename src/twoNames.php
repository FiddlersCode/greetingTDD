<?php
require_once 'greeter.php';

class TwoNames {

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        return 'Hello, ' . implode(' and ', $this->name) . '.';

    }
}

