<?php

class Greeter
{
    public $names = [];

    public function addName($name)
    {
        array_push($this->names, $name);
    }

    public function greet()
    {
        foreach ($this->names as $name) {
            return $name->greet();
        }
    }

}