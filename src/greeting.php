<?php

class Greeting {

    public function greet($name) {
        if ($name == null) {
            return 'Hello, my friend.';
        } else if(ctype_upper($name)){
            return 'HELLO ' . $name;
        } else if (is_array($name) && $this->checkMixedGreeting($name)){
            return $this->returnMixedGreeting($name);
        } else if (is_array($name) && count($name) < 3){
            return 'Hello, ' . implode(' and ', $name);
        } else if (is_array($name) && count($name) > 2) {
            $name[(count($name) - 1)] = 'and ' . $name[(count($name) - 1)];
            return 'Hello, ' . implode(', ', $name) . '.';
        }
        else {
            return 'Hello, ' . $name;
        }

    }

    private function checkMixedGreeting($names)
    {
        foreach ($names as $name) {
            if (ctype_upper($name)){
                return true;
                break;
            }
        }
    }

    private function returnMixedGreeting($names)
    {
        $i = 0;
        foreach ($names as $name)
        {
            if (ctype_upper($name)) {
                $upperGreeting = '. AND HELLO ' . $name . '!';
                unset ($names[$i]);
            }
            $i++;

        }
        return 'Hello, ' . implode(' and ', $names) . $upperGreeting;

    }


}


?>


