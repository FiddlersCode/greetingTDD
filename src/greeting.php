<?php

class Greeting {

    public function greet($name) {
        if ($name == null) {
            return 'Hello, my friend.';
        } else if(ctype_upper($name)){
            return 'HELLO ' . $name;
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


}


?>


