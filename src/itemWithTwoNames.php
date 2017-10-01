<?php
require_once 'greeter.php';

class ItemWithTwoNames {

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        $this->splitItemsWith2Names();
        $this->name[(count($this->name) - 1)] = 'and ' . $this->name[(count($this->name) - 1)];
        return 'Hello, ' . implode(', ', $this->name) . '.';
    }

    private function splitItemsWith2Names()
    {
        $splitNames = [];
        $allNames = [];
        foreach ($this->name as $name) {
            if (strpos($name, ',')) {
                $splitNames = preg_split("/[\s,]+/", $name);
            } else {
                array_push($allNames, $name);
            }
        }

        $this->name = array_merge($allNames, $splitNames);
    }
}