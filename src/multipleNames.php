<?php
require_once 'greeter.php';

class MultipleNames {

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        $this->name[(count($this->name) - 1)] = 'and ' . $this->name[(count($this->name) - 1)];
        return 'Hello, ' . implode(', ', $this->name) . '.';
    }
}