<?php
require_once 'greeter.php';

class MixedCaseNames {

    private $upperGreeting;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet()
    {
        $i = 0;
        foreach ($this->name as $name)
        {
            if (ctype_upper($name)) {
                $this->upperGreeting = 'AND HELLO ' . $name . '!';
                unset ($this->name[$i]);
            }
            $i++;

        }
        return 'Hello, ' . implode(' and ', $this->name) . '. ' . $this->upperGreeting;
    }
}