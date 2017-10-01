<?php

class Greeting
{
    public $names = [];

    public function __construct($name)
    {
        array_push($this->names, $name);
    }

    public function addName($name)
    {
        array_push($this->names, $name);
    }

//    public function greet($nameObject)
//    {
//        foreach ($names as $name) {
//            $name->greet();
//            return $name;
//        }
//    }

}