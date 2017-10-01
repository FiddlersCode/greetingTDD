<?php

class SimpleName {
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet($name)
    {
        return 'Hello, ' . $name . '.';

    }
}